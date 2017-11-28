@extends('template.admin')

@section('title','Candidate')

@section('titlepage')
  <h2><i class="fa fa-dashboard"></i> Candidate</h2>
@endsection

@section('content')
  @if (session('suc'))
    <div class="alert alert-success alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <strong><i class="fa fa-check"></i> Success</strong> {{session('suc')}}
    </div>
  @endif
  <div class="row">
    <div class="col-xs-12">
      @component('componant.panel')
        @slot('title','Wait Resume')
        @slot('class_title','fa-hourglass-half')
        @slot('caption',null)
          <table class="table table_normal table-responsive table-bordered text-center">
            <thead>
              <tr class="bg-info">
                <th class="text-center">#</th>
                <th class="text-center">Name</th>
                <th class="text-center">ID Card</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($user_mem->whereIn('status_fm',['SF','PF']) as $value)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$value->name}}</td>
                  <td>{{$value->username}}</td>
                  <td>
                    <label class="label label-warning">{{$value->getStatustxt()->first()->descript}}</label>
                  </td>
                  <td>
                    <form class="del" id="del{{$loop->index}}" name="del{{$loop->index}}" action="{{route('candidate_delete_admin',['usr'=>$value->id])}}" method="post">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                    </form>
                    <form id="upt{{$loop->index}}" name="upt{{$loop->index}}" action="{{route('candidate_update_admin',['usr'=>$value->id])}}" method="post">
                      {{csrf_field()}}
                      {{method_field('PATCH')}}
                      <input type="hidden" class="hide" name="status" value="CF" readonly>
                    </form>
                    <div class="btn-group">
                      @if ($value->status_fm=='SF')
                        <button type="button" class="btn btn-info modeldb" data-id="{{$value->id}}" title="Resume">
                          <i class="fa fa-info"></i>
                        </button>
                        <button type="submit" form="upt{{$loop->index}}" class="btn btn-success" title="Close Resume" data-toggle="tooltip">
                          <i class="fa fa-check"></i>
                        </button>
                      @endif
                      <a href="{{route('candidate_edit_admin',['usr'=>$value->id])}}" class="btn btn-warning" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a>
                      <button type="submit" form="del{{$loop->index}}" class="btn btn-danger" title="Delete" data-toggle="tooltip">
                        <i class="fa fa-trash-o"></i>
                      </button>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
      @endcomponent
    </div>
    <div class="col-xs-12">
      @component('componant.panel')
        @slot('title','Complete Resume')
        @slot('class_title','fa-check')
        @slot('caption',null)
          <table class="table table_normal table-responsive table-bordered text-center">
            <thead>
              <tr class="bg-info">
                <th class="text-center">#</th>
                <th class="text-center">Name</th>
                <th class="text-center">ID Card</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($user_mem->where('status_fm','CF') as $value)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$value->name}}</td>
                  <td>{{$value->username}}</td>
                  <td><label class="label label-success">{{$value->getStatustxt()->first()->descript}}</label></td>
                  <td>
                    <form id="upts{{$loop->index}}" name="upts{{$loop->index}}" action="{{route('candidate_update_admin',['usr'=>$value->id])}}" method="post">
                      {{csrf_field()}}
                      {{method_field('PATCH')}}
                      <input type="hidden" class="hide" name="status" value="SF" readonly>
                    </form>
                    <div class="btn-group">
                      <button type="button" class="btn btn-info modeldb" data-id="{{$value->id}}" title="Resume">
                        <i class="fa fa-info"></i>
                      </button>
                      <button type="submit" form="upts{{$loop->index}}" class="btn btn-primary" title="Reopen Resume" data-toggle="tooltip">
                        <i class="fa fa-repeat"></i>
                      </button>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
      @endcomponent
    </div>
  </div>
  <div class="modal fade infomd" id="" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="">Resume <button type="button" title="Print" data-toggle="tooltip" class="btn btn-lg btn-link printbtn"><i class="fa fa-print"></i></button></h4>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script>
  $(function() {
    $('.table_normal').DataTable();
    $('.del').on('submit',function(event) {
      if (confirm('Do You Want To Delete This User?')) {
        return true;
      }else {
      event.preventDefault();
      }
    });
    $('.modeldb').on('click', function(event) {
      $.get('candidate/'+$(this).attr('data-id')+'/show').then(function(data) {
        $('.modal-body').html(data);
        $('.infomd').modal('show');
      }, function(err) {
        console.log(err);
      });
    });
    $('.printbtn').on('click', function(event) {
      $('.modal-body').printArea( {mode :'iframe'} );
    });
  });
  </script>
@endsection

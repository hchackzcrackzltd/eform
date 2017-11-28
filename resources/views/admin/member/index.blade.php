@extends('template.admin')

@section('title','User')

@section('titlepage')
  <h2><i class="fa fa-user"></i> User</h2>
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
        @slot('title','List User')
        @slot('class_title','fa-list')
        @slot('caption',null)
          <table class="table table_normal table-responsive table-bordered text-center">
            <thead>
              <tr class="bg-info">
                <th class="text-center">#</th>
                <th class="text-center">Name</th>
                <th class="text-center">Username</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($usr_mem as $value)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$value->name}}</td>
                  <td>{{$value->username}}</td>
                  <td>
                    <form class="del" id="del{{$loop->index}}" name="del{{$loop->index}}" action="{{route('member.destroy',['member'=>$value->id])}}" method="post">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                    </form>
                    <div class="btn-group">
                      <a href="{{route('member.edit',['member'=>$value->id])}}" class="btn btn-warning" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a>
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
  });
  </script>
@endsection

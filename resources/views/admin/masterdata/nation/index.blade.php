@extends('template.admin')

@section('title','Masterdata - Nationality')

@section('titlepage')
  <h2><i class="fa fa-archive"></i> Nationality</h2>
@endsection

@section('content')
  @foreach ($errors->all() as $value)
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <strong><i class="fa fa-times"></i> Error</strong> {{$value}}
    </div>
  @endforeach
  @if (session('suc'))
    <div class="alert alert-success alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <strong><i class="fa fa-check"></i> Success</strong> {{session('suc')}}
    </div>
  @endif
    <div class="row">
      <div class="col-xs-12">
        @component('componant.panel')
          @slot('title','Masterdata - Nationality')
          @slot('class_title','fa-archive')
          @slot('caption',null)
            <button type="button" class="btn btn-success" data-toggle='modal' data-target="#create" title="Add Nationality">
              <i class="fa fa-plus"></i> ADD
            </button>
            <div class="table-responsive">
              <table class="table table-striped table-condensed text-center">
                <thead>
                  <tr class="bg-info">
                    <th class="text-center">Nationality</th>
                    <th class="text-center">Menu</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($data as $value)
                    <tr>
                      <td>{{$value->name}}</td>
                      <td><div class="btn-group">
                        <form action="{{route('nation.destroy',['nation'=>$value->id])}}" method="post">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                          <button type="submit" class="btn btn-danger" title="Delete" data-toggle="tooltip">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>
                      </div></td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="2"><b>No Data</b></td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
        @endcomponent
      </div>
    </div>
    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="create" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-plus"></i> Add Nationality</h4>
          </div>
          <div class="modal-body">
            <form action="{{route('nation.store')}}" method="post">
              {{csrf_field()}}
              <div class="form-group">
                <label for="posit">Nationality</label>
                <input type="text" class="form-control" id="posit" name="posit" placeholder="Insert nationality here" required>
                <p class="help-block">Insert nationality here.</p>
              </div>
              <div class="col-xs-12 text-right">
                <button type="submit" class="btn btn-success">
                  <i class="glyphicon glyphicon-floppy-disk"> Save</i>
                </button>
              </div>
            </form>
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
    $('table').DataTable();
  });
</script>
@endsection

@extends('template.admin')

@section('title','Export')

@section('titlepage')
  <h2><i class="fa fa-share"></i> Export</h2>
@endsection

@section('content')
  @if (session('suc'))
    <div class="alert alert-success alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <strong><i class="fa fa-check"></i> Success</strong> {{session('suc')}}
    </div>
  @endif
  @foreach ($errors->all() as $value)
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <strong><i class="fa fa-times"></i> Error</strong> {{$value}}
    </div>
  @endforeach
  <div class="row">
    <div class="col-xs-12">
      @component('componant.panel')
        @slot('title','Candidate List')
        @slot('class_title','fa-list')
        @slot('caption',null)
          <form action="{{route('candidate_exportout')}}" method="post">
          <table class="table table_normal table-responsive table-bordered text-center">
            <thead>
              <tr class="bg-info">
                <th class="text-center"><input type="checkbox" name="all" value="1" title="Select All"></th>
                <th class="text-center">Name</th>
                <th class="text-center">ID Card</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $value)
                <tr>
                  <td><input type="checkbox" class="cks" name="item[]" value="{{$value->id}}"></td>
                  <td>{{$value->nameeng}}</td>
                  <td>{{$value->code_card}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <div class="col-xs-12 text-right">
            {{csrf_field()}}
            <div class="btn-group">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-share"></i> Export
              </button>
            </div>
          </div>
          </form>
      @endcomponent
    </div>
  </div>
@endsection

@section('script')
  <script>
  $(function() {
    $('.table_normal').DataTable({
      "columnDefs": [
   { "orderable": false, "targets": 0 }
 ]
    });
    $('input[name=all]').on('change', function(event) {
      if ($(this).prop('checked')) {
        $('.cks').prop('checked', true);
      }else {
        $('.cks').prop('checked', false);
      }
    });
  });
  </script>
@endsection

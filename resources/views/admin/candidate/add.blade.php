@extends('template.admin')

@section('title','Add New Candidate')

@section('titlepage')
  <h2><i class="fa fa-plus"></i> Add New Candidate</h2>
@endsection

@section('content')
@foreach ($errors->all() as $value)
  <div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    <strong><i class="fa fa-times"></i> Error</strong> {{$value}}
  </div>
@endforeach
  <div class="row">
    <div class="col-xs-12">
      @component('componant.panel')
        @slot('title','Add New Candidate')
        @slot('class_title','fa-file-text-o')
        @slot('caption',null)
          <form action="{{route('candidate_store_admin')}}" method="post" data-parsley-validate>
            {{csrf_field()}}
          <div class="col-xs-6">
            <div class="form-group">
              <label for="fn">First Name</label>
              <input type="text" class="form-control" id="fn" name="fn" value="{{old('fn')}}" placeholder="First Name" data-parsley-error-message="Plase Insert First Name" data-inputmask-regex="[a-zA-Zก-๙]*" data-parsley-required>
              <p class="help-block"></p>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="form-group">
              <label for="ln">Last Name</label>
              <input type="text" class="form-control" id="ln" name="ln" value="{{old('ln')}}" placeholder="Last Name" data-parsley-error-message="Plase Insert Last Name" data-inputmask-regex="[a-zA-Zก-๙]*" data-parsley-required>
              <p class="help-block"></p>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="form-group">
              <label for="ic">ID Card</label>
              <input type="text" class="form-control" id="ic" name="ic" value="{{old('ic')}}" placeholder="ID Card" data-parsley-error-message="Plase Insert ID Card" data-parsley-pattern='[0-9]-[0-9][0-9][0-9][0-9]-[0-9][0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9]' data-inputmask="'mask':'9-9999-99999-99-9'" data-parsley-required>
              <p class="help-block"></p>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="form-group">
              <label for="em">E-Mail</label>
              <input type="text" class="form-control" id="em" name="em" value="{{old('em')}}" placeholder="E-Mail" data-parsley-error-message="Plase Insert E-Mail" data-parsley-type="email" data-inputmask="'alias':'email'" data-parsley-required>
              <p class="help-block"></p>
            </div>
          </div>
          <div class="col-xs-12 text-right">
            <div class="btn-group">
              <button type="submit" class="btn btn-success">
                <i class="fa fa-floppy-o"></i> Save
              </button>
              <button type="reset" class="btn btn-default">
                <i class="fa fa-repeat"></i> Reset
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
    $('input').inputmask();
  });
  </script>
@endsection

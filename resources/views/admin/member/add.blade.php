@extends('template.admin')

@section('title','Add New User')

@section('titlepage')
  <h2><i class="fa fa-plus"></i> Add New User</h2>
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
        @slot('title','Add New User')
        @slot('class_title','fa-file-text-o')
        @slot('caption',null)
          <form action="{{route('member.store')}}" method="post" data-parsley-validate>
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
          <div class="col-xs-12">
            <div class="form-group">
              <label for="un">UserName</label>
              <input type="text" class="form-control" id="un" name="un" value="{{old('un')}}" placeholder="UserName" data-parsley-error-message="Plase Insert UserName" data-parsley-pattern='[0-9a-zA-Z\-\_]*' data-inputmask-regex="[0-9a-zA-Z\-\_]*" data-parsley-required>
              <p class="help-block"></p>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="form-group">
              <label for="pw">Password</label>
              <input type="password" class="form-control" id="pw" name="password" value="{{old('password')}}" placeholder="Password" data-parsley-error-message="Plase Insert Password" data-parsley-required>
              <p class="help-block"></p>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="form-group">
              <label for="pw">Confirm Password</label>
              <input type="password" class="form-control" id="pc" name="password_confirmation" value="{{old('password_confirmation')}}" placeholder="Confirm Password" data-parsley-error-message="Password Not Match" data-parsley-equalto="#pw" data-parsley-required>
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

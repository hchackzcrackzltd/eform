@extends('template.admin')

@section('title','E-Mail Notification')

@section('titlepage')
  <h2><i class="fa fa-envelope-o"></i> E-Mail Notification</h2>
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
      @if (session('suc'))
        <div class="alert alert-success alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          <strong><i class="fa fa-check"></i> Success</strong> {{session('suc')}}
        </div>
      @endif
      @component('componant.panel')
        @slot('title','E-Mail Notification')
        @slot('class_title','fa-cog')
        @slot('caption',null)
          <form action="{{route('email.update',['email'=>$data->id])}}" method="post" data-parsley-validate>
            {{csrf_field()}}
            {{method_field('PATCH')}}
          <div class="col-xs-12">
            <div class="form-group">
              <label for="em">E-Mail</label>
              <input type="text" class="form-control" id="em" name="em" value="{{$data->email}}" placeholder="E-Mail" data-parsley-error-message="Plase Insert E-Mail" data-parsley-type="email" data-inputmask="'alias': 'email'" data-parsley-required>
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

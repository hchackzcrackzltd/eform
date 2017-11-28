@extends('template.theme')

@section('content')
  <div class="row">
    @foreach ($errors->all() as $value)
      <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
      <strong><i class="ace-icon fa fa-times"></i>&nbsp;&nbsp;กรุณาตรวจสอบข้อมูล</strong>&nbsp;&nbsp;{{$value}}<br>
      </div>
    @endforeach
  </div>
  <div class="row" style=" background-color: rgba(231, 231, 231, 0.4);">
    <div id="modal-wizard-container" >
      <div class="modal-header">
        <ul class="steps">
          <li data-step="1" class="active">
            <span class="step">1</span>
            <span class="title">Page 1</span>
          </li>

          <li data-step="2">
            <span class="step">2</span>
            <span class="title">Page 2</span>
          </li>

          <li data-step="3">
            <span class="step">3</span>
            <span class="title">Page 3</span>
          </li>

          <li data-step="4">
            <span class="step">4</span>
            <span class="title">Page 4</span>
          </li>
        </ul>
      </div>
      <form id="efm" name="efm" action="{{route('eform.store')}}" method="post" enctype="multipart/form-data" data-parsley-validate="">
        {{csrf_field()}}
        </form>
      <div class="modal-body step-content" style="border: 1px rgb(228, 224, 224) solid; background-color: rgba(255, 255, 255, 0.33);">
        <div class="step-pane active" data-step="1">
            @include('form.section1')
        </div>

        <div class="step-pane" data-step="2">
            @include('form.section2')
        </div>

        <div class="step-pane" data-step="3">
          @include('form.section3')
        </div>

        <div class="step-pane" data-step="4">
          @include('form.section4')
        </div>
      </div>
    </div>
    <div class="modal-footer wizard-actions">
      <button class="btn btn-sm btn-prev">
        <i class="ace-icon fa fa-arrow-left"></i>
        Prev
      </button>

      <button class="btn btn-success btn-sm btn-next" data-last="Finish">
        Next
        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
      </button>
    </div>
  </div>
  <div class="modal fade" id="preview" tabindex="-1" role="dialog" aria-labelledby="preview" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id=""><i class="fa fa-search"></i> Preview</h4>
        </div>
        <div class="modal-body preview">
        </div>
        <div class="modal-footer">
          <button form="efm" type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> <b>Send</b></button>
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> <b>Cancle</b></button>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
  <script src="{{asset('js/app.min.js')}}"></script>
@endsection

<div class="form-horizontal " style="padding:0px 50px  0px 50px;"  >

  <div  >
    <h4 class="green">การทำงานรวมทั้งงานชั่วคราว/การฝึกงาน / EMPLOYMENT :  (Including Temporary Work/Practical Training)</h4>
  </div>
<br />
<h5 class="green "><u>การทำงานล่าสุด Lastest Job:</u></h5>

<div class="form-group">
  <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">สถานะงาน / Status Job</div>

  <div class="col-sm-9">
    <label><input type="checkbox" name="hco_status" value="1" form="efm" {{(old('hco_status')==1)?'checked':null}}> :ว่างงาน / Unemployed</label>
  </div>
</div>
<div class="hco_lj">
  <div class="form-group">
    <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">องค์กร / บริษัท / Company</div>

    <div class="col-sm-9">
      <input class="col-xs-12" type="text" name="hco_name" value="{{old('hco_name')}}" form="efm" data-inputmask-regex="[A-Za-zก-๙0-9]*" placeholder="Company Name"/>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ตั้งอยู่ที่ / Address</div>

    <div class="col-sm-9" >
      <textarea id="form-field-11" class="autosize-transition form-control" name="hco_address" form="efm" placeholder="Address">{{old('hco_address')}}</textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">เริ่มงานเมื่อ / Start date</div>

    <div class="col-sm-9" >
      <div class="input-group">
        <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" form="efm" placeholder="Start date" value="{{old('hco_strdate')}}" name="hco_strdate" readonly>
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">สื้นสุด / Until</div>

    <div class="col-sm-9" >
      <div class="input-group">
        <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" form="efm" value="{{old('hco_enddate')}}" placeholder="Until" name="hco_enddate" data-inputmask="'alias': 'yyyy-mm-dd'">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
      </div>
      <p class="text-danger">*หากทำงานถึงปัจจุบัน กรุณาเว้นว่าง</p>
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">ตำแหน่ง / Position</div>

    <div class="col-sm-9">
      <input class="col-xs-12" type="text" name="hco_posit" value="{{old('hco_posit')}}" form="efm" data-inputmask-regex="[A-Za-zก-๙0-9]*" placeholder="Position"/>
    </div>
  </div>


      <div class="form-group">
        <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ลักษณะงาน / Responsibilities</div>

        <div class="col-sm-9" >
          <textarea id="form-field-11" class="form-control" name="hco_respon" form="efm" placeholder="Responsibilities">{{old('hco_respon')}}</textarea>
        </div>
      </div>


      <div class="form-group">
        <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> บุคคลอ้างอิง / Reference</div>

        <div class="col-sm-9" >
          <input class="col-sm-12" type="text" name="hco_ref" value="{{old('hco_ref')}}" form="efm" data-inputmask-regex="[A-Za-zก-๙]*" placeholder="Reference"/>
        </div>
      </div>

  <div class="form-group">
    <div class="col-sm-3"> เกี่ยวข้องเป็น /  Relation </div>
    <div class="col-sm-3"> <input class="col-sm-12" type="text" name="hco_rel" value="{{old('hco_rel')}}" form="efm" data-inputmask-regex="[A-Za-zก-๙]*" placeholder="Relation"/></div>

    <div class="col-sm-2"><center>   โทร /  Tel   </center> </div>
    <div class="col-sm-4"> <input class="col-sm-12" type="text" name="hco_tel" value="{{old('hco_tel')}}" form="efm" data-inputmask-regex="[0-9\-]*" placeholder="Tel"/> </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3"> เหตุผลที่ลาออก /  Reason for leaving </div>
    <div class="col-sm-9">
      <textarea name="hco_resign" class="form-control autosize" rows="5" form="efm" placeholder="Reason for resign">{{old('hco_resign')}}</textarea>
    </div>
  </div>
</div>

  <div class="row">
    <div class="col-xs-12">
      <div class="widget-box">
        <div class="widget-header widget-header-flat">
          <h5 class="smaller">
              ประวัติการทำงานที่ผ่านมา Previous Job:
          </h5>
        </div>

        <div class="widget-body" style="padding:0px 20px 0px 20px;" >
          <div class="widget-main">
            <div class="form-group">
              @forelse ((count(old('his'))>0)?old('his'):[] as $key => $value)
                @if ($key==0)
                  <div id="post_job" class="job-item float-clear" data-index="{{$key}}" style="clear:both;">
                    <div class="form-group">
                      <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">
                        องค์กร / บริษัท / Company</div>

                      <div class="col-sm-9">
                        <input class="col-xs-12" type="text" form="efm" name="his[{{$key}}][name]" value="{{$value['name']}}" placeholder="Company Name" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ตั้งอยู่ที่ / Address</div>

                      <div class="col-sm-9" >
                        <textarea id="form-field-11" class="autosize-transition form-control" form="efm" name="his[{{$key}}][address]" placeholder="Address">{{$value['address']}}</textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">เริ่มงานเมื่อ / Start date</div>

                      <div class="col-sm-9" >
                        <div class="input-group">
                          <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" form="efm" placeholder="Start date" value="{{$value['strdate']}}" name="his[{{$key}}][strdate]" readonly>
                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">สื้นสุด / Until</div>
                      <div class="col-sm-9" >
                        <div class="input-group">
                          <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" form="efm" placeholder="Until" value="{{$value['enddate']}}" name="his[{{$key}}][enddate]" readonly>
                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">ตำแหน่ง / Position</div>

                      <div class="col-sm-9">
                        <input class="col-xs-12" type="text" name="his[{{$key}}][posit]" value="{{$value['posit']}}" form="efm" placeholder="Position" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
                      </div>
                    </div>


                        <div class="form-group">
                          <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ลักษณะงาน / Responsibilities</div>

                          <div class="col-sm-9" >
                            <textarea id="form-field-11" class="form-control" form="efm" placeholder="Responsibilities" name="his[{{$key}}][respon]">{{$value['respon']}}</textarea>
                          </div>
                        </div>


                        <div class="form-group">
                          <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> บุคคลอ้างอิง / Reference</div>

                          <div class="col-sm-9" >
                            <input class="col-sm-12" type="text" form="efm" placeholder="Reference" name="his[{{$key}}][ref]" value="{{$value['ref']}}" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
                          </div>
                        </div>

                      <div class="form-group">
                      <div class="col-sm-3"> เกี่ยวข้องเป็น /  Relation </div>
                      <div class="col-sm-3"> <input class="col-sm-12" type="text" placeholder="Relation" form="efm" name="his[{{$key}}][rel]" value="{{$value['rel']}}" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/> </div>

                      <div class="col-sm-2"><center>   โทร /  Tel   </center> </div>
                      <div class="col-sm-4"> <input class="col-sm-12" type="text" placeholder="Tel" form="efm" name="his[{{$key}}][tel]" value="{{$value['tel']}}" data-inputmask-regex='[0-9\-]*'/> </div>
                      </div>
                  <hr />
                  </div>
                            <DIV id="job">
                @else
                  <div id="post_job" class="job-item float-clear" data-index="{{$key}}" style="clear:both;">
                    <div class="form-group">
                      <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">
                        องค์กร / บริษัท / Company</div>

                      <div class="col-sm-9">
                        <input class="col-xs-12" type="text" form="efm" name="his[{{$key}}][name]" value="{{$value['name']}}" placeholder="Company Name" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ตั้งอยู่ที่ / Address</div>

                      <div class="col-sm-9" >
                        <textarea id="form-field-11" class="autosize-transition form-control" form="efm" name="his[{{$key}}][address]" placeholder="Address">{{$value['address']}}</textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">เริ่มงานเมื่อ / Start date</div>

                      <div class="col-sm-9" >
                        <div class="input-group">
                          <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" form="efm" placeholder="Start date" value="{{$value['strdate']}}" name="his[{{$key}}][strdate]" readonly>
                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">สื้นสุด / Until</div>
                      <div class="col-sm-9" >
                        <div class="input-group">
                          <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" form="efm" placeholder="Until" value="{{$value['enddate']}}" name="his[{{$key}}][enddate]" readonly>
                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">ตำแหน่ง / Position</div>

                      <div class="col-sm-9">
                        <input class="col-xs-12" type="text" name="his[{{$key}}][posit]" value="{{$value['posit']}}" form="efm" placeholder="Position" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
                      </div>
                    </div>


                        <div class="form-group">
                          <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ลักษณะงาน / Responsibilities</div>

                          <div class="col-sm-9" >
                            <textarea id="form-field-11" class="form-control" form="efm" placeholder="Responsibilities" name="his[{{$key}}][respon]">{{$value['respon']}}</textarea>
                          </div>
                        </div>


                        <div class="form-group">
                          <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> บุคคลอ้างอิง / Reference</div>

                          <div class="col-sm-9" >
                            <input class="col-sm-12" type="text" form="efm" placeholder="Reference" name="his[{{$key}}][ref]" value="{{$value['ref']}}" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
                          </div>
                        </div>

                      <div class="form-group">
                      <div class="col-sm-3"> เกี่ยวข้องเป็น /  Relation </div>
                      <div class="col-sm-3"> <input class="col-sm-12" type="text" placeholder="Relation" form="efm" name="his[{{$key}}][rel]" value="{{$value['rel']}}" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/> </div>

                      <div class="col-sm-2"><center>   โทร /  Tel   </center> </div>
                      <div class="col-sm-4"> <input class="col-sm-12" type="text" placeholder="Tel" form="efm" name="his[{{$key}}][tel]" value="{{$value['tel']}}" data-inputmask-regex='[0-9\-]*'/> </div>
                      </div>
                  <hr />
                  </div>
                @endif
              @empty
              <div id="post_job" class="job-item float-clear" data-index="0" style="clear:both;">
                <div class="form-group">
                  <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">
                  <!--  <input    type="checkbox" name="item_index[]" />-->
                    องค์กร / บริษัท / Company</div>

                  <div class="col-sm-9">
                    <input class="col-xs-12" type="text" form="efm" name="his[0][name]" placeholder="Company Name" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ตั้งอยู่ที่ / Address</div>

                  <div class="col-sm-9" >
                    <textarea id="form-field-11" class="autosize-transition form-control" form="efm" name="his[0][address]" placeholder="Address"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">เริ่มงานเมื่อ / Start date</div>

                  <div class="col-sm-9" >
                    <div class="input-group">
                      <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" form="efm" placeholder="Start date" name="his[0][strdate]" readonly>
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">สื้นสุด / Until</div>
                  <div class="col-sm-9" >
                    <div class="input-group">
                      <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" form="efm" placeholder="Until" name="his[0][enddate]" readonly>
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">ตำแหน่ง / Position</div>

                  <div class="col-sm-9">
                    <input class="col-xs-12" type="text" name="his[0][posit]" form="efm" placeholder="Position" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
                  </div>
                </div>


                    <div class="form-group">
                      <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ลักษณะงาน / Responsibilities</div>

                      <div class="col-sm-9" >
                        <textarea id="form-field-11" class="form-control" form="efm" placeholder="Responsibilities" name="his[0][respon]"></textarea>
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> บุคคลอ้างอิง / Reference</div>

                      <div class="col-sm-9" >
                        <input class="col-sm-12" type="text" form="efm" placeholder="Reference" name="his[0][ref]" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
                      </div>
                    </div>

                  <div class="form-group">
                  <div class="col-sm-3"> เกี่ยวข้องเป็น /  Relation </div>
                  <div class="col-sm-3"> <input class="col-sm-12" type="text" placeholder="Relation" form="efm" name="his[0][rel]" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/> </div>

                  <div class="col-sm-2"><center>   โทร /  Tel   </center> </div>
                  <div class="col-sm-4"> <input class="col-sm-12" type="text" placeholder="Tel" form="efm" name="his[0][tel]" data-inputmask-regex='[0-9\-]*'/> </div>
                  </div>
              <hr />
              </div>
                        <DIV id="job">
              @endforelse
                        </DIV>
                        <DIV class="btn-action float-clear">
                        <input type="button" name="add_item" value="+ Add More" data-con="#job" data-cont="#post_job" class="btn btn-success btn-xs addmore"/>
                        <input type="button" name="del_item" value="- Delete" data-cont="#job .job-item:last" class="btn btn-danger btn-xs delete"/>

                        </DIV>
             </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  </div>

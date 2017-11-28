<div class="form-horizontal" style="padding:0px 50px  0px 50px;"  >
<div  >
<h4 class="green">การรับราชการทหาร / MILITARY SERVICE</h4>
</div>
<div class="space-6"></div>
<div class="form-group">
<div class="col-md-12">ท่านผ่านการเกณฑ์ทหารมาแล้วหรือยัง? / Have you completed your national service? </div>
<br />
<div class="col-md-12">
  <div class="inline">
      <input form="efm" name="national_format" id="national-format"  type="radio"  class="ace" value="1" {{(old('national_format')==1)?'checked':($data->national_format==1)?'checked':null}}/>
          <label class="lbl middle" for="national-format"> เกณฑ์แล้ว Yes</label>
  </div>
 <div class="space-6"></div>
  <div class="inline">
      <input form="efm" name="national_format" id="national-format-01" type="radio" class="ace" value="2" {{(old('national_format')==2)?'checked':($data->national_format==2)?'checked':null}}/>
          <label class="lbl middle" for="national-format-01"> ยังไม่เกณฑ์ No</label>
        <div id="national-box01">  &nbsp;&nbsp;&nbsp;
          ถ้ายัง ถึงกำหนดเมื่อ / If no, specify when <input  form="efm" type="text" name="national_format_due" value="{{(is_null(old('national_format_due')))?$data->national_format_due:old('national_format_due')}}" class="date-picker" data-date-format="yyyy-mm-dd" placeholder="Specify when" readonly/></div>
  </div>
  <div class="space-6"></div>
    <div class="inline">
    <input form="efm" name="national_format" id="national-format-02" type="radio"  class="ace" value="3" {{(old('national_format')==3)?'checked':($data->national_format==3)?'checked':null}}/>
        <label class="lbl middle" for="national-format-02"> ได้รับการยกเว้นเพราะ If exempted specify reason</label>
        <div id="national-box02">
         <input form="efm" class="col-md-12" type="text" name="national_format_ref" value="{{(is_null(old('national_format_ref')))?$data->national_format_ref:old('national_format_ref')}}" placeholder="Specify reason" data-inputmask-regex="[a-zA-z0-9ก-๙\s]*"/></div>
    </div>
</div>
</div>

<hr />
   <div class="row">
     <div class="col-xs-12">
       <div class="widget-box">
         <div class="widget-header widget-header-flat">
           <h5 class="smaller">
          ประวัติการศึกษา / EDUCATIONAL BACKGROUND
         </h5>
         </div>

         <div class="widget-body"  style="padding:20px 50px  0px 50px;">
           <div class="widget-main">
             <div class="form-group">
               @forelse ((count(old('uni'))>0)?old('uni'):$data->getEdu as $key => $valueold)
                 @if ($key==0)
                   <div id="post_uni" data-index='{{$key}}' class="uni-item float-clear post_uni" style="clear:both;">

                     <div class="form-group">
                       <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">การศึกษา / Education</div>
                       <div class="col-sm-9">
                         <div class="clearfix">
                       <select class="form-control" form="efm" name="uni[{{$key}}][typeuni]">
                         @forelse ($master_edu as $value)
                           <option value="{{$value->id}}" {{(is_null(old('uni')))?($valueold->edu_id==$value->id)?'selected':null:($valueold['typeuni']==$value->id)?'selected':null}}>{{$value->name}}</option>
                         @empty
                           <option disabled>No Education Masterdata</option>
                         @endforelse
                       </select>
                       </div>
                       </div>
                     </div>

                     <div class="form-group">
                       <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">

                          ชื่อสถานการศึกษา / Institute Name</div>

                       <div class="col-sm-9">
                         <div class="clearfix">
                            <input form="efm" type="text" class="col-xs-12" name="uni[{{$key}}][name]" value="{{(is_null(old('uni')))?$valueold->name:$valueold['name']}}" placeholder="Institute Name" data-inputmask-regex="[a-zA-Z0-9ก-๙\.\s]*"/>
                         </div>
                       </div>
                     </div>

                     <div class="form-group">
                       <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ที่ตั้ง / Location
                       </div>

                       <div class="col-sm-9" >
                         <textarea form="efm" id="form-field-11" class="autosize-transition form-control" name="uni[{{$key}}][locat]" placeholder="Location">{{(is_null(old('uni')))?$valueold->locat:$valueold['locat']}}</textarea>
                       </div>
                     </div>

                     <div class="form-group">
                       <div class="col-sm-3 control-div no-padding-right" for="form-field-1">ระยะเวลา Period</div>

                       <div class="col-sm-9">
                         <div class="input-group">
                           <span class="input-group-addon"><b>ตั้งแต่</b></span>
                           <input form="efm" type="text" id="name" name="uni[{{$key}}][startdate]" value="{{(is_null(old('uni')))?$valueold->startdate:$valueold['startdate']}}" placeholder="Start Date" class="date-picker form-control text-center" data-date-format="yyyy-mm-dd" readonly/>
                           <span class="input-group-addon"><b>ถึง</b></span>
                           <input form="efm" type="text" id="surname" name="uni[{{$key}}][enddate]" value="{{(is_null(old('uni')))?$valueold->enddate:$valueold['enddate']}}" placeholder="End Date" class="date-picker form-control text-center" data-date-format="yyyy-mm-dd" readonly/>
                         </div>
                       </div>
                     </div>

                     <div class="form-group">
                       <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">วุฒิที่ได้รับ Certificate/Diploma/Degree</div>

                       <div class="col-sm-9">
                         <div class="clearfix">
                            <input form="efm" type="text" id="weight" name="uni[{{$key}}][cdd]" value="{{(is_null(old('uni')))?$valueold->ccd:$valueold['cdd']}}"  placeholder="Certificate/Diploma/Degree" class="form-control" data-inputmask-regex="[a-zA-Z0-9ก-๙\s]*"/>
                         </div>
                       </div>
                     </div>

                     <div class="form-group">
                       <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> วิชาเอก / สาขาวิชา Major Subject </div>

                       <div class="col-sm-9">
                         <input  form="efm" type="text" id="form-field-1" placeholder="Major Subject" name="uni[{{$key}}][ms]" value="{{(is_null(old('uni')))?$valueold->ms:$valueold['ms']}}" class="form-control" data-inputmask-regex="[a-zA-Z0-9ก-๙\s]*"/>
                       </div>
                     </div>


                     <div class="form-group">
                       <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">เกรดเฉลี่ย Grade Point Average</div>
                       <div class="col-sm-9">
                         <div class="clearfix">
                            <input form="efm" type="text" id="weight" name="uni[{{$key}}][gpa]" value="{{(is_null(old('uni')))?$valueold->gpa:$valueold['gpa']}}" placeholder="Grade Point Average" data-inputmask="'alias':'decimal','min':1,'max':4" class="col-xs-10 col-sm-4" />
                         </div>
                       </div>
                     </div>
                   <hr />
                   </div>
                   <DIV id="uni">
                 @else
                   <div id="post_uni" data-index='{{$key}}' class="uni-item float-clear post_uni" style="clear:both;">

                     <div class="form-group">
                       <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">การศึกษา / Education</div>
                       <div class="col-sm-9">
                         <div class="clearfix">
                       <select class="form-control" form="efm" name="uni[{{$key}}][typeuni]">
                         @forelse ($master_edu as $value)
                           <option value="{{$value->id}}" {{(is_null(old('uni')))?($valueold->edu_id==$value->id)?'selected':null:($valueold['typeuni']==$value->id)?'selected':null}}>{{$value->name}}</option>
                         @empty
                           <option disabled>No Education Masterdata</option>
                         @endforelse
                       </select>
                       </div>
                       </div>
                     </div>

                     <div class="form-group">
                       <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">

                          ชื่อสถานการศึกษา / Institute Name</div>

                       <div class="col-sm-9">
                         <div class="clearfix">
                            <input form="efm" type="text" class="col-xs-12" name="uni[{{$key}}][name]" value="{{(is_null(old('uni')))?$valueold->name:$valueold['name']}}" placeholder="Institute Name" data-inputmask-regex="[a-zA-Z0-9ก-๙\.\s]*"/>
                         </div>
                       </div>
                     </div>

                     <div class="form-group">
                       <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ที่ตั้ง / Location
                       </div>

                       <div class="col-sm-9" >
                         <textarea form="efm" id="form-field-11" class="autosize-transition form-control" name="uni[{{$key}}][locat]" placeholder="Location">{{(is_null(old('uni')))?$valueold->locat:$valueold['locat']}}</textarea>
                       </div>
                     </div>

                     <div class="form-group">
                       <div class="col-sm-3 control-div no-padding-right" for="form-field-1">ระยะเวลา Period</div>

                       <div class="col-sm-9">
                         <div class="input-group">
                           <span class="input-group-addon"><b>ตั้งแต่</b></span>
                           <input form="efm" type="text" id="name" name="uni[{{$key}}][startdate]" value="{{(is_null(old('uni')))?$valueold->startdate:$valueold['startdate']}}" placeholder="Start Date" class="date-picker form-control text-center" data-date-format="yyyy-mm-dd" readonly/>
                           <span class="input-group-addon"><b>ถึง</b></span>
                           <input form="efm" type="text" id="surname" name="uni[{{$key}}][enddate]" value="{{(is_null(old('uni')))?$valueold->enddate:$valueold['enddate']}}" placeholder="End Date" class="date-picker form-control text-center" data-date-format="yyyy-mm-dd" readonly/>
                         </div>
                       </div>
                     </div>

                     <div class="form-group">
                       <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">วุฒิที่ได้รับ Certificate/Diploma/Degree</div>

                       <div class="col-sm-9">
                         <div class="clearfix">
                            <input form="efm" type="text" id="weight" name="uni[{{$key}}][cdd]" value="{{(is_null(old('uni')))?$valueold->ccd:$valueold['cdd']}}"  placeholder="Certificate/Diploma/Degree" class="form-control" data-inputmask-regex="[a-zA-Z0-9ก-๙\s]*"/>
                         </div>
                       </div>
                     </div>

                     <div class="form-group">
                       <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> วิชาเอก / สาขาวิชา Major Subject </div>

                       <div class="col-sm-9">
                         <input  form="efm" type="text" id="form-field-1" placeholder="Major Subject" name="uni[{{$key}}][ms]" value="{{(is_null(old('uni')))?$valueold->ms:$valueold['ms']}}" class="form-control" data-inputmask-regex="[a-zA-Z0-9ก-๙\s]*"/>
                       </div>
                     </div>


                     <div class="form-group">
                       <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">เกรดเฉลี่ย Grade Point Average</div>
                       <div class="col-sm-9">
                         <div class="clearfix">
                            <input form="efm" type="text" id="weight" name="uni[{{$key}}][gpa]" value="{{(is_null(old('uni')))?$valueold->gpa:$valueold['gpa']}}" placeholder="Grade Point Average" data-inputmask="'alias':'decimal','min':1,'max':4" class="col-xs-10 col-sm-4" />
                         </div>
                       </div>
                     </div>
                   <hr />
                   </div>
                 @endif
               @empty
               <div id="post_uni" data-index='0' class="uni-item float-clear post_uni" style="clear:both;">

                 <div class="form-group">
                   <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">การศึกษา / Education</div>
                   <div class="col-sm-9">
                     <div class="clearfix">
                   <select class="form-control" form="efm" name="uni[0][typeuni]">
                     @forelse ($master_edu as $value)
                       <option value="{{$value->id}}">{{$value->name}}</option>
                     @empty
                       <option disabled>No Education Masterdata</option>
                     @endforelse
                   </select>
                   </div>
                   </div>
                 </div>

                 <div class="form-group">
                   <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">

                      ชื่อสถานการศึกษา / Institute Name</div>

                   <div class="col-sm-9">
                     <div class="clearfix">
                        <input form="efm" type="text" class="col-xs-12" name="uni[0][name]" placeholder="Institute Name" data-inputmask-regex="[a-zA-Z0-9ก-๙\.\s]*"/>
                     </div>
                   </div>
                 </div>

                 <div class="form-group">
                   <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ที่ตั้ง / Location
                   </div>

                   <div class="col-sm-9" >
                     <textarea form="efm" id="form-field-11" class="autosize-transition form-control" name="uni[0][locat]" placeholder="Location"></textarea>
                   </div>
                 </div>

                 <div class="form-group">
                   <div class="col-sm-3 control-div no-padding-right" for="form-field-1">ระยะเวลา Period</div>

                   <div class="col-sm-9">
                     <div class="input-group">
                       <span class="input-group-addon"><b>ตั้งแต่</b></span>
                       <input form="efm" type="text" id="name" name="uni[0][startdate]" value="" placeholder="Start Date" class="date-picker form-control text-center" data-date-format="yyyy-mm-dd" readonly/>
                       <span class="input-group-addon"><b>ถึง</b></span>
                       <input form="efm" type="text" id="surname" name="uni[0][enddate]" value="" placeholder="End Date" class="date-picker form-control text-center" data-date-format="yyyy-mm-dd" readonly/>
                     </div>
                   </div>
                 </div>

                 <div class="form-group">
                   <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">วุฒิที่ได้รับ Certificate/Diploma/Degree</div>

                   <div class="col-sm-9">
                     <div class="clearfix">
                        <input form="efm" type="text" id="weight" name="uni[0][cdd]" placeholder="Certificate/Diploma/Degree" class="form-control" data-inputmask-regex="[a-zA-Z0-9ก-๙\s]*"/>
                     </div>
                   </div>
                 </div>

                 <div class="form-group">
                   <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> วิชาเอก / สาขาวิชา Major Subject </div>

                   <div class="col-sm-9">
                     <input  form="efm" type="text" id="form-field-1" placeholder="Major Subject" name="uni[0][ms]" class="form-control" data-inputmask-regex="[a-zA-Z0-9ก-๙\s]*"/>
                   </div>
                 </div>


                 <div class="form-group">
                   <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">เกรดเฉลี่ย Grade Point Average</div>
                   <div class="col-sm-9">
                     <div class="clearfix">
                        <input form="efm" type="text" id="weight" name="uni[0][gpa]" placeholder="Grade Point Average" data-inputmask="'alias':'decimal','min':1,'max':4" class="col-xs-10 col-sm-4" />
                     </div>
                   </div>
                 </div>
               <hr />
               </div>

                         <DIV id="uni">
              @endforelse
                         </DIV>
                         <DIV class="btn-action float-clear">
                         <input  type="button" name="add_item_uni" value="+ Add More" class="btn btn-success btn-xs addmore" data-con="#uni" data-cont="#post_uni"/ >
                         <input  type="button" name="del_item_uni" value="- Delete"  class="btn btn-danger btn-xs delete" data-cont="#uni .post_uni:last"/>
                         </DIV>
              </div>
           </div>
         </div>
       </div>
     </div>
   </div>



<div class="row">
<div class="col-xs-12">
  <div class="widget-box">
    <div class="widget-header widget-header-flat">
      <h5 class="smaller">
          การฝึกอบรม TRAINING
      </h5>
    </div>

    <div class="widget-body" style="padding:0px 50px 0px 50px;" >
      <div class="widget-main">
        <div class="form-group">
          @forelse ((count(old('trn'))>0)?old('trn'):$data->getTrn as $key => $value)
            @if ($key==0)
              <div id="post_trainning" data-index='{{$key}}'  class="trainning-item float-clear" style="clear:both;">

                  <div class="form-group">
                    <div class="col-sm-3 control-div no-padding-right" for="form-field-1">

                      ชื่อหัวข้อ / Subject</div>

                    <div class="col-sm-9">
                      <div class="clearfix">
                         <input form="efm" class="col-xs-12" form="efm" type="text" placeholder="Subject" name="trn[{{$key}}][name]" value="{{(is_null(old('trn')))?$value->name:$value['name']}}" data-inputmask-regex="[a-zA-Z0-9ก-๙\s]*"/>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> สถาบันฝึกอบรม / Institute </div>

                    <div class="col-sm-9">
                      <div class="clearfix">
                         <input form="efm" class="col-xs-12" type="text" form="efm" placeholder="Institute" name="trn[{{$key}}][ins]" value="{{(is_null(old('trn')))?$value->ins:$value['ins']}}" data-inputmask-regex="[a-zA-Z0-9ก-๙\s]*"/>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">วุฒิบัตรที่ได้รับ / Certificate Received</div>

                    <div class="col-sm-9">
                      <input form="efm" class="col-xs-12" type="text" form="efm" placeholder="Certificate Received" name="trn[{{$key}}][cr]" value="{{(is_null(old('trn')))?$value->cr:$value['cr']}}" data-inputmask-regex="[a-zA-Z0-9ก-๙\s]*"/>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ระยะเวลา / Duration</div>

                    <div class="col-sm-9" >
                      <div class="input-group">
                        <input form="efm" type="text" class="form-control" form="efm" placeholder="Duration" data-inputmask-regex="[a-zA-Z0-9ก-๙\s\-]*" name="trn[{{$key}}][dr]" value="{{(is_null(old('trn')))?$value->dr:$value['dr']}}">
                      </div>
                    </div>
                  </div>
              <hr />
              </div>
                        <DIV id="trainning">
            @else
              <div id="post_trainning" data-index='{{$key}}'  class="trainning-item float-clear" style="clear:both;">

                  <div class="form-group">
                    <div class="col-sm-3 control-div no-padding-right" for="form-field-1">

                      ชื่อหัวข้อ / Subject</div>

                    <div class="col-sm-9">
                      <div class="clearfix">
                         <input form="efm" class="col-xs-12" form="efm" type="text" placeholder="Subject" name="trn[{{$key}}][name]" value="{{(is_null(old('trn')))?$value->name:$value['name']}}" data-inputmask-regex="[a-zA-Z0-9ก-๙\s]*"/>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> สถาบันฝึกอบรม / Institute </div>

                    <div class="col-sm-9">
                      <div class="clearfix">
                         <input form="efm" class="col-xs-12" type="text" form="efm" placeholder="Institute" name="trn[{{$key}}][ins]" value="{{(is_null(old('trn')))?$value->ins:$value['ins']}}" data-inputmask-regex="[a-zA-Z0-9ก-๙\s]*"/>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">วุฒิบัตรที่ได้รับ / Certificate Received</div>

                    <div class="col-sm-9">
                      <input form="efm" class="col-xs-12" type="text" form="efm" placeholder="Certificate Received" name="trn[{{$key}}][cr]" value="{{(is_null(old('trn')))?$value->cr:$value['cr']}}" data-inputmask-regex="[a-zA-Z0-9ก-๙\s]*"/>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ระยะเวลา / Duration</div>

                    <div class="col-sm-9" >
                      <div class="input-group">
                        <input form="efm" type="text" class="form-control" form="efm" placeholder="Duration" data-inputmask-regex="[a-zA-Z0-9ก-๙\s\-]*" name="trn[{{$key}}][dr]" value="{{(is_null(old('trn')))?$value->dr:$value['dr']}}">
                      </div>
                    </div>
                  </div>
              <hr />
              </div>
            @endif
          @empty
          <div id="post_trainning" data-index='0'  class="trainning-item float-clear" style="clear:both;">

              <div class="form-group">
                <div class="col-sm-3 control-div no-padding-right" for="form-field-1">

                  ชื่อหัวข้อ / Subject</div>

                <div class="col-sm-9">
                  <div class="clearfix">
                     <input form="efm" class="col-xs-12" form="efm" type="text" placeholder="Subject" name="trn[0][name]" data-inputmask-regex="[a-zA-Z0-9ก-๙\s]*"/>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> สถาบันฝึกอบรม / Institute </div>

                <div class="col-sm-9">
                  <div class="clearfix">
                     <input form="efm" class="col-xs-12" type="text" form="efm" placeholder="Institute" name="trn[0][ins]" data-inputmask-regex="[a-zA-Z0-9ก-๙\s]*"/>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">วุฒิบัตรที่ได้รับ / Certificate Received</div>

                <div class="col-sm-9">
                  <input form="efm" class="col-xs-12" type="text" form="efm" placeholder="Certificate Received" name="trn[0][cr]" data-inputmask-regex="[a-zA-Z0-9ก-๙\s]*"/>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ระยะเวลา / Duration</div>

                <div class="col-sm-9" >
                  <div class="input-group">
                    <input form="efm" type="text" class="form-control" form="efm" placeholder="Duration" data-inputmask-regex="[a-zA-Z0-9ก-๙\s\-]*" name="trn[0][dr]">
                  </div>
                </div>
              </div>
          <hr />
          </div>
                    <DIV id="trainning">
          @endforelse
                    </DIV>
                    <DIV class="btn-action float-clear">
                    <input type="button" name="add_item" value="+ Add More" data-con="#trainning" data-cont="#post_trainning" class="btn btn-success btn-xs addmore" />
                    <input type="button" name="del_item" value="- Delete" data-cont="#trainning .trainning-item:last" class="btn btn-danger btn-xs delete"/>
                    </DIV>
         </div>
      </div>
    </div>
  </div>
</div>
</div>

<hr />

<div  >
<h4 class="green">ภาษา / Language</h4>
</div>

<div class="form-group">
<div class="col-sm-12" align="left">
  <table class="table text-center">
    <thead>
      <tr>
        <th class="text-center"> ภาษา </th>
        <th class="text-center"> พูด Speak   </th>
        <th class="text-center"> อ่าน Read </th>
        <th class="text-center"> ฟัง Listen </th>
        <th class="text-center"> เขียน Write </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($form_lang as $value)
        @php
          $dl1=$data->getLang->where('lang_id',$value->id)->where('type','sp')->first()->score;
          $dl2=$data->getLang->where('lang_id',$value->id)->where('type','rd')->first()->score;
          $dl3=$data->getLang->where('lang_id',$value->id)->where('type','ls')->first()->score;
          $dl4=$data->getLang->where('lang_id',$value->id)->where('type','wr')->first()->score;
        @endphp
        <tr>
        <td>
          {{$value->name}}
        </td>
        <td>
          <select name="lang1[{{$value->id}}][sp]" form="efm">
           <option value="0" {{(is_null(old('lang1')))?($dl1==0)?'selected':null:(old("lang1.{$value->id}.sp")==0)?'selected':null}}>ไม่ได้ Poor</option>
           <option value="1" {{(is_null(old('lang1')))?($dl1==1)?'selected':null:(old("lang1.{$value->id}.sp")==1)?'selected':null}}>พอใช้  Fair</option>
           <option value="2" {{(is_null(old('lang1')))?($dl1==2)?'selected':null:(old("lang1.{$value->id}.sp")==2)?'selected':null}}>ดี  Good</option>
           <option value="3" {{(is_null(old('lang1')))?($dl1==3)?'selected':null:(old("lang1.{$value->id}.sp")==3)?'selected':null}}>ดีมาก Excellent</option>
          </select>
        </td>
        <td>
          <select name="lang1[{{$value->id}}][rd]" form="efm">
            <option value="0" {{(is_null(old('lang1')))?($dl2==0)?'selected':null:(old("lang1.{$value->id}.rd")==0)?'selected':null}}>ไม่ได้ Poor</option>
           <option value="1" {{(is_null(old('lang1')))?($dl2==1)?'selected':null:(old("lang1.{$value->id}.rd")==1)?'selected':null}}>พอใช้  Fair</option>
           <option value="2" {{(is_null(old('lang1')))?($dl2==2)?'selected':null:(old("lang1.{$value->id}.rd")==2)?'selected':null}}>ดี  Good</option>
           <option value="3" {{(is_null(old('lang1')))?($dl2==3)?'selected':null:(old("lang1.{$value->id}.rd")==3)?'selected':null}}>ดีมาก Excellent</option>
          </select>
        </td>
        <td>
          <select  name="lang1[{{$value->id}}][ls]" form="efm">
            <option value="0" {{(is_null(old('lang1')))?($dl3==0)?'selected':null:(old("lang1.{$value->id}.ls")==0)?'selected':null}}>ไม่ได้ Poor</option>
           <option value="1" {{(is_null(old('lang1')))?($dl3==1)?'selected':null:(old("lang1.{$value->id}.ls")==1)?'selected':null}}>พอใช้  Fair</option>
           <option value="2" {{(is_null(old('lang1')))?($dl3==2)?'selected':null:(old("lang1.{$value->id}.ls")==2)?'selected':null}}>ดี  Good</option>
           <option value="3" {{(is_null(old('lang1')))?($dl3==3)?'selected':null:(old("lang1.{$value->id}.ls")==3)?'selected':null}}>ดีมาก Excellent</option>
          </select>
        </td>
        <td>
          <select name="lang1[{{$value->id}}][wr]" form="efm">
            <option value="0" {{(is_null(old('lang1')))?($dl4==0)?'selected':null:(old("lang1.{$value->id}.wr")==0)?'selected':null}}>ไม่ได้ Poor</option>
           <option value="1" {{(is_null(old('lang1')))?($dl4==1)?'selected':null:(old("lang1.{$value->id}.wr")==1)?'selected':null}}>พอใช้  Fair</option>
           <option value="2" {{(is_null(old('lang1')))?($dl4==2)?'selected':null:(old("lang1.{$value->id}.wr")==2)?'selected':null}}>ดี  Good</option>
           <option value="3" {{(is_null(old('lang1')))?($dl4==3)?'selected':null:(old("lang1.{$value->id}.wr")==3)?'selected':null}}>ดีมาก Excellent</option>
          </select>
        </td>
        </tr>
      @endforeach
    </tbody>
  </table>


</div>

</div>

<div class="form-group">
<div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ภาษาอื่น ๆ/<br />Others, If any</div>

<div class="col-sm-9" >
  <textarea form="efm" id="form-field-11" class="autosize-transition form-control" placeholder="Others" name="lang_etc">{{(is_null(old('lang_etc')))?$data->lang_etc:old('lang_etc')}}</textarea>
</div>
</div>

<div class="form-group">
<div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ความสามารถด้านคอมพิวเตอร์/<br />Computer's Program</div>

<div class="col-sm-9" >
  <textarea form="efm" id="form-field-11" class="autosize-transition form-control" placeholder="Computer's Program" name="abi_com">{{(is_null(old('abi_com')))?$data->abi_com:old('abi_com')}}</textarea>
</div>
</div>

<div class="form-group">
<div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ความสามารถพิเศษอื่นๆ/<br />Any other abilities</div>

<div class="col-sm-9" >
  <textarea form="efm" id="form-field-11" class="autosize-transition form-control" placeholder="Any other abilities" name="abi_any">{{(is_null(old('abi_any')))?$data->abi_any:old('abi_any')}}</textarea>
</div>
</div>&nbsp;
<br />
</div>

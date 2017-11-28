<div class="form-horizontal "  style="padding:0px 50px  0px 50px;" >

  <div  >
    <h4 class="green">ตำแหน่งหรือประเภทของงานที่สมัคร / Position or Type of  Work  Applied</h4>
  </div>
  <br />
  <div class="form-group">
    <div class="col-sm-3 control-div no-padding-right"> ตำแหน่งที่ 1 </div>
    <div class="col-sm-9">
      <select form="efm" class="form-control" name="posit[]">
        @foreach ($form_posit->whereNotIn('id',49) as $value)
          <option value="{{$value->id}}" {{(old('posit.1')==$value->id)?'selected':null}}>{{$value->name}}</option>
        @endforeach
        <option value="49">N/A</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-div no-padding-right">  ตำแหน่งที่ 2 </div>
    <div class="col-sm-9">
      <select form="efm" class="form-control" name="posit[]">
        @foreach ($form_posit->whereNotIn('id',49) as $value)
          <option value="{{$value->id}}" {{(old('posit.2')==$value->id)?'selected':null}}>{{$value->name}}</option>
        @endforeach
        <option value="49">N/A</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-div no-padding-right">  ตำแหน่งที่ 3</div>
    <div class="col-sm-9">
      <select form="efm" class="form-control" name="posit[]">
        @foreach ($form_posit->whereNotIn('id',49) as $value)
          <option value="{{$value->id}}" {{(old('posit.3')==$value->id)?'selected':null}}>{{$value->name}}</option>
        @endforeach
        <option value="49">N/A</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-div no-padding-right" for="form-field-tags">ตำแหน่งที่สนใจเพิ่มเติม</div>

    <div class="col-sm-9">
      <textarea name="etc_posit" rows="5" class="form-control" form="efm" placeholder="ตำแหน่งที่สนใจเพิ่มเติม">{{old('etc_posit')}}</textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> Resume (Attachment)</div>
    <div class="col-sm-9">
      <input type="file" form="efm" name="attachment_f1" id="attachment" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> Related Document (Attachment)</div>
    <div class="col-sm-9">
      <input type="file" form="efm" name="attachment_f2" id="attachment" class="form-control">
    </div>
  </div>



<hr />

  <div  >
    <h4 class="green">รายละเอียดส่วนตัวของผู้สมัคร / PERSONAL DETAILS</h4>
  </div>
  <br />

  <div class="form-group">
    <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> Picture Profile </div>
    <div class="col-sm-9">
      <input type="file" form="efm" name="attachment_pic" id="attachment" >
    </div>
  </div>

    <div class="form-group">
      <div class="col-sm-3 control-div no-padding-right" for="form-field-1"> คำนำหน้า / Title name</div>

      <div class="col-sm-9" align="left">
        <div class="inline">
            <input form="efm" name="titlename" type="radio" id="titlename1" class="ace" value="0" required {{(old('titlename')==0)?'checked':null}}/>
                <label class="lbl middle" for="titlename1"> นาย Mr.</span>
        </div>

        &nbsp; &nbsp; &nbsp;
        <div class="inline">
            <input form="efm" name="titlename" type="radio" id="titlename2" class="ace" value="1" required {{(old('titlename')==1)?'checked':null}}/>
                <label class="lbl middle" for="titlename2"> นาง Mrs.</label>
        </div>

        &nbsp; &nbsp; &nbsp;
        <div class="inline">
            <input form="efm" name="titlename" type="radio" id="titlename3" class="ace" value="2" required {{(old('titlename')==2)?'checked':null}}/>
                <label class="lbl middle" for="titlename3"> นางสาว Miss.</label>
        </div>
      </div>

    </div>

    <div class="form-group">
      <div class="col-sm-3 control-div no-padding-right" for="form-field-1"> ชื่อ นามสกุล (ไทย) </div>

      <div class="col-sm-9">
        <div class="clearfix">
        <input form="efm" type="text" id="name" name="name" placeholder="ชื่อ" value="{{(isset(Auth::user()->name))?stristr(Auth::user()->name,' ',1):old('name')}}" class="col-xs-12 col-sm-6" data-inputmask-regex='[ก-๙]*' required/>
        <input form="efm" type="text" id="surname" name="surname" value="{{(isset(Auth::user()->name))?stristr(Auth::user()->name,' '):old('surname')}}" placeholder="นามสกุล" class="col-xs-12 col-sm-6" data-inputmask-regex='[ก-๙]*' required/>
      </div>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> Name (English) </div>

      <div class="col-sm-9">
        <div class="clearfix">
        <input form="efm" type="text" id="nameeng" value="{{(isset(Auth::user()->name))?stristr(Auth::user()->name,' ',1):old('nameeng')}}" name="nameeng" placeholder="Name"  class="col-xs-12 col-sm-6" data-inputmask-regex='[A-Za-z]*' required/>

        <input form="efm" type="text" id="surnameeng" value="{{(isset(Auth::user()->name))?stristr(Auth::user()->name,' '):old('surnameeng')}}" name="surnameeng" placeholder="Surname" class="col-xs-12 col-sm-6" data-inputmask-regex='[A-Za-z]*' required/>
      </div>
    </div>
    </div>



    <div class="form-group">
      <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> น้ำหนัก / Weight </div>

      <div class="col-sm-9">
        <div class="row">
          <div class="col-xs-12 col-md-5">
            <input form="efm" type="text" class="form-control" value="{{old('weight')}}" id="weight" name="weight" placeholder="Weight" data-inputmask="'alias':'integer','min':20"/>
          </div>
          <div class="col-xs-12 col-md-2 text-right">
            ส่วนสูง / Height
          </div>
          <div class="col-xs-12 col-md-5">
            <input form="efm" type="text" class="form-control" id="height" value="{{old('height')}}" name="height" min="100" placeholder="Height" data-inputmask="'alias':'integer','min':100"/>
          </div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ที่อยู่ตามทะเบียนบ้าน<br />Registered Address</div>

      <div class="col-sm-9" >
        <textarea form="efm" id="form-field-11" class="autosize-transition col-xs-10 col-sm-8 form-control" placeholder="Registered Address" name="address_mas" required>{{old('address_mas')}}</textarea>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ที่อยู่ปัจจุบัน / Present Address</div>

      <div class="col-sm-9" >
        <textarea form="efm" id="form-field-11" class="autosize-transition col-xs-10 col-sm-8 form-control" placeholder="Present Address" rows="5" name="address" required>{{old('address')}}</textarea>
      </div>
    </div>
          <div class="form-group">
            <div class="col-xs-12 col-md-3 control-div no-padding-right" for="form-field-1-1">โทรศัพท์บ้าน / Residence Tel.</div>

            <div class="col-xs-12 col-md-3">
              <input form="efm" class="input-mask-phonehome form-control  col-xs-10 col-sm-4" value="{{old('telephone')}}" placeholder="Residence Tel" name="telephone" type="text" data-inputmask="'mask':'99-9999999'" id="form-field-mask-3" />
            </div>
            <div class="col-xs-12 col-md-2 text-right control-div no-padding-right" for="form-field-1-1">โทรศัพท์ มือถือ / Mobile Phone</div>
            <div class="col-xs-12 col-md-4">
              <input form="efm" class="input-mask-phone form-control col-xs-10 col-sm-4" value="{{old('mobile')}}" name="mobile" placeholder="Mobile Phone" data-inputmask="'mask':'999-9999999'" type="text" id="form-field-mask-3" required/>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">อีเมล์ / E-Mail</div>

            <div class="col-sm-9">
              <div class="clearfix">
                 <input form="efm" type="text" name="email" id="email" class="col-xs-12 col-sm-8 form-control" value="{{(isset(Auth::user()->email))?Auth::user()->email:old('email')}}" placeholder="E-Mail" data-inputmask="'alias':'email'" required/>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">เกิดที่จังหวัด / Place of birth</div>

            <div class="col-sm-9">
              <select form="efm" class="form-control" name="provb">
                @foreach ($form_provin as $value)
                  <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">เกิดวันที่ / Date of birth</div>

            <div class="col-sm-9">
              <div class="input-medium">
                      <div class="input-group">
                              <input form="efm" readonly class="input-medium date-picker" name="birthdate" value="{{old('birthdate')}}" id="form-field-date" type="text" data-date-format="yyyy-mm-dd" placeholder="Date of birth" required/>
                              <span class="input-group-addon">
                                      <i class="ace-icon fa fa-calendar"></i>
                              </span>
                      </div>
              </div>
            </div>
          </div>
                <div class="form-group">
                  <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">สัญชาติ / Nationality</div>

                  <div class="col-sm-9">
                    <select form="efm" class="form-control" name="natc" required>
                      @foreach ($form_nation as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">เชื้อชาติ /Race</div>

                  <div class="col-sm-9">
                    <select form="efm" class="form-control" name="race">
                      @foreach ($form_race as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">ศาสนา / Religion</div>

                  <div class="col-sm-9">
                    <select form="efm" class="form-control" name="reli" required>
                      @foreach ($form_relig as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-xs-12 col-md-3 control-div no-padding-right" for="form-field-1-1">บัตรประจำตัวประชาชนเลขที่ / ID Card No.</div>

                  <div class="col-xs-12 col-md-3">
                    <input form="efm" class="col-xs-12  input-mask-product" value="{{(isset(Auth::user()->username))?Auth::user()->username:old('code_card')}}" type="text" name="code_card" placeholder="ID Card No" value="{{old('code_card')}}" data-inputmask="'mask':'9-9999-99999-99-9'" readonly required/>
                  </div>

                  <div class="col-xs-12 col-md-2 text-right control-div no-padding-right" for="form-field-1-1">ออกให้  ณ /Issued at</div>

                  <div class="col-xs-12 col-md-4">
                    <input form="efm" class="col-xs-12" type="text" value="{{old('issued_at')}}" name="issued_at" placeholder="Issued at" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">วันที่ออกบัตร / Issued Date</div>

                  <div class="col-sm-9" >
                    <div class="input-medium">
                            <div class="input-group">
                                    <input form="efm" readonly class="input-medium date-picker" value="{{old('issuedate')}}" name="issuedate" id="form-field-date" type="text" data-date-format="yyyy-mm-dd" placeholder="Issued Date" required/>
                                    <span class="input-group-addon">
                                            <i class="ace-icon fa fa-calendar"></i>
                                    </span>
                            </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-3 control-div no-padding-right" for="form-field-1"> สถานะภาพการสมรส / Marital Starus </div>
                  <div class="col-sm-9" align="left">
                    @foreach ($form_mstatus as $value)
                      <div class="inline">
                          <label><input form="efm" name="status" type="radio" class="ace" value="{{$value->id}}" {{(old('status')==$value->id)?'checked':null}} required/>
                              <span class="lbl middle"> {{$value->name}}</span></label>
                      </div>
                      &nbsp; &nbsp; &nbsp;
                    @endforeach
                  </div>

                </div>
<hr />
                <div >
                  <h4 class="green">รายละเอียดทางครอบครัว / Family Details</h4>
                </div>
                <br />

                <div class="form-group">
                  <div class="col-sm-3 control-div no-padding-right" for="form-field-1">ภรรยา|สามี / Wife|Husband</div>

                  <div class="col-sm-9">
                    <div class="clearfix">
                    <input form="efm" value="{{old('fam_name')}}" type="text" id="name" name="fam_name" placeholder="ชื่อ/Name" class="col-xs-12 col-md-6" data-inputmask-regex="[A-Za-zก-๙]*"/>
                    <input form="efm" value="{{old('fam_surname')}}" type="text" id="surname" name="fam_surname" placeholder="นามสกุล/Surname" class="col-xs-12 col-md-6" data-inputmask-regex="[A-Za-zก-๙]*"/>
                  </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-xs-12 col-md-3 control-div no-padding-right" for="form-field-1-1"> อายุ / Age </div>
                  <div class="col-xs-12 col-md-2">
                    <input form="efm" value="{{old('fam_age')}}" type="text" id="weight" name="fam_age" class="form-control" placeholder="Age" data-inputmask="'alias':'integer','min':20"/>
                  </div>
                    <div class="col-xs-12 col-md-3 text-right">
                      อาชีพ|ตำแหน่ง / Occupation|Position
                    </div>
                    <div class="col-xs-12 col-md-4">
                      <input form="efm" type="text" class="form-control" value="{{old('fam_posit')}}" name="fam_posit" placeholder="Occupation|Position" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
                    </div>
                </div>

                <div class="row">
                  <div class="col-xs-12">
                    <div class="widget-box">
                      <div class="widget-header widget-header-flat">
                        <h5 class="smaller">
                          บุตร / Childens
                        </h5>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main" style="padding:20px 50px  0px 50px;">
                            <div class="form-group">
                              @forelse ((count(old('child'))>0)?old('child'):[] as $key => $value)
                                @if ($key==0)
                                <div id="childensp" data-index='{{$key}}' class="product-item float-clear post_child" style="clear:both;">
                                    <div class="form-group">
                                      <div class="col-sm-3 control-div no-padding-right" for="form-field-1">ชื่อ นามสกุล</div>
                                      <div class="col-sm-9">
                                        <div class="clearfix">
                                        <input form="efm" type="text" id="name" name="child[{{$key}}][name]" value="{{$value['name']}}" placeholder="ชื่อ/Name"  class="col-xs-12 col-md-6" data-inputmask-regex="[A-Za-zก-๙]*"/>
                                        <input form="efm" type="text" id="surname" name="child[{{$key}}][surname]" value="{{$value['surname']}}" placeholder="นามสกุล/Surname"   class="col-xs-12 col-md-6" data-inputmask-regex="[A-Za-zก-๙]*"/>
                                      </div>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <div class="col-xs-3 control-div no-padding-right" for="form-field-1-1"> อายุ / Age </div>
                                      <div class="col-xs-2">
                                        <input form="efm" type="text" id="weight" name="child[{{$key}}][age]" value="{{$value['age']}}" placeholder="Age" class="form-control" data-inputmask="'alias':'integer','min':20"/>
                                      </div>
                                      <div class="col-xs-3 text-right">อาชีพ|ตำแหน่ง / Occupation|Position</div>
                                      <div class="col-xs-4">
                                        <input form="efm" type="text" class="form-control" name="child[{{$key}}][op]" value="{{$value['op']}}" placeholder="Occupation|Position" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
                                      </div>
                                    </div>
                                    <hr />
                                </div>
                                <div id="childens">
                              @else
                                  <div id="childensp" data-index='{{$key}}' class="product-item float-clear post_child" style="clear:both;">
                                      <div class="form-group">
                                        <div class="col-sm-3 control-div no-padding-right" for="form-field-1">ชื่อ นามสกุล</div>
                                        <div class="col-sm-9">
                                          <div class="clearfix">
                                          <input form="efm" type="text" id="name" name="child[{{$key}}][name]" value="{{$value['name']}}" placeholder="ชื่อ/Name"  class="col-xs-12 col-md-6" data-inputmask-regex="[A-Za-zก-๙]*"/>
                                          <input form="efm" type="text" id="surname" name="child[{{$key}}][surname]" value="{{$value['surname']}}" placeholder="นามสกุล/Surname"   class="col-xs-12 col-md-6" data-inputmask-regex="[A-Za-zก-๙]*"/>
                                        </div>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <div class="col-xs-3 control-div no-padding-right" for="form-field-1-1"> อายุ / Age </div>
                                        <div class="col-xs-2">
                                          <input form="efm" type="text" id="weight" name="child[{{$key}}][age]" value="{{$value['age']}}" placeholder="Age" class="form-control" data-inputmask="'alias':'integer','min':20"/>
                                        </div>
                                        <div class="col-xs-3 text-right">อาชีพ|ตำแหน่ง / Occupation|Position</div>
                                        <div class="col-xs-4">
                                          <input form="efm" type="text" class="form-control" name="child[{{$key}}][op]" value="{{$value['op']}}" placeholder="Occupation|Position" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
                                        </div>
                                      </div>
                                      <hr />
                                  </div>
                              @endif
                              @empty
                                          <div id="childensp" data-index='0' class="product-item float-clear post_child" style="clear:both;">
                                              <div class="form-group">
                                                <div class="col-sm-3 control-div no-padding-right" for="form-field-1">ชื่อ นามสกุล</div>
                                                <div class="col-sm-9">
                                                  <div class="clearfix">
                                                  <input form="efm" type="text" id="name" name="child[0][name]" placeholder="ชื่อ/Name"  class="col-xs-12 col-md-6" data-inputmask-regex="[A-Za-zก-๙]*"/>
                                                  <input form="efm" type="text" id="surname" name="child[0][surname]" placeholder="นามสกุล/Surname"   class="col-xs-12 col-md-6" data-inputmask-regex="[A-Za-zก-๙]*"/>
                                                </div>
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <div class="col-xs-3 control-div no-padding-right" for="form-field-1-1"> อายุ / Age </div>
                                                <div class="col-xs-2">
                                                  <input form="efm" type="text" id="weight" name="child[0][age]" placeholder="Age" class="form-control" data-inputmask="'alias':'integer','min':20"/>
                                                </div>
                                                <div class="col-xs-3 text-right">อาชีพ|ตำแหน่ง / Occupation|Position</div>
                                                <div class="col-xs-4">
                                                  <input form="efm" type="text" class="form-control" name="child[0][op]" placeholder="Occupation|Position" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
                                                </div>
                                              </div>
                                              <hr />
                                          </div>
                                          <div id="childens">
                                @endforelse
                                </div>
                                        <DIV class="btn-action float-clear">
                                        <input type="button" name="add_item" value="+ Add More" class="btn btn-success btn-xs addmore" data-con="#childens" data-cont="#childensp"/ >
                                        <input type="button" name="del_item" value="- Delete"  class="btn btn-danger btn-xs delete" data-cont="#childens .post_child:last"/>
                                        </DIV>
                             </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

<div class="space-6"></div>

        <div class="form-group">
          <div class="col-sm-3 control-div no-padding-right" for="form-field-1">บิดา Father</div>

          <div class="col-sm-9">
            <div class="clearfix">
            <input form="efm" type="text" id="name" value="{{old('f_name')}}" name="f_name" placeholder="ชื่อ"  class="col-xs-12 col-md-6" data-inputmask-regex="[A-Za-zก-๙]*"/>
            <input form="efm" type="text" id="surname" value="{{old('f_surname')}}" name="f_surname" placeholder="นามสกุล"   class="col-xs-12 col-md-6" data-inputmask-regex="[A-Za-zก-๙]*"/>
          </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-xs-3 control-div no-padding-right" for="form-field-1-1"> อายุ / Age</div>
          <div class="col-xs-2">
            <input form="efm" type="text" id="weight" value="{{old('f_age')}}" name="f_age" placeholder="Age" class="form-control" data-inputmask="'alias':'integer','min':20"/>
          </div>
          <div class="col-xs-3">
            อาชีพ|ตำแหน่ง / Occupation|Position
          </div>
          <div class="col-xs-4">
            <input form="efm" type="text" value="{{old('f_posit')}}" class="form-control" placeholder="Occupation|Position" name="f_posit" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ที่อยู่ | ที่ทำงาน / Address | Office</div>

          <div class="col-sm-9" >
            <textarea form="efm" id="form-field-11" name="f_address" class="autosize-transition form-control" rows="5" placeholder="Address | Office">{{old('f_address')}}</textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">โทรศัพท์ / Tel. No.</div>

          <div class="col-sm-9">
            <input form="efm" class="input-mask-phone  col-xs-10 col-sm-4" name="f_phone" value="{{old('f_phone')}}" placeholder="Tel. No." type="text" id="form-field-mask-3" data-inputmask-regex='[0-9\-]*'/>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">มารดา  Mother</div>

          <div class="col-sm-9">
            <div class="clearfix">
            <input form="efm" type="text" id="name" value="{{old('m_name')}}" name="m_name" placeholder="ชื่อ"  class="col-xs-12 col-md-6" data-inputmask-regex="[A-Za-zก-๙]*"/>
            <input form="efm" type="text" id="surname" value="{{old('m_surname')}}" name="m_surname" placeholder="นามสกุล" class="col-xs-12 col-md-6" data-inputmask-regex="[A-Za-zก-๙]*"/>
          </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12 col-md-3 control-div no-padding-right" for="form-field-1-1"> อายุ / Age </div>
          <div class="col-xs-12 col-md-2">
            <input form="efm" type="text" id="weight" value="{{old('m_age')}}" name="m_age" placeholder="Age" class="form-control" data-inputmask="'alias':'integer','min':20"/>
          </div>
          <div class="col-xs-12 col-md-3">
            อาชีพ|ตำแหน่ง / Occupation|Position
          </div>
          <div class="col-xs-12 col-md-4">
            <input form="efm" type="text" value="{{old('m_posit')}}" class="form-control" placeholder="Occupation|Position" name="m_posit" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
          </div>
        </div>

        <div class="form-group">
         <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ที่อยู่ | ที่ทำงาน / Address | Office</div>

         <div class="col-sm-9" >
           <textarea form="efm" id="form-field-11" name="m_address" placeholder="Address | Office" class="autosize-transition col-xs-10 col-sm-8 form-control">{{old('m_address')}}</textarea>
         </div>
        </div>

        <div class="form-group">
         <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">โทรศัพท์ / Tel. No.</div>

         <div class="col-sm-9">
           <input  form="efm" value="{{old('m_phone')}}" class="input-mask-phone  col-xs-10 col-sm-4" placeholder="Tel. No." name="m_phone" type="text" id="form-field-mask-3" data-inputmask-regex='[0-9\-]*'/>
         </div>
        </div>



        <div class="row">
          <div class="col-xs-12">
            <div class="widget-box">
              <div class="widget-header widget-header-flat">
                <h5 class="smaller">
                พี่น้อง Brother/Sister
              </h5>
              </div>

              <div class="widget-body"  style="padding:20px 50px  0px 50px;">
                <div class="widget-main">
                  <div class="form-group">
                    @forelse ((count(old('brasis'))>0)?old('brasis'):[] as $key => $value)
                      @if ($key==0)
                      <div id="post_BroSis" data-index='{{$key}}' class="BroSis-item float-clear" style="clear:both;" >

                          <div class="form-group">
                            <div class="col-sm-3 control-div no-padding-right" for="form-field-1">
                              ชื่อ - นามสกุล / First-Last Name</div>

                            <div class="col-sm-9">
                              <div class="clearfix">
                              <input form="efm" type="text" id="name" name="brasis[{{$key}}][name]" value="{{$value['name']}}" placeholder="ชื่อ/Firstname" class="col-xs-12 col-md-6" data-inputmask-regex="[A-Za-zก-๙]*"/>
                              <input form="efm" type="text" id="surname" name="brasis[{{$key}}][surname]" value="{{$value['surname']}}" placeholder="นามสกุล/Surname" class="col-xs-12 col-md-6" data-inputmask-regex="[A-Za-zก-๙]*"/>
                            </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-xs-12 col-md-3 control-div no-padding-right" for="form-field-1-1"> อายุ / Age </div>
                            <div class="col-xs-12 col-md-2">
                              <input form="efm" type="text" id="weight" name="brasis[{{$key}}][age]" value="{{$value['age']}}" placeholder="Age" class="form-control" data-inputmask="'alias':'integer','min':20"/>
                            </div>
                            <div class="col-xs-12 col-md-3">
                              อาชีพ|ตำแหน่ง / Occupation|Position
                            </div>
                            <div class="col-xs-12 col-md-4">
                              <input form="efm" type="text" name="brasis[{{$key}}][op]" class="form-control" value="{{$value['op']}}" placeholder="Occupation|Position" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ที่อยู่ | ที่ทำงาน / Address | Office</div>

                            <div class="col-sm-9" >
                              <textarea form="efm" id="form-field-11" name="brasis[{{$key}}][ao]" placeholder="Address | Office" class="col-xs-10 col-sm-8 form-control" rows="5">{{$value['ao']}}</textarea>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">โทรศัพท์ / Tel. No.</div>

                            <div class="col-sm-9">
                              <input form="efm" class="input-mask-phone col-xs-10 col-sm-4" placeholder="Tel. No." name="brasis[{{$key}}][tel]" value="{{$value['tel']}}" type="text" id="form-field-mask-3" data-inputmask-regex='[0-9\-]*'/>
                            </div>
                          </div>
                      <hr />
                      </div>
                      <DIV id="BroSis">
                    @else
                      <div id="post_BroSis" data-index='{{$key}}' class="BroSis-item float-clear" style="clear:both;" >

                          <div class="form-group">
                            <div class="col-sm-3 control-div no-padding-right" for="form-field-1">
                              ชื่อ - นามสกุล / First-Last Name</div>

                            <div class="col-sm-9">
                              <div class="clearfix">
                              <input form="efm" type="text" id="name" name="brasis[{{$key}}][name]" value="{{$value['name']}}" placeholder="ชื่อ/Firstname" class="col-xs-12 col-md-6" data-inputmask-regex="[A-Za-zก-๙]*"/>
                              <input form="efm" type="text" id="surname" name="brasis[{{$key}}][surname]" value="{{$value['surname']}}" placeholder="นามสกุล/Surname" class="col-xs-12 col-md-6" data-inputmask-regex="[A-Za-zก-๙]*"/>
                            </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-xs-12 col-md-3 control-div no-padding-right" for="form-field-1-1"> อายุ / Age </div>
                            <div class="col-xs-12 col-md-2">
                              <input form="efm" type="text" id="weight" name="brasis[{{$key}}][age]" value="{{$value['age']}}" placeholder="Age" class="form-control" data-inputmask="'alias':'integer','min':20"/>
                            </div>
                            <div class="col-xs-12 col-md-3">
                              อาชีพ|ตำแหน่ง / Occupation|Position
                            </div>
                            <div class="col-xs-12 col-md-4">
                              <input form="efm" type="text" name="brasis[{{$key}}][op]" class="form-control" value="{{$value['op']}}" placeholder="Occupation|Position" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ที่อยู่ | ที่ทำงาน / Address | Office</div>

                            <div class="col-sm-9" >
                              <textarea form="efm" id="form-field-11" name="brasis[{{$key}}][ao]" placeholder="Address | Office" class="col-xs-10 col-sm-8 form-control" rows="5">{{$value['ao']}}</textarea>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">โทรศัพท์ / Tel. No.</div>

                            <div class="col-sm-9">
                              <input form="efm" class="input-mask-phone col-xs-10 col-sm-4" placeholder="Tel. No." name="brasis[{{$key}}][tel]" value="{{$value['tel']}}" type="text" id="form-field-mask-3" data-inputmask-regex='[0-9\-]*'/>
                            </div>
                          </div>
                      <hr />
                      </div>
                    @endif
                    @empty
                      <div id="post_BroSis" data-index='0' class="BroSis-item float-clear" style="clear:both;" >

                          <div class="form-group">
                            <div class="col-sm-3 control-div no-padding-right" for="form-field-1">
                              ชื่อ - นามสกุล / First-Last Name</div>

                            <div class="col-sm-9">
                              <div class="clearfix">
                              <input form="efm" type="text" id="name" name="brasis[0][name]" placeholder="ชื่อ/Firstname" class="col-xs-12 col-md-6" data-inputmask-regex="[A-Za-zก-๙]*"/>
                              <input form="efm" type="text" id="surname" name="brasis[0][surname]" placeholder="นามสกุล/Surname" class="col-xs-12 col-md-6" data-inputmask-regex="[A-Za-zก-๙]*"/>
                            </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-xs-12 col-md-3 control-div no-padding-right" for="form-field-1-1"> อายุ / Age </div>
                            <div class="col-xs-12 col-md-2">
                              <input form="efm" type="text" id="weight" name="brasis[0][age]" placeholder="Age" class="form-control" data-inputmask="'alias':'integer','min':20"/>
                            </div>
                            <div class="col-xs-12 col-md-3">
                              อาชีพ|ตำแหน่ง / Occupation|Position
                            </div>
                            <div class="col-xs-12 col-md-4">
                              <input form="efm" type="text" name="brasis[0][op]" class="form-control" placeholder="Occupation|Position" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ที่อยู่ | ที่ทำงาน / Address | Office</div>

                            <div class="col-sm-9" >
                              <textarea form="efm" id="form-field-11" name="brasis[0][ao]" placeholder="Address | Office" class="col-xs-10 col-sm-8 form-control" rows="5"></textarea>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">โทรศัพท์ / Tel. No.</div>

                            <div class="col-sm-9">
                              <input form="efm" class="input-mask-phone col-xs-10 col-sm-4" placeholder="Tel. No." name="brasis[0][tel]" type="text" id="form-field-mask-3" data-inputmask-regex='[0-9\-]*'/>
                            </div>
                          </div>
                      <hr />
                      </div>
                      <DIV id="BroSis">
                    @endforelse
                                </DIV>
                              <DIV class="btn-action float-clear">
                                <input type="button" name="add_item" value="+ Add More" class="btn btn-success btn-xs addmore" data-con="#BroSis" data-cont="#post_BroSis"/ >
                                <input type="button" name="del_item" value="- Delete"  class="btn btn-danger btn-xs delete" data-cont="#BroSis .BroSis-item:last"/>
                              </DIV>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>

  </div>

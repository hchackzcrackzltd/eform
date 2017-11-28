<div class="form-horizontal "  style="padding:0px 50px  0px 50px;" >

  <div  >
    <h4 class="green">ข้อความเพิ่มเติม Additional  Information:   </h4>
  </div>

  <div class="space-6"></div>

    <div class="form-group">
      <div class="col-md-12">ท่านมีใบขับขี่หรือไม่ ?   <br />Do  you  hold  a  driving  licence ?</div>


        <div class="col-sm-3 control-div no-padding-right" for="form-field-1">รถยนต์ / Car</div>

        <div class="col-sm-9" align="left">
          <div class="inline">
              <input name="drivli" form="efm" id="car-yes" type="radio"  class="ace" value="1" {{(is_null(old('drivli')))?($data->drivli==1)?'checked':null:(old('drivli')==1)?'checked':null}}/>
                  <label class="lbl middle" for="car-yes"> มี Yes</label>
          </div>

          &nbsp; &nbsp; &nbsp;
          <div class="inline">
              <input name="drivli" form="efm" type="radio" id="car-no" class="ace" value="0" {{(is_null(old('drivli')))?($data->drivli==0)?'checked':null:(old('drivli')==0)?'checked':null}}/>
                  <label class="lbl middle" for="car-no"> ไม่มี No</label>
          </div>
        </div>



        <div class="col-sm-3 control-div no-padding-right" for="form-field-1">  มอเตอร์ไซด์ /  Motorcycle</div>

        <div class="col-sm-9" align="left">
          <div class="inline">
              <input name="moto" form="efm" id="motor-yes" type="radio" class="ace" value="1" {{(is_null(old('moto')))?($data->moto==1)?'checked':null:(old('moto')==1)?'checked':null}}/>
                  <label class="lbl middle" for="motor-yes"> มี Yes</label>
          </div>

          &nbsp; &nbsp; &nbsp;
          <div class="inline">
              <input name="moto" form="efm" id="motor-no" type="radio" class="ace" value="0" {{(is_null(old('moto')))?($data->moto==0)?'checked':null:(old('moto')==0)?'checked':null}}/>
                  <label class="lbl middle" for="motor-no"> ไม่มี No</label>
          </div>
        </div>

    </div>

  <div class="space-6"></div>
    <div class="form-group">
      <div class="col-md-12">
        ท่านมีรถยนต์/มอเตอร์ไซค์ส่วนตัวที่สามารถนำมาใช้ในธุรกิจของบริษัทหรือไม่ ?<br />
        Do  you  have  a  car / motorcycle  avialable  for  company  business ?
      </div>

  <div class="col-md-12">
        <div class="inline">
            <input name="caru" form="efm" id="car" type="checkbox" class="ace" value="1" {{(is_null(old('caru')))?($data->caru==1)?'checked':null:(old('caru')==1)?'checked':null}}/>
                <label class="lbl middle"  for="car"> รถยนต์ / Car</label>
        </div>
        &nbsp; &nbsp; &nbsp;
        <div class="inline">
            <input name="motou" form="efm" id="motor" type="checkbox" class="ace" value="1" {{(is_null(old('motou')))?($data->motou==1)?'checked':null:(old('motou')==1)?'checked':null}}/>
                <label class="lbl middle" for="motor"> มอเตอร์ไซด์ /  Motorcycle</label>
        </div>
    </div>
      </div>

    <div class="form-group">
      <div class="col-md-12">
         งานอดิเรก, กีฬาและกิจกรรมที่สนใจ<br />
         Present  hobbies , sports , interest
         <br />
         <textarea id="form-field-11" class="autosize-transition form-control" form="efm" name="freetm" placeholder="Present  hobbies , sports , interest">{{(is_null(old('freetm')))?$data->freetm:old('freetm')}}</textarea>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-12">
         ท่านเป็นสมาชิกของสมาคมหรือองค์การอาชีพอะไร  และมีตำแหน่งอะไร ?<br />
         What  associations  or  professional  organizations  are  you  a  member  of  and  what  position  do  you  hold ?
         <br />
         <textarea id="form-field-11" class="autosize-transition form-control" form="efm" name="frncm" placeholder="What associations or professional organizations are you a member of and what position do you hold ?">{{(is_null(old('frncm')))?$data->frncm:old('frncm')}}</textarea>
      </div>
    </div>

  <div class="form-group">
    <div class="col-md-12">
      ท่านเคยป่วยหนักและเป็นโรคติดต่อร้ายแรงมาก่อนหรือไม่ ?<br />
      Have  you  ever  been  seriously   ill  or  contacted  with  contagious  disease ?
<br />
      <div class="inline">
          <input   type="radio" form="efm" class="ace" value="0" name="contagious_format" id="contagious-format" {{(is_null(old('contagious_format')))?($data->contagious_format==0)?'checked':null:(old('contagious_format')==0)?'checked':null}}/>
              <label class="lbl middle"  for="contagious-format"> ไม่เคย /  No</label>
      </div>
      &nbsp; &nbsp; &nbsp;
      <div class="inline">
          <input type="radio" form="efm" class="ace" value="1" name="contagious_format" id="contagious-format-yes" {{(is_null(old('contagious_format')))?($data->contagious_format==1)?'checked':null:(old('contagious_format')==1)?'checked':null}}/>
              <label class="lbl middle" for="contagious-format-yes">  เคย /  Yes</label>
      </div>&nbsp; &nbsp; &nbsp;
        <div id="contagious-box">
              <span class="lbl middle"> ถ้าเคย  เป็นอะไร ? /  If  yes, Please explain ?  </span>
      <input type="text" id="form-field-1" form="efm" name="contagious_format_explain" value="{{(is_null(old('contagious_format_explain')))?$data->contagious_format_explain:old('contagious_format_explain')}}" placeholder="Please explain" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
    </div>
  </div>
  </div>

  <div class="form-group">
    <div class="col-md-12">
      ท่านมีคดีความถูกฟ้องร้องต่อศาล และหรืออยู่ในระหว่างพิจารณาคดี
    <br />

      <div class="inline">
          <input  type="radio" class="ace" value="0"  name="law_format" id="law-format" form="efm" {{(is_null(old('law_format')))?($data->law_format==0)?'checked':null:(old('law_format')==0)?'checked':null}}/>
              <label class="lbl middle" for="law-format">  ไม่มี  /  No</label>
      </div>
      &nbsp; &nbsp; &nbsp;
      <div class="inline">
          <input  type="radio" class="ace" value="1" name="law_format" id="law-format-yes" id="law-format-yes" form="efm" {{(is_null(old('law_format')))?($data->law_format==1)?'checked':null:(old('law_format')==1)?'checked':null}}/>
              <label class="lbl middle"  for="law-format-yes">  มี / Yes</label>
      </div>
        &nbsp; &nbsp; &nbsp;
      <div id="law-box">
        <div class="inline">
                <span class="lbl middle"> ถ้ามี เรื่องอะไร ? /  If  yes, Please explain ?  </span>
        <input type="text" id="form-field-1" form="efm" name="law_format_explain" value="{{(is_null(old('law_format_explain')))?$data->law_format_explain:old('law_format_explain')}}" placeholder="Please explain" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
        </div>
        </div>
  </div>
  </div>

  <div class="form-group">
    <div class="col-md-12">
      ท่านเคยต้องโทษคดีอาญาหรือคดีแพ่งหรือไม่
    <br />

      <div class="inline">
          <input  type="radio" form="efm" class="ace" value="0" name="law2_format" id="law2-format" {{(is_null(old('law2_format')))?($data->law2_format==0)?'checked':null:(old('law2_format')==0)?'checked':null}}/>
              <label class="lbl middle" for="law2-format">  ไม่มี  /  No</label>
      </div>
      &nbsp; &nbsp; &nbsp;
      <div class="inline">
          <input  type="radio" form="efm" class="ace" value="1" name="law2_format" id="law2-format-yes" {{(is_null(old('law2_format')))?($data->law2_format==1)?'checked':null:(old('law2_format')==1)?'checked':null}}/>
              <label class="lbl middle" for="law2-format-yes">  มี / Yes</label>
      </div>
      &nbsp; &nbsp; &nbsp;
        <div id="law2-box">
      <div class="inline">
              <span class="lbl middle"> ถ้ามี เรื่องอะไร ? /  If  yes, Please explain ?  </span>
      </div>
      <input type="text" id="form-field-1" form="efm" name="law2_format_explain" value="{{(is_null(old('law2_format_explain')))?$data->law2_format_explain:old('law2_format_explain')}}" placeholder="Please explain" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
      </div>
      </div>
  </div>

  <div class="form-group">
    <div class="col-md-12">
     ท่านยินยอมให้ตรวจสอบประวัติ ตรวจหาสารเสพติดในร่างกายและตรวจร่างกายตามที่บริษัทเห็นสมควร
<br />

      <div class="inline">
          <input form="efm" name="agb" id="bodycheck" type="radio" class="ace" value="1" {{(is_null(old('agb')))?($data->agb==1)?'checked':null:(old('agb')==1)?'checked':null}}/>
              <label class="lbl middle" for="bodycheck">  ยินยอม /  Agree</label>
      </div>
      &nbsp; &nbsp; &nbsp;
      <div class="inline">
          <input  form="efm" name="agb" id="bodycheck-no" type="radio" class="ace" value="0" {{(is_null(old('agb')))?($data->agb==0)?'checked':null:(old('agb')==0)?'checked':null}}/>
              <label class="lbl middle" for="bodycheck-no">  ไม่ยินยอม  /   Disagree </label>
      </div>
  </div>
    </div>



  <div class="form-group">
    <div class="col-md-12">
     ท่านเคยสัมภาษณ์งานกับบริษัทนี้มาก่อนหรือไม่ ? <br /> Have  you  ever  interviewed  with  us  before ?
  <br />

      <div class="inline">
          <input   type="radio" form="efm" class="ace" value="0" name="intv_format" id="intv-format" {{(is_null(old('intv_format')))?($data->intv_format==0)?'checked':null:(old('intv_format')==0)?'checked':null}}/>
              <label class="lbl middle" for="intv-format" >    ไม่เคย  /   No</label>
      </div>
      &nbsp; &nbsp; &nbsp;
      <div class="inline">
          <input  type="radio" class="ace" form="efm" value="1" name="intv_format" id="intv-format-yes" {{(is_null(old('intv_format')))?($data->intv_format==1)?'checked':null:(old('intv_format')==1)?'checked':null}}/>
              <label class="lbl middle" for="intv-format-yes"> เคย /  Agree</label>
      </div>
      <div id="intv-box">
      <div class="inline">
              <span class="lbl middle"> ถ้าเคย  เมื่อไร ? /  If  yes, When ?  </span>
      </div>
      <input type="text" id="form-field-1" form="efm" name="intv_format_when" value="{{(is_null(old('intv_format_when')))?$data->intv_format_when:old('intv_format_when')}}" placeholder="If  yes, When" data-inputmask-regex="[A-Za-zก-๙0-9\s\-]*"/>
      </div>
  </div>
    </div>

  <div class="form-group">
    <div class="col-md-12">
     กรณีเร่งด่วน บุคคลที่สามารถติดต่อได้  In case of emergency, please notify :
    </div>
    <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ชื่อ / Name </div>

    <div class="col-sm-9">
      <div class="clearfix">
         <input type="text" id="emrcon" form="efm" name="emrcon_name" value="{{(is_null(old('emrcon_name')))?$data->emrcon_name:old('emrcon_name')}}" class="form-control" placeholder="Name" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> ที่อยู่ / Address </div>

    <div class="col-sm-9">
      <textarea name="emrcon_address" form="efm" name="emrcon_address" rows="5" class="form-control" placeholder="Address">{{(is_null(old('emrcon_address')))?$data->emrcon_address:old('emrcon_address')}}</textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1"> โทรศัพท์ / Tel. No. </div>

    <div class="col-sm-9">
      <input type="text" form="efm" id="form-field-1" name="emrcon_tel" value="{{(is_null(old('emrcon_tel')))?$data->emrcon_tel:old('emrcon_tel')}}" placeholder="Tel" class="form-control" placeholder="Tel. No." data-inputmask-regex='[0-9\-]*'/>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-div no-padding-right" for="form-field-1-1">  ความสัมพันธ์ / Relationship </div>

    <div class="col-sm-9">
      <input type="text" form="efm" id="form-field-1" name="emrcon_rel" value="{{(is_null(old('emrcon_rel')))?$data->emrcon_rel:old('emrcon_rel')}}" placeholder="Relationship" class="form-control" data-inputmask-regex="[A-Za-zก-๙0-9\s]*"/>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-12">
ท่านมีบุคคลที่รู้จัก ทำงานกับ ทำงานกับ Do Day Dream Plc. หรือไม่ <br />
Do you have friends or relatives working with Do Day Dream Plc. ?
       <br />
       <div class="inline">
           <input  type="radio" form="efm" class="ace" value="0"  name="friends_format" id="friends-format" {{(is_null(old('friends_format')))?($data->friends_format==0)?'checked':null:(old('friends_format')==0)?'checked':null}}/>
               <label class="lbl middle" for="friends-format">    ไม่มี  /   No</label>
       </div>
       &nbsp; &nbsp; &nbsp;
       <div class="inline">
           <input  type="radio" form="efm" class="ace" value="1"  name="friends_format" id="friends-format-yes" {{(is_null(old('friends_format')))?($data->friends_format==1)?'checked':null:(old('friends_format')==1)?'checked':null}}/>
               <label class="lbl middle" for="friends-format-yes">  มี /  Yes</label>
       </div>
       <div id="friends-box">

       <div class="inline">
               <span class="lbl middle"> ถ้ามี กรุณาระบุชื่อ ? /  If  yes, Please give the names ?  </span>
       </div>
       <textarea id="form-field-11" form="efm" class="autosize-transition form-control" placeholder="Please give the names" name="fcn">{{(is_null(old('fcn')))?$data->fcn:old('fcn')}}</textarea>
    </div>
  </div>
  </div>

  <div class="form-group">
    <div class="col-md-12">
      เขียนชื่อ  ที่อยู่  โทรศัพท์  และอาชีพของผู้ที่จะอ้างถึง  2  คน ที่รู้จักคุ้นเคยตัวท่านดี <br />
       List names, addresses, telephone  and  occupation of  2  references who  know  you.<br />
       <textarea id="form-field-11" class="autosize-transition form-control" form="efm" name="fcn2" placeholder="Who  know  you.">{{(is_null(old('fcn2')))?$data->fcn2:old('fcn2')}}</textarea>
    </div>
  </div>
<hr />
  <div class="form-group">
    <div class="col-md-12">
       ท่านจะมาเริ่มงานกับบริษัทฯได้เมื่อไรถ้ามีตำแหน่งให้ (วัน/เดือน/ปี)<br />When  can  you  start  working  with  us, If  employed ?  <br />
       <div class="input-medium">
               <div class="input-group">
                       <input readonly class="input-medium date-picker" form="efm" id="form-field-date" type="text" data-date-format="yyyy-mm-dd" placeholder="Date for start working" name="startwk" value="{{(is_null(old('startwk')))?$data->startwk:old('startwk')}}"/>
                       <span class="input-group-addon">
                               <i class="ace-icon fa fa-calendar"></i>
                       </span>
               </div>
       </div>
    </div>
  </div>

    <div class="form-group">
    <div class="col-md-12">
      กรุณาแนะนำตัวท่านเอง  เพื่อให้บริษัทรู้จักตัวท่านดีขึ้น <br />
       Please  provide  any  further  informations  about  yourself  which  will  allow company  to  know  you  better.<br />
       <textarea id="form-field-11" form="efm" class="form-control" placeholder="Plase introduce your self" name="intf">{{(is_null(old('intf')))?$data->intf:old('intf')}}</textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-12">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="inline">
        <input type="checkbox" id="agg_data" form="efm" class="ace" value="1" name="agg_data" {{(is_null(old('agg_data')))?($data->agg_data==1)?'checked':null:(old('agg_data')==1)?'checked':null}}/>
            <label class="lbl middle" for="agg_data">
              * ข้าพเจ้าขอรับรองว่า ข้อความดังกล่าวทั้งหมดในใบสมัครนี้เป็นความจริงถูกต้องและสมบูรณ์ทุกประการ หลังจากบริษัทจ้างเข้ามาทำงานแล้วปรากฏว่า
             ข้อความในใบสมัครงาน เอกสารที่นำมาแสดง หรือรายละเอียดที่ให้ไว้ไม่เป็นความจริง
             บริษัทฯ มีสิทธิที่จะเลิกจ้างข้าพเจ้าได้โดยไม่ต้องจ่ายเงินชดเชยหรือค่าเสียหายใดๆ ทั้งสิ้น
            </label>
    </div>
    <br />
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     I certify that all statements given in this application form are true. If any is found to be untrue after engagement,
     the company has the right  to terminate my employment without any compensation or severance pay what soever.
    </div>
  </div>

  </div>

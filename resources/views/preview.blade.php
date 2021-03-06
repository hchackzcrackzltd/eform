@inject('carbon', 'Carbon\Carbon')
<div class="row">
  <div class="col-xs-6">
    @if (!empty($img1))
      <img src="{{$img1}}" class="img-circle col-xs-5" alt="Picture">
    @elseif (isset($picdb))
      <img src="{{$picdb}}" class="img-circle col-xs-5" alt="Picture">
    @else
      <img src="{{asset('img/Profile.jpg')}}" class="img-circle col-xs-5" alt="Picture">
    @endif
    <div class="col-xs-7 clearfix">
      <p class="h3">{{(!isset($data['titlename']))?'ไม่ระบุ':$master_titlename[$data['titlename']]}}{{(empty($data['name']))?'ไม่ระบุ':$data['name']}} {{(empty($data['surname']))?'ไม่ระบุ':$data['surname']}}</p>
      <p class="h4">{{(!isset($data['titlename']))?'ไม่ระบุ':$master_titlenameeng[$data['titlename']]}}{{(empty($data['nameeng']))?'ไม่ระบุ':ucfirst($data['nameeng'])}} {{(empty($data['surnameeng']))?'ไม่ระบุ':ucfirst($data['surnameeng'])}}</p>
      <p><b>อายุ (Age):</b> {{(empty($data['birthdate']))?'ไม่ระบุ':($carbon::now()->year)-($carbon::parse($data['birthdate'])->year)}}</p>
    </div>
  </div>
  <div class="col-xs-6 text-right">
    <p>{{(empty($data['email']))?'ไม่ระบุ':$data['email']}} <i class="fa fa-envelope"></i></p>
    <p>{{(empty($data['mobile']))?'ไม่ระบุ':$data['mobile']}} <i class="fa fa-mobile-phone"></i></p>
    <p>{{(empty($data['telephone']))?'ไม่ระบุ':$data['telephone']}} <i class="fa fa-phone"></i></p>
  </div>
  <div class="col-xs-12 text-justify"><br>
    <p>{{$data['intf']}}</p>
  </div>
  <div class="col-xs-12 col-md-6">
    <div class="col-xs-12 clearfix">
      <p class="h4">ข้อมูลส่วนตัว</p>
      <p class="h4">Personal Information</p>
      <hr>
      <div class="col-xs-12 clearfix">
        <p><b>น้ำหนัก (Weight):</b> {{(empty($data['weight']))?'ไม่ระบุ':$data['weight']}} <b>ส่วนสูง (Height):</b> {{(empty($data['height']))?'ไม่ระบุ':$data['height']}}</p>
      </div>
      <div class="col-xs-12 clearfix">
        <b>ที่อยู่ตามทะเบียนบ้าน (Registered Address)</b>
        <p>{{(empty($data['address_mas']))?'ไม่ระบุ':$data['address_mas']}}</p>
        <b>ที่อยู่ปัจจุบัน (Present Address)</b>
        <p>{{(empty($data['address']))?'ไม่ระบุ':$data['address']}}</p>
      </div>
      <div class="col-xs-12 col-md-6 clearfix">
        <b>เกิดที่จังหวัด (Place of birth)</b>
        <p>{{(empty($data['provb']))?'ไม่ระบุ':$form_provin->where('id',$data['provb'])->first()->name}}</p>
      </div>
      <div class="col-xs-12 col-md-6 clearfix">
        <b>เกิดวันที่ (Date of birth)</b>
        <p>{{(empty($data['birthdate']))?'ไม่ระบุ':$carbon::parse($data['birthdate'])->format('d M Y')}}</p>
      </div>
      <div class="col-xs-12 col-md-6">
        <b>สัญชาติ (Nationality)</b>
        <p>{{(empty($data['natc']))?'ไม่ระบุ':$form_nation->where('id',$data['natc'])->first()->name}}</p>
      </div>
      <div class="col-xs-12 col-md-6">
        <b>เชื้อชาติ (Race)</b>
        <p>{{(empty($data['race']))?'ไม่ระบุ':$form_race->where('id',$data['race'])->first()->name}}</p>
      </div>
      <div class="col-xs-12 col-md-6">
        <b>ศาสนา (Religion)</b>
        <p>{{(empty($data['reli']))?'ไม่ระบุ':$form_relig->where('id',$data['reli'])->first()->name}}</p>
      </div>
      <div class="col-xs-12 col-md-6">
        <b>บัตรประจำตัวประชาชนเลขที่ (ID Card No.)</b>
        <p>{{(empty($data['code_card']))?'ไม่ระบุ':$data['code_card']}}</p>
      </div>
      <div class="col-xs-12 col-md-6">
        <b>ออกให้ ณ (Issued at)</b>
        <p>{{(empty($data['issued_at']))?'ไม่ระบุ':$data['issued_at']}}</p>
      </div>
      <div class="col-xs-12 col-md-6">
        <b>วันที่ออกบัตร (Issued Date)</b>
        <p>{{(empty($data['issuedate']))?'ไม่ระบุ':$carbon::parse($data['issuedate'])->format('d M Y')}}</p>
      </div>
      <div class="col-xs-12">
        <b>สถานะภาพการสมรส (Marital Starus)</b>
        <p>{{(empty($data['status']))?'ไม่ระบุ':$form_mstatus->where('id',$data['status'])->first()->name}}</p>
      </div>
    </div>
    <div class="col-xs-12 clearfix">
        <div class="col-xs-12">
          <p class="h4">รายละเอียดทางครอบครัว</p>
          <p class="h4">Family Details</p>
      <hr>
        </div>
        <div class="col-xs-12">
          <p class="h4">ภรรยา|สามี</p>
          <p class="h4">Wife|Husband</p>
        </div>
        <div class="col-xs-12">
          <b>ชื่อ-นามสกุล (Name-Surname)</b>
          <p>{{(empty($data['fam_name']))?'ไม่ระบุ':$data['fam_name']}} {{(empty($data['fam_surname']))?'ไม่ระบุ':$data['fam_surname']}}</p>
        </div>
        <div class="col-xs-12 col-md-4">
          <b>อายุ (Age)</b>
          <p>{{(empty($data['fam_age']))?'ไม่ระบุ':$data['fam_age']}}</p>
        </div>
        <div class="col-xs-12 col-md-8">
          <b>อาชีพ|ตำแหน่ง (Occupation|Position)</b>
          <p>{{(empty($data['fam_posit']))?'ไม่ระบุ':$data['fam_posit']}}</p>
        </div>
        <div class="col-xs-12">
          <p class="h4">บุตร</p>
          <p class="h4">Childens</p>
        </div>
        @foreach ($data['child'] as $key=>$value)
          <div class="col-xs-12">
            <b>{{$loop->index+1}}. ชื่อ-นามสกุล (Name-Surname)</b>
            <p>{{(empty($value['name']))?'ไม่ระบุ':$value['name']}} {{(empty($value['surname']))?'ไม่ระบุ':$value['surname']}}</p>
          </div>
          <div class="col-xs-12 col-md-4">
            <b>อายุ (Age)</b>
            <p>{{(empty($value['age']))?'ไม่ระบุ':$value['age']}}</p>
          </div>
          <div class="col-xs-12 col-md-8">
            <b>อาชีพ|ตำแหน่ง (Occupation|Position)</b>
            <p>{{(empty($value['op']))?'ไม่ระบุ':$value['op']}}</p>
          </div>
        @endforeach
        <div class="col-xs-12">
          <p class="h4">บิดา</p>
          <p class="h4">Father</p>
        </div>
        <div class="col-xs-12">
          <b>ชื่อ-นามสกุล (Name-Surname)</b>
          <p>{{(empty($data['f_name']))?'ไม่ระบุ':$data['f_name']}} {{(empty($data['f_surname']))?'ไม่ระบุ':$data['f_surname']}}</p>
        </div>
        <div class="col-xs-12 col-md-4">
          <b>อายุ (Age)</b>
          <p>{{(empty($data['f_age']))?'ไม่ระบุ':$data['f_age']}}</p>
        </div>
        <div class="col-xs-12 col-md-8">
          <b>อาชีพ|ตำแหน่ง (Occupation|Position)</b>
          <p>{{(empty($data['f_posit']))?'ไม่ระบุ':$data['f_posit']}}</p>
        </div>
        <div class="col-xs-12">
          <b>ที่อยู่ | ที่ทำงาน (Address | Office)</b>
          <p>{{(empty($data['f_address']))?'ไม่ระบุ':$data['f_address']}}</p>
        </div>
        <div class="col-xs-12">
          <b>โทรศัพท์ (Tel. No.)</b>
          <p>{{(empty($data['f_phone']))?'ไม่ระบุ':$data['f_phone']}}</p>
        </div>
        <div class="col-xs-12">
          <p class="h4">มารดา</p>
          <p class="h4">Mother</p>
        </div>
        <div class="col-xs-12">
          <b>ชื่อ-นามสกุล (Name-Surname)</b>
          <p>{{(empty($data['m_name']))?'ไม่ระบุ':$data['m_name']}} {{(empty($data['m_surname']))?'ไม่ระบุ':$data['m_surname']}}</p>
        </div>
        <div class="col-xs-12 col-md-4">
          <b>อายุ (Age)</b>
          <p>{{(empty($data['m_age']))?'ไม่ระบุ':$data['m_age']}}</p>
        </div>
        <div class="col-xs-12 col-md-8">
          <b>อาชีพ|ตำแหน่ง (Occupation|Position)</b>
          <p>{{(empty($data['m_posit']))?'ไม่ระบุ':$data['m_posit']}}</p>
        </div>
        <div class="col-xs-12">
          <b>ที่อยู่ | ที่ทำงาน (Address | Office)</b>
          <p>{{(empty($data['m_address']))?'ไม่ระบุ':$data['m_address']}}</p>
        </div>
        <div class="col-xs-12">
          <b>โทรศัพท์ (Tel. No.)</b>
          <p>{{(empty($data['m_phone']))?'ไม่ระบุ':$data['m_phone']}}</p>
        </div>
        <div class="col-xs-12">
          <p class="h4">พี่น้อง</p>
          <p class="h4">Brother/Sister</p>
        </div>
        @foreach ($data['brasis'] as $key=>$value)
          <div class="col-xs-12">
            <b>{{$loop->index+1}}. ชื่อ-นามสกุล (Name-Surname)</b>
            <p>{{(empty($value['name']))?'ไม่ระบุ':$value['name']}} {{(empty($value['surname']))?'ไม่ระบุ':$value['surname']}}</p>
          </div>
          <div class="col-xs-12 col-md-4">
            <b>อายุ (Age)</b>
            <p>{{(empty($value['age']))?'ไม่ระบุ':$value['age']}}</p>
          </div>
          <div class="col-xs-12 col-md-8">
            <b>อาชีพ|ตำแหน่ง (Occupation|Position)</b>
            <p>{{(empty($value['op']))?'ไม่ระบุ':$value['op']}}</p>
          </div>
          <div class="col-xs-12">
            <b>ที่อยู่ | ที่ทำงาน (Address | Office)</b>
            <p>{{(empty($value['ao']))?'ไม่ระบุ':$value['ao']}}</p>
          </div>
          <div class="col-xs-12">
            <b>โทรศัพท์ (Tel. No.)</b>
            <p>{{(empty($value['tel']))?'ไม่ระบุ':$value['tel']}}</p>
          </div>
        @endforeach
    </div>
  </div>
  <div class="col-xs-12 col-md-6">
    <div class="col-xs-12 clearfix">
        <div class="col-xs-12">
          <p class="h4">การรับราชการทหาร</p>
          <p class="h4">MILITARY SERVICE</p>
      <hr>
        </div>
        @isset($data['national_format'])
          <div class="col-xs-12">
            <p>{{$master_mlitary[$data['national_format']]}}</p>
            @if ($data['national_format']==2)
              <p>{{$data['national_format_due']}}</p>
            @elseif ($data['national_format']==3)
              <p>{{$data['national_format_ref']}}</p>
            @else
            @endif
          </div>
        @endisset
      </div>
      <div class="col-xs-12 clearfix">
          <div class="col-xs-12">
            <p class="h4">ประวัติการศึกษา</p>
            <p class="h4">EDUCATIONAL BACKGROUND</p>
        <hr>
          </div>
          <div class="col-xs-12">
            @foreach ($data['uni'] as $key=>$value)
              <div class="col-xs-12">
                <b>{{$loop->index+1}}. การศึกษา (Education)</b>
                <p>{{$master_edu->where('id',$value['typeuni'])->first()->name}}</p>
              </div>
              <div class="col-xs-12">
                <b>ชื่อสถานการศึกษา (Institute Nameุ)</b>
              </div>
              <div class="col-xs-12">
                <b>ระยะเวลา (Period)</b>
                <p>{{(empty($value['startdate']))?'ไม่ระบุ':$carbon::parse($value['startdate'])->format('d M Y')}} สิ้นสุด {{(empty($value['enddate']))?'ไม่ระบุ':$carbon::parse($value['enddate'])->format('d M Y')}}</p>
              </div>
              <div class="col-xs-12">
                <b>วุฒิที่ได้รับ (Certificate/Diploma/Degree)</b>
                <p>{{(empty($value['cdd']))?'ไม่ระบุ':$value['cdd']}}</p>
              </div>
              <div class="col-xs-12">
                <b>วิชาเอก / สาขาวิชา (Major Subject)</b>
                <p>{{(empty($value['ms']))?'ไม่ระบุ':$value['ms']}}</p>
              </div>
              <div class="col-xs-12">
                <b>เกรดเฉลี่ย (Grade Point Average)</b>
                <p>{{(empty($value['gpa']))?'ไม่ระบุ':$value['gpa']}}</p>
              </div>
            @endforeach
          </div>
          <div class="col-xs-12 clearfix">
              <div class="col-xs-12">
                <p class="h4">การฝึกอบรม</p>
                <p class="h4">TRAINING</p>
            <hr>
              </div>
              <div class="col-xs-12">
                @foreach ($data['trn'] as $key=>$value)
                  <div class="col-xs-12">
                    <b>{{$loop->index+1}}. ชื่อหัวข้อ (Subject)</b>
                    <p>{{(empty($value['name']))?'ไม่ระบุ':$value['name']}}</p>
                  </div>
                  <div class="col-xs-12">
                    <b>สถาบันฝึกอบรม (Institute)</b>
                    <p>{{(empty($value['ins']))?'ไม่ระบุ':$value['ins']}}</p>
                  </div>
                  <div class="col-xs-12">
                    <b>วุฒิบัตรที่ได้รับ (Certificate Received)</b>
                    <p>{{(empty($value['cr']))?'ไม่ระบุ':$value['cr']}}</p>
                  </div>
                  <div class="col-xs-12">
                    <b>ระยะเวลา (Duration)</b>
                    <p>{{(empty($value['dr']))?'ไม่ระบุ':$value['dr']}}</p>
                  </div>
                @endforeach
              </div>
            </div>
        </div>
        <div class="col-xs-12 clearfix">
            <div class="col-xs-12">
              <p class="h4">ภาษา</p>
              <p class="h4">Language</p>
          <hr>
            </div>
            @foreach ($data['lang1'] as $key => $value)
              <div class="col-xs-12 col-md-6">
                <b>ภาษา {{$form_lang->where('id',$key)->first()->name}}</b>
              </div>
              <div class="col-xs-12 col-md-6">
                <p><b>พูด (Speak)</b>: {{$master_lang[$value['sp']]}}</p>
                <p><b>อ่าน (Read)</b>: {{$master_lang[$value['rd']]}}</p>
                <p><b>ฟัง (Listen)</b>: {{$master_lang[$value['ls']]}}</p>
                <p><b>เขียน (Write)</b>: {{$master_lang[$value['wr']]}}</p>
              </div>
            @endforeach
            <div class="col-xs-12">
              <b>ภาษาอื่น ๆ (Others, If any)</b>
              <p>{{(empty($data['lang_etc']))?'ไม่ระบุ':$data['lang_etc']}}</p>
            </div>
            <div class="col-xs-12">
              <b>ความสามารถด้านคอมพิวเตอร์ (Computer's Program)</b>
              <p>{{(empty($data['abi_com']))?'ไม่ระบุ':$data['abi_com']}}</p>
            </div>
            <div class="col-xs-12">
              <b>ความสามารถพิเศษอื่นๆ (Any other abilities)</b>
              <p>{{(empty($data['abi_any']))?'ไม่ระบุ':$data['abi_any']}}</p>
            </div>
        </div>
        <div class="col-xs-12">
          <div class="col-xs-12 clearfix">
                <p class="h4">ตำแหน่งหรือประเภทของงานที่สมัคร</p>
                <p class="h4">(Position or Type of Work Applied)</p>
            <hr>
              <div class="col-xs-12">
                @foreach ($data['posit'] as $value)
                  <p><b>ตำแหน่งที่ {{$loop->index+1}} :</b> {{$form_posit->where('id',$value)->first()->name}}</p>
                @endforeach
                <p><b>ตำแหน่งอื่นๆ :</b>{{(empty($data['etc_posit']))?'ไม่ระบุ':$data['etc_posit']}}</p>
              </div>
            </div>
        </div>
  </div>
  <div class="col-xs-12">
    <div class="col-xs-12 clearfix">
        <div class="col-xs-12">
          <p class="h4">การทำงานรวมทั้งงานชั่วคราว/การฝึกงาน /</p>
          <p class="h4">EMPLOYMENT : (Including Temporary Work/Practical Training)</p>
      <hr>
        </div>
        <div class="col-xs-12">
          <p class="h4">การทำงานล่าสุด (Lastest Job):</p>
        </div>
        @isset($data['hco_status'])
          <div class="col-xs-12">
            <b>สถานะงาน (Status Job)</b>
            <p>ว่างงาน (Unemployed)</p>
          </div>
        @endisset
        @if (!isset($data['hco_status']))
          <div class="col-xs-12 col-md-6">
            <b>องค์กร / บริษัท (Company)</b>
            <p>{{(empty($data['hco_name']))?'ไม่ระบุ':$data['hco_name']}}</p>
          </div>
          <div class="col-xs-12 col-md-6">
            <b>ตั้งอยู่ที่ (Address)</b>
            <p>{{(empty($data['hco_address']))?'ไม่ระบุ':$data['hco_address']}}</p>
          </div>
          <div class="col-xs-12 col-md-6">
            <b>ระยะเวลา (Period)</b>
            <p>เริ่มงานเมื่อ (Start date): {{(empty($data['hco_strdate']))?'ไม่ระบุ':$carbon::parse($data['hco_strdate'])->format('d M Y')}} สื้นสุด (Until): {{(strlen($data['hco_enddate'])>0)?$data['hco_enddate']:'ปัจจุบัน'}}</p>
          </div>
          <div class="col-xs-12 col-md-6">
            <b>ตำแหน่ง (Position)</b>
            <p>{{(empty($data['hco_posit']))?'ไม่ระบุ':$data['hco_posit']}}</p>
          </div>
          <div class="col-xs-12 col-md-6">
            <b>ลักษณะงาน (Responsibilities)</b>
            <p>{{(empty($data['hco_respon']))?'ไม่ระบุ':$data['hco_respon']}}</p>
          </div>
          <div class="col-xs-12 col-md-6">
            <b>บุคคลอ้างอิง (Reference)</b>
            <p>{{(empty($data['hco_ref']))?'ไม่ระบุ':$data['hco_ref']}}</p>
          </div>
          <div class="col-xs-12 col-md-6">
            <b>เกี่ยวข้องเป็น (Relation)</b>
            <p>{{(empty($data['hco_rel']))?'ไม่ระบุ':$data['hco_rel']}}</p>
          </div>
          <div class="col-xs-12 col-md-6">
            <b>โทร (Tel)</b>
            <p>{{(empty($data['hco_tel']))?'ไม่ระบุ':$data['hco_tel']}}</p>
          </div>
          <div class="col-xs-12">
            <b>เหตุผลที่ลาออก (Reason for leaving)</b>
            <p>{{(empty($data['hco_resign']))?'ไม่ระบุ':$data['hco_resign']}}</p>
          </div>
        @endif
        <div class="col-xs-12">
          <p class="h4">ประวัติการทำงานที่ผ่านมา (Previous Job):</p>
        </div>
        @foreach ($data['his'] as $key => $value)
          <div class="col-xs-12 col-md-6">
            <b>{{$loop->index+1}} องค์กร / บริษัท (Company)</b>
            <p>{{(empty($value['name']))?'ไม่ระบุ':$value['name']}}</p>
          </div>
          <div class="col-xs-12 col-md-6">
            <b>ตั้งอยู่ที่ (Address)</b>
            <p>{{(empty($value['address']))?'ไม่ระบุ':$value['address']}}</p>
          </div>
          <div class="col-xs-12 col-md-6">
            <b>ระยะเวลา (Period)</b>
            <p>เริ่มงานเมื่อ (Start date): {{(empty($value['strdate']))?'ไม่ระบุ':$carbon::parse($value['strdate'])->format('d M Y')}} สื้นสุด (Until): {{(empty($value['enddate']))?'ไม่ระบุ':$carbon::parse($value['enddate'])->format('d M Y')}}</p>
          </div>
          <div class="col-xs-12 col-md-6">
            <b>ตำแหน่ง (Position)</b>
            <p>{{(empty($value['posit']))?'ไม่ระบุ':$value['posit']}}</p>
          </div>
          <div class="col-xs-12 col-md-6">
            <b>ลักษณะงาน (Responsibilities)</b>
            <p>{{(empty($value['respon']))?'ไม่ระบุ':$value['respon']}}</p>
          </div>
          <div class="col-xs-12 col-md-6">
            <b>บุคคลอ้างอิง (Reference)</b>
            <p>{{(empty($value['ref']))?'ไม่ระบุ':$value['ref']}}</p>
          </div>
          <div class="col-xs-12 col-md-6">
            <b>เกี่ยวข้องเป็น (Relation)</b>
            <p>{{(empty($value['rel']))?'ไม่ระบุ':$value['rel']}}</p>
          </div>
          <div class="col-xs-12 col-md-6">
            <b>โทร (Tel)</b>
            <p>{{(empty($value['tel']))?'ไม่ระบุ':$value['tel']}}</p>
          </div>
        @endforeach
  </div>
  <div class="col-xs-12">
    <p class="h4">ข้อความเพิ่มเติม</p>
    <p class="h4">(Additional Information)</p>
<hr>
<div class="col-xs-12">
  <b>ท่านมีใบขับขี่หรือไม่ ? (Do you hold a driving licence?):</b>
</div>
<div class="col-xs-12 col-md-6">
  <b>รถยนต์ (Car)</b>
  <p>{{($data['drivli'])?'มี Yes':'ไม่มี No'}}</p>
</div>
<div class="col-xs-12 col-md-6">
  <b>มอเตอร์ไซด์ (Motorcycle)</b>
  <p>{{($data['moto'])?'มี Yes':'ไม่มี No'}}</p>
</div>
<div class="col-xs-12">
  <b class="h5">ท่านมีรถยนต์/มอเตอร์ไซค์ส่วนตัวที่สามารถนำมาใช้ในธุรกิจของบริษัทหรือไม่ ? (Do you have a car / motorcycle avialable for company business?):</b>
</div>
@isset($data['caru'])
  <div class="col-xs-12 col-md-6">
    <b>รถยนต์ (Car)</b>
    <p>มี Yes</p>
  </div>
@endisset
@isset($data['motou'])
  <div class="col-xs-12 col-md-6">
    <b>มอเตอร์ไซด์ (Motorcycle)</b>
    <p>มี Yes</p>
  </div>
@endisset
<div class="col-xs-12">
  <b>งานอดิเรก, กีฬาและกิจกรรมที่สนใจ (Present hobbies , sports , interest):</b>
</div>
<div class="col-xs-12">
  <p>{{(empty($data['freetm']))?'ไม่ระบุ':$data['freetm']}}</p>
</div>
<div class="col-xs-12">
  <b>ท่านเป็นสมาชิกของสมาคมหรือองค์การอาชีพอะไร และมีตำแหน่งอะไร? (What associations or professional organizations are you a member of and what position do you hold?):</b>
</div>
<div class="col-xs-12">
  <p>{{(empty($data['frncm']))?'ไม่ระบุ':$data['frncm']}}</p>
</div>
<div class="col-xs-12">
  <b>ท่านเคยป่วยหนักและเป็นโรคติดต่อร้ายแรงมาก่อนหรือไม่? (Have you ever been seriously ill or contacted with contagious disease?):</b>
</div>
<div class="col-xs-12">
  <p>{{($data['contagious_format'])?'เคย Yes':'ไม่เคย No'}}</p>
</div>
@if ($data['contagious_format'])
  <div class="col-xs-12">
    <b>ถ้าเคย เป็นอะไร ? (If yes, Please explain ?)</b>
    <p>{{$data['contagious_format_explain']}}</p>
  </div>
@endif
<div class="col-xs-12">
  <b>ท่านมีคดีความถูกฟ้องร้องต่อศาล และหรืออยู่ในระหว่างพิจารณาคดี:</b>
</div>
<div class="col-xs-12">
  <p>{{($data['law_format'])?'มี Yes':'ไม่มี No'}}</p>
</div>
@if ($data['law_format_explain'])
  <div class="col-xs-12">
    <b>ถ้ามี เรื่องอะไร ? (If yes, Please explain ?)</b>
    <p>{{$data['law_format_explain']}}</p>
  </div>
@endif
<div class="col-xs-12">
  <b>ท่านเคยต้องโทษคดีอาญาหรือคดีแพ่งหรือไม่:</b>
</div>
<div class="col-xs-12">
  <p>{{($data['law2_format'])?'เคย Yes':'ไม่เคย No'}}</p>
</div>
@if ($data['law2_format_explain'])
  <div class="col-xs-12">
    <b>ถ้ามี เรื่องอะไร ? (If yes, Please explain ?)</b>
    <p>{{$data['law2_format_explain']}}</p>
  </div>
@endif
<div class="col-xs-12">
  <b>ท่านยินยอมให้ตรวจสอบประวัติ ตรวจหาสารเสพติดในร่างกายและตรวจร่างกายตามที่บริษัทเห็นสมควร:</b>
</div>
<div class="col-xs-12">
  <p>{{($data['agb'])?'ยินยอม / Agree':'ไม่ยินยอม / Disagree'}}</p>
</div>
<div class="col-xs-12">
  <b>ท่านเคยสัมภาษณ์งานกับบริษัทนี้มาก่อนหรือไม่ ? (Have you ever interviewed with us before ?):</b>
</div>
<div class="col-xs-12">
  <p>{{($data['intv_format'])?'เคย Yes':'ไม่เคย No'}}</p>
</div>
@if ($data['intv_format_when'])
  <div class="col-xs-12">
    <b>ถ้ามี เรื่องอะไร ? (If yes, Please explain ?)</b>
    <p>{{$data['intv_format_when']}}</p>
  </div>
@endif
<div class="col-xs-12">
  <b>กรณีเร่งด่วน บุคคลที่สามารถติดต่อได้ ? (In case of emergency, please notify ?):</b>
</div>
<div class="col-xs-12">
  <b>ชื่อ (Name)</b>
  <p>{{(empty($data['emrcon_name']))?'ไม่ระบุ':$data['emrcon_name']}}</p>
</div>
<div class="col-xs-12">
  <b>ที่อยู่ (Address)</b>
  <p>{{(empty($data['emrcon_address']))?'ไม่ระบุ':$data['emrcon_address']}}</p>
</div>
<div class="col-xs-12 col-md-6">
  <b>โทรศัพท์ (Tel. No.)</b>
  <p>{{(empty($data['emrcon_tel']))?'ไม่ระบุ':$data['emrcon_tel']}}</p>
</div>
<div class="col-xs-12 col-md-6">
  <b>ความสัมพันธ์ (Relationship)</b>
  <p>{{(empty($data['emrcon_rel']))?'ไม่ระบุ':$data['emrcon_rel']}}</p>
</div>
<div class="col-xs-12">
  <b>ท่านมีบุคคลที่รู้จัก ทำงานกับ ทำงานกับ Do Day Dream Plc. หรือไม่? (Do you have friends or relatives working with Do Day Dream Plc. ?):</b>
</div>
<div class="col-xs-12">
  <p>{{($data['friends_format'])?'มี Yes':'ไม่มี No'}}</p>
</div>
@if ($data['friends_format'])
  <div class="col-xs-12">
    <b>ถ้ามี กรุณาระบุชื่อ ? (If yes, Please give the names ?)</b>
    <p>{{(empty($data['fcn']))?'ไม่ระบุ':$data['fcn']}}</p>
  </div>
@endif
<div class="col-xs-12">
  <b>เขียนชื่อ ที่อยู่ โทรศัพท์ และอาชีพของผู้ที่จะอ้างถึง 2 คน ที่รู้จักคุ้นเคยตัวท่านดี (List names, addresses, telephone and occupation of 2 references who know you.)</b>
  <p>{{(empty($data['fcn2']))?'ไม่ระบุ':$data['fcn2']}}</p>
</div>
<div class="col-xs-12">
  <b>ท่านจะมาเริ่มงานกับบริษัทฯได้เมื่อไรถ้ามีตำแหน่งให้ (วัน/เดือน/ปี) (When can you start working with us, If employed)</b>
  <p>{{$carbon::parse($data['startwk'])->format('d M Y')}}</p>
</div>
<div class="col-xs-12">
  <b>กรุณาแนะนำตัวท่านเอง เพื่อให้บริษัทรู้จักตัวท่านดีขึ้น (Please provide any further informations about yourself which will allow company to know you better.)</b>
  <p>{{(empty($data['intf']))?'ไม่ระบุ':$data['intf']}}</p>
</div>
@isset($data['agg_data'])
  <div class="col-xs-12">
    <p class="text-justify"><i class="fa fa-check-square-o"></i> * ข้าพเจ้าขอรับรองว่า ข้อความดังกล่าวทั้งหมดในใบสมัครนี้เป็นความจริงถูกต้องและสมบูรณ์ทุกประการ หลังจากบริษัทจ้างเข้ามาทำงานแล้วปรากฏว่า ข้อความในใบสมัครงาน เอกสารที่นำมาแสดง หรือรายละเอียดที่ให้ไว้ไม่เป็นความจริง บริษัทฯ มีสิทธิที่จะเลิกจ้างข้าพเจ้าได้โดยไม่ต้องจ่ายเงินชดเชยหรือค่าเสียหายใดๆ ทั้งสิ้น</p>
    <p class="text-justify">certify that all statements given in this application form are true. If any is found to be untrue after engagement, the company has the right to terminate my employment without any compensation or severance pay what soever.</p>
  </div>
@endisset
  </div>
</div>

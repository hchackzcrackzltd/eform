<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class update_form extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'posit.*'=>'required|numeric|exists:form_posits,id',
            'etc_posit'=>'string|nullable',
            'attachment_f1'=>'file|mimes:pdf,doc,docx,ppt,pptx,jpeg,jpg,png|nullable',
            'attachment_f2'=>'file|mimes:pdf,doc,docx,ppt,pptx,jpeg,jpg,png|nullable',
            'attachment_pic'=>'file|mimes:jpeg,jpg,png|nullable',
            'titlename'=>'required|numeric|in:0,1,2',
            'name'=>'required|string|regex:/[ก-๙]*/',
            'surname'=>'required|string|regex:/[ก-๙]*/',
            'nameeng'=>'required|string|regex:/[A-z]*/',
            'surnameeng'=>'required|string|regex:/[A-z]*/',
            'weight'=>'numeric|nullable',
            'height'=>'numeric|nullable',
            'address_mas'=>'required|string',
            'address'=>'required|string',
            'telephone'=>'nullable|string|regex:/([0-9][0-9]\-[0-9][0-9][0-9][0-9][0-9][0-9][0-9])/',
            'mobile'=>'required|string|regex:/([0-9][0-9][0-9]\-[0-9][0-9][0-9][0-9][0-9][0-9][0-9])/',
            'email'=>'required|email',
            'provb'=>'exists:form_provins,id|nullable',
            'birthdate'=>'required|date|date_format:Y-m-d|before:-20 year',
            'natc'=>'required|exists:form_nations,id',
            'race'=>'exists:form_nations,id|nullable',
            'reli'=>'required|exists:form_nations,id',
            'issuedate'=>'required|date|date_format:Y-m-d',
            'issued_at'=>'string|nullable',
            'status'=>'required|exists:master_mstatuses,id',
            'fam_name'=>'string|nullable|regex:/[A-zก-๙]*/',
            'fam_surname'=>'string|nullable|regex:/[A-zก-๙]*/',
            'fam_age'=>'numeric|nullable',
            'fam_posit'=>'string|nullable',
            'child.*.name'=>'string|nullable|regex:/[A-zก-๙]*/',
            'child.*.surname'=>'string|nullable|regex:/[A-zก-๙]*/',
            'child.*.age'=>'numeric|nullable',
            'child.*.op'=>'string|nullable',
            'f_name'=>'string|nullable|regex:/[A-zก-๙]*/',
            'f_surname'=>'string|nullable|regex:/[A-zก-๙]*/',
            'f_age'=>'numeric|nullable',
            'f_posit'=>'string|nullable|regex:/[A-zก-๙]*/',
            'f_address'=>'string|nullable|regex:/[A-zก-๙]*/',
            'f_phone'=>'string|nullable|regex:/[0-9\s\-]*/',
            'm_name'=>'string|nullable|regex:/[A-zก-๙]*/',
            'm_surname'=>'string|nullable|regex:/[A-zก-๙]*/',
            'm_age'=>'numeric|nullable',
            'm_posit'=>'string|nullable|regex:/[A-zก-๙]*/',
            'm_address'=>'string|nullable|regex:/[A-zก-๙]*/',
            'm_phone'=>'string|nullable|regex:/[0-9\s\-]*/',
            'brasis.*.name'=>'string|nullable|regex:/[A-zก-๙]*/',
            'brasis.*.surname'=>'string|nullable|regex:/[A-zก-๙]*/',
            'brasis.*.age'=>'numeric|nullable',
            'brasis.*.op'=>'string|nullable',
            'brasis.*.ao'=>'string|nullable',
            'brasis.*.tel'=>'string|nullable|regex:/[0-9\s\-]*/',
            'national_format'=>'required|numeric|in:1,2,3',
            'national_format_due'=>'required_if:national_format,2|nullable|date|date_format:Y-m-d',
            'national_format_ref'=>'required_if:national_format,3|nullable|string|regex:/[A-zก-๙0-9\s]*/',
            'uni.*.typeuni'=>'nullable|exists:master_edus,id',
            'uni.*.name'=>'nullable|string|regex:/[A-zก-๙\s\-]*/',
            'uni.*.locat'=>'nullable|string',
            'uni.*.startdate'=>'nullable|date|date_format:Y-m-d',
            'uni.*.enddate'=>'nullable|date|date_format:Y-m-d',
            'uni.*.cdd'=>'nullable|string',
            'uni.*.ms'=>'nullable|string',
            'uni.*.gpa'=>'nullable|string',
            'trn.*.name'=>'nullable|string|regex:/[A-zก-๙\s\-]*/',
            'trn.*.ins'=>'nullable|string',
            'trn.*.cr'=>'nullable|string',
            'trn.*.dr'=>'nullable|string',
            'lang1.*.sp'=>'nullable|numeric|in:0,1,2,3',
            'lang1.*.rd'=>'nullable|numeric|in:0,1,2,3',
            'lang1.*.ls'=>'nullable|numeric|in:0,1,2,3',
            'lang1.*.wr'=>'nullable|numeric|in:0,1,2,3',
            'lang_etc'=>'nullable|string',
            'abi_com'=>'nullable|string',
            'abi_any'=>'nullable|string',
            'hco_status'=>'nullable|boolean',
            'hco_name'=>'nullable|string|regex:/[A-zก-๙\s\-]*/',
            'hco_address'=>'nullable|string',
            'hco_strdate'=>'nullable|date|date_format:Y-m-d',
            'hco_enddate'=>'nullable|date|date_format:Y-m-d|after_or_equal:hco_strdate',
            'hco_posit'=>'nullable|string',
            'hco_respon'=>'nullable|string',
            'hco_ref'=>'nullable|string',
            'hco_rel'=>'nullable|string',
            'hco_tel'=>'nullable|string|regex:/[0-9\s\-]*/',
            'hco_resign'=>'nullable|string',
            'his.*.name'=>'nullable|string|regex:/[A-zก-๙\s\-]*/',
            'his.*.address'=>'nullable|string',
            'his.*.strdate'=>'nullable|date|date_format:Y-m-d',
            'his.*.enddate'=>'nullable|date|date_format:Y-m-d',
            'his.*.posit'=>'nullable|string',
            'his.*.respon'=>'nullable|string',
            'his.*.ref'=>'nullable|string',
            'his.*.rel'=>'nullable|string',
            'his.*.tel'=>'nullable|string|regex:/[0-9\s\-]*/',
            'drivli'=>'nullable|boolean',
            'moto'=>'nullable|boolean',
            'caru'=>'nullable|boolean',
            'motou'=>'nullable|boolean',
            'freetm'=>'nullable|string',
            'frncm'=>'nullable|string',
            'contagious_format'=>'nullable|boolean',
            'contagious_format_explain'=>'required_if:contagious_format,1|nullable|string',
            'law_format'=>'nullable|boolean',
            'law_format_explain'=>'required_if:contagious_format,1|nullable|string',
            'law2_format'=>'nullable|string',
            'law2_format_explain'=>'required_if:law2_format,1|nullable|string',
            'agb'=>'nullable|boolean',
            'intv_format'=>'nullable|boolean',
            'intv_format_when'=>'required_if:intv_format,1|nullable|string',
            'emrcon_name'=>'required|string|regex:/[A-zก-๙\s]*/',
            'emrcon_address'=>'required|string',
            'emrcon_tel'=>'required|string|regex:/[0-9\s\-]*/',
            'emrcon_rel'=>'required|string|regex:/[A-zก-๙\s]*/',
            'friends_format'=>'nullable|boolean',
            'fcn'=>'nullable|string',
            'fcn2'=>'nullable|string',
            'startwk'=>'required|date|date_format:Y-m-d|after:-1 day',
            'intf'=>'nullable|string',
            'agg_data'=>'required|accepted',
        ];
    }

    public function messages()
    {
      return [
        'attachment_f1.mimes'=>'รองรับไฟล์ pdf,doc,docx,ppt,pptx,jpeg,jpg,png',
        'attachment_f2.mimes'=>'รองรับไฟล์ pdf,doc,docx,ppt,pptx,jpeg,jpg,png',
        'titlename.required'=>'กรุณาระบุ คำนำหน้าชื่อ',
        'name.required'=>'กรุณาระบุ ชื่อ',
        'surname.required'=>'กรุณาระบุ นามสกุล',
        'nameeng.required'=>'กรุณาระบุ ชื่อ ภาษาอังกฤษ',
        'surnameeng.required'=>'กรุณาระบุ นามสกุล ภาษาอังกฤษ',
        'address_mas.required'=>'กรุณาระบุ ที่อยู่ตามทะเบียนบ้าน',
        'address.required'=>'กรุณาระบุ ที่อยู่ปัจจุบัน',
        'mobile.required'=>'กรุณาระบุ หมายเลขโทรศัพท์มือถือ',
        'mobile.regex'=>'กรุณาตรวจสอบ หมายเลขโทรศัพท์มือถือ',
        'email.required'=>'กรุณาระบุ อีเมล์ติดต่อ',
        'email.email'=>'กรุณาตรวจสอบ อีเมล์ติดต่อ',
        'birthdate.required'=>'กรุณาระบุ วันเกิด',
        'birthdate.before'=>'อายุผู้สมัครไม่ถึง 20 ปี',
        'code_card.required'=>'กรุณาระบุ เลขที่บัตรประชาชน',
        'code_card.regex'=>'กรุณาตรวจสอบ เลขที่บัตรประชาชน',
        'issuedate.required'=>'กรุณาระบุ วันที่ออกบัตร',
        'status.required'=>'กรุณาระบุ สถานะภาพการสมรส',
        'national_format.required'=>'กรุณาระบุ สถานะภาพการรับราชการทหาร',
        'emrcon_name.required'=>'กรุณาระบุ ชื่อ-นามสกุล ผู้ติดต่อฉุกเฉิน',
        'emrcon_address.required'=>'กรุณาระบุ ที่อยู่ ผู้ติดต่อฉุกเฉิน',
        'emrcon_tel.required'=>'กรุณาระบุ เบอร์โทร ผู้ติดต่อฉุกเฉิน',
        'emrcon_rel.required'=>'กรุณาระบุ ความสัมพันธ์ ผู้ติดต่อฉุกเฉิน',
        'married.required_if'=>'กรุณาระบุ รายได้คู่สมรส',
        'national_format_due.required_if'=>'กรุณาระบุ กำหนดการเกณฑ์ทหาร',
        'national_format_ref.required_if'=>'กรุณาระบุ เหตุผลได้รับการยกเว้น',
        'contagious_format_explain.required_if'=>'กรุณาระบุ อาการป่วยหนักและเป็นโรคติดต่อร้าย',
        'law_format_explain.required_if'=>'กรุณาระบุ คดีความถูกฟ้องร้องต่อศาล และหรืออยู่ในระหว่างพิจารณาคดี',
        'law2_format_explain.required_if'=>'กรุณาระบุ ต้องโทษคดีอาญาหรือคดีแพ่ง',
        'intv_format_when.required_if'=>'กรุณาระบุ สัมภาษณ์งานกับบริษัทนี้มาก่อน',
        'startwk.required'=>'กรุณาระบุ วันเริ่มงาน',
        'agg_data.required'=>'กรุณายอมรับ เงื่อนไข',
      ];
    }
}

<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Model\Form\form;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\form as vdfm;
use App\Http\Requests\update_form;
use App\Model\Form\form_fam;
use App\Model\Form\form_bro_sis;
use App\Model\Form\form_edu;
use App\Model\Form\form_lang;
use App\Model\Form\form_his_job;
use App\Model\Form\form_trn;
use App\Model\Form\form_positsl;
use App\Model\Form\form_file;
use App\Model\Masterdata\form_nation;
use App\Model\Masterdata\form_posit;
use App\Model\Masterdata\form_provin;
use App\Model\Masterdata\form_race;
use App\Model\Masterdata\form_relig;
use App\Model\Masterdata\master_lang;
use App\Model\Masterdata\master_mstatus;
use App\Model\Masterdata\master_edu;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\notiresume;
use App\Model\Masterdata\emailnoti;

class eform extends Controller
{

  protected function field_form(Request $request)
  {
    $age=Carbon::parse($request->birthdate)->year;
    $now=Carbon::now()->year;
    return [
      "etc_posit"=>$request->etc_posit,
      "titlename"=>$request->titlename,
      "name"=>$request->name.' '.$request->surname,
      "nameeng"=>$request->nameeng.' '.$request->surnameeng,
      "weight"=>$request->weight,
      "height"=>$request->height,
      "address_mas"=>$request->address_mas,
      "address"=>$request->address,
      "telephone"=>$request->telephone,
      "mobile"=>$request->mobile,
      "email"=>$request->email,
      "provb_id"=>$request->provb,
      "birthdate"=>$request->birthdate,
      "natc_id"=>$request->natc,
      "race_id"=>$request->race,
      "reli_id"=>$request->reli,
      "code_card"=>$request->code_card,
      "issued_at"=>$request->issued_at,
      "issuedate"=>$request->issuedate,
      "status"=>$request->status,
      "fam_name"=>$request->fam_name.' '.$request->fam_surname,
      "fam_age"=>$request->fam_age,
      "fam_posit"=>$request->fam_posit,
      "f_name"=>$request->f_name.' '.$request->f_surname,
      "f_age"=>$request->f_age,
      "f_posit"=>$request->f_posit,
      "f_address"=>$request->f_address,
      "f_phone"=>$request->f_phone,
      "m_name"=>$request->m_name.' '.$request->m_surname,
      "m_age"=>$request->m_age,
      "m_posit"=>$request->m_posit,
      "m_address"=>$request->m_address,
      "m_phone"=>$request->m_phone,
      "national_format"=>$request->national_format,
      "national_format_due"=>$request->national_format_due,
      "national_format_ref"=>$request->national_format_ref,
      "lang_etc"=>$request->lang_etc,
      "abi_com"=>$request->abi_com,
      "abi_any"=>$request->abi_any,
      "drivli"=>$request->drivli,
      "moto"=>$request->moto,
      "caru"=>$request->caru,
      "motou"=>$request->motou,
      "freetm"=>$request->freetm,
      "frncm"=>$request->frncm,
      "contagious_format"=>$request->contagious_format,
      "contagious_format_explain"=>$request->contagious_format_explain,
      "law_format"=>$request->law_format,
      "law_format_explain"=>$request->law_format_explain,
      "law2_format"=>$request->law2_format,
      "law2_format_explain"=>$request->law2_format_explain,
      "agb"=>$request->agb,
      "intv_format"=>$request->intv_format,
      "intv_format_when"=>$request->intv_format_when,
      "emrcon_name"=>$request->emrcon_name,
      "emrcon_address"=>$request->emrcon_address,
      "emrcon_tel"=>$request->emrcon_tel,
      "emrcon_rel"=>$request->emrcon_rel,
      "friends_format"=>$request->friends_format,
      "fcn"=>$request->fcn,
      "fcn2"=>$request->fcn2,
      "startwk"=>$request->startwk,
      "intf"=>$request->intf,
      "agg_data"=>$request->agg_data,
      "job_status"=>(isset($request->hco_status))?$request->hco_status:null,
      'age'=>$now-$age,
    ];
  }

  protected function field_update_form(Request $request)
  {
    $age=Carbon::parse($request->birthdate)->year;
    $now=Carbon::now()->year;
    return [
      "etc_posit"=>$request->etc_posit,
      "titlename"=>$request->titlename,
      "name"=>$request->name.' '.$request->surname,
      "nameeng"=>$request->nameeng.' '.$request->surnameeng,
      "weight"=>$request->weight,
      "height"=>$request->height,
      "address_mas"=>$request->address_mas,
      "address"=>$request->address,
      "telephone"=>$request->telephone,
      "mobile"=>$request->mobile,
      "email"=>$request->email,
      "provb_id"=>$request->provb,
      "birthdate"=>$request->birthdate,
      "natc_id"=>$request->natc,
      "race_id"=>$request->race,
      "reli_id"=>$request->reli,
      "issued_at"=>$request->issued_at,
      "issuedate"=>$request->issuedate,
      "status"=>$request->status,
      "fam_name"=>$request->fam_name.' '.$request->fam_surname,
      "fam_age"=>$request->fam_age,
      "fam_posit"=>$request->fam_posit,
      "f_name"=>$request->f_name.' '.$request->f_surname,
      "f_age"=>$request->f_age,
      "f_posit"=>$request->f_posit,
      "f_address"=>$request->f_address,
      "f_phone"=>$request->f_phone,
      "m_name"=>$request->m_name.' '.$request->m_surname,
      "m_age"=>$request->m_age,
      "m_posit"=>$request->m_posit,
      "m_address"=>$request->m_address,
      "m_phone"=>$request->m_phone,
      "national_format"=>$request->national_format,
      "national_format_due"=>$request->national_format_due,
      "national_format_ref"=>$request->national_format_ref,
      "lang_etc"=>$request->lang_etc,
      "abi_com"=>$request->abi_com,
      "abi_any"=>$request->abi_any,
      "drivli"=>$request->drivli,
      "moto"=>$request->moto,
      "caru"=>$request->caru,
      "motou"=>$request->motou,
      "freetm"=>$request->freetm,
      "frncm"=>$request->frncm,
      "contagious_format"=>$request->contagious_format,
      "contagious_format_explain"=>$request->contagious_format_explain,
      "law_format"=>$request->law_format,
      "law_format_explain"=>$request->law_format_explain,
      "law2_format"=>$request->law2_format,
      "law2_format_explain"=>$request->law2_format_explain,
      "agb"=>$request->agb,
      "intv_format"=>$request->intv_format,
      "intv_format_when"=>$request->intv_format_when,
      "emrcon_name"=>$request->emrcon_name,
      "emrcon_address"=>$request->emrcon_address,
      "emrcon_tel"=>$request->emrcon_tel,
      "emrcon_rel"=>$request->emrcon_rel,
      "friends_format"=>$request->friends_format,
      "fcn"=>$request->fcn,
      "fcn2"=>$request->fcn2,
      "startwk"=>$request->startwk,
      "intf"=>$request->intf,
      "agg_data"=>$request->agg_data,
      "job_status"=>(isset($request->hco_status))?$request->hco_status:null,
      'age'=>$now-$age,
    ];
  }

  protected function field_fam(Request $request,form $form_id,$update=0){
    if ($update) {
      form_fam::where('form_id',$form_id->id)->delete();
    }
    foreach ($request->child as $key => $value) {
      form_fam::create([
        'form_id'=>$form_id->id,
        'no'=>$key,
        'name'=>$value['name'].' '.$value['surname'],
        'age'=>$value['age'],
        'op'=>$value['op'],
      ]);
    }
  }

  protected function field_brosis(Request $request,form $form_id,$update=0){
    if ($update) {
      form_bro_sis::where('form_id',$form_id->id)->delete();
    }
    foreach ($request->brasis as $key => $value) {
      form_bro_sis::create([
        'form_id'=>$form_id->id,
        'no'=>$key,
        'name'=>$value['name'].' '.$value['surname'],
        'age'=>$value['age'],
        'op'=>$value['op'],
        'ao'=>$value['ao'],
        'tel'=>$value['tel'],
      ]);
    }
  }

  protected function field_edu(Request $request,form $form_id,$update=0){
    if ($update) {
      form_edu::where('form_id',$form_id->id)->delete();
    }
    foreach ($request->uni as $key => $value) {
      form_edu::create([
        'form_id'=>$form_id->id,
        'no'=>$key,
        'edu_id'=>$value['typeuni'],
        'name'=>$value['name'],
        'locat'=>$value['locat'],
        'startdate'=>$value['startdate'],
        'enddate'=>$value['enddate'],
        'ccd'=>$value['cdd'],
        'gpa'=>$value['gpa'],
        'ms'=>$value['ms'],
      ]);
    }
  }

  protected function field_trn(Request $request,form $form_id,$update=0){
    if ($update) {
      form_trn::where('form_id',$form_id->id)->delete();
    }
    foreach ($request->trn as $key => $value) {
      form_trn::create([
        'form_id'=>$form_id->id,
        'no'=>$key,
        'name'=>$value['name'],
        'ins'=>$value['ins'],
        'cr'=>$value['cr'],
        'dr'=>$value['dr'],
      ]);
    }
  }

  protected function field_lang(Request $request,form $form_id,$update=0){
    if ($update) {
      form_lang::where('form_id',$form_id->id)->delete();
    }
    foreach ($request->lang1 as $key => $value) {
      foreach ($value as $key2 => $value2) {
        form_lang::create([
          'form_id'=>$form_id->id,
          'lang_id'=>$key,
          'type'=>$key2,
          'score'=>$value2,
        ]);
      }
    }
  }

  protected function field_hisjob(Request $request,form $form_id,$update=0){
    if ($update) {
      form_his_job::where('form_id',$form_id->id)->delete();
    }
    form_his_job::create([
      'form_id'=>$form_id->id,
      'no'=>0,
      'type'=>1,
      'name'=>$request->hco_name,
      'address'=>$request->hco_address,
      'strdate'=>$request->hco_strdate,
      'enddate'=>$request->hco_enddate,
      'posit'=>$request->hco_posit,
      'respon'=>$request->hco_respon,
      'ref'=>$request->hco_ref,
      'rel'=>$request->hco_rel,
      'tel'=>$request->hco_tel,
      'resign'=>$request->hco_resign,
    ]);
    foreach ($request->his as $key => $value) {
        form_his_job::create([
          'form_id'=>$form_id->id,
          'no'=>$key,
          'type'=>2,
          'name'=>$value['name'],
          'address'=>$value['address'],
          'strdate'=>$value['strdate'],
          'enddate'=>$value['enddate'],
          'posit'=>$value['posit'],
          'respon'=>$value['respon'],
          'ref'=>$value['ref'],
          'rel'=>$value['rel'],
          'tel'=>$value['tel'],
        ]);
    }
  }

  public function field_positsl(Request $request,form $form_id,$update=0)
  {
    if ($update) {
      form_positsl::where('form_id',$form_id->id)->delete();
    }
    foreach($request->posit as $key=>$value){
      form_positsl::create([
      'form_id'=>$form_id->id,
      'posit_id'=>$value,
      'no'=>$key]);
    }
  }

  public function field_file(Request $request,form $form_id,$update=0)
  {
    if ($request->hasFile('attachment_f1')) {
      if ($update) {
        form_file::where(['form_id'=>$form_id->id,'type'=>1,'no'=>1])->tap(function($value){
          if (!is_null($value->first())) {
            if (Storage::exists('attach/'.$value->first()->temp)) {
              Storage::delete('attach/'.$value->first()->temp);
            }
          }
        })->delete();
      }
      $f1=form_file::create([
      'form_id'=>$form_id->id,
      'no'=>1,
      'type'=>1,
      'name'=>$request->attachment_f1->getClientOriginalName(),
      'temp'=>$request->attachment_f1->hashName()
    ]);
    $request->attachment_f1->storeAs('attach',$f1->temp);
    }
    if ($request->hasFile('attachment_f2')) {
      if ($update) {
        form_file::where(['form_id'=>$form_id->id,'type'=>1,'no'=>2])->tap(function($value){
          if (!is_null($value->first())) {
          if (Storage::exists('attach/'.$value->first()->temp)) {
            Storage::delete('attach/'.$value->first()->temp);
          }
        }
        })->delete();
      }
      $f2=form_file::create([
      'form_id'=>$form_id->id,
      'no'=>2,
      'type'=>1,
      'name'=>$request->attachment_f2->getClientOriginalName(),
      'temp'=>$request->attachment_f2->hashName()
    ]);
    $request->attachment_f2->storeAs('attach',$f2->temp);
    }
    if ($request->hasFile('attachment_pic')) {
      if ($update) {
        form_file::where(['form_id'=>$form_id->id,'type'=>2,'no'=>1])->tap(function($value){
          if (!is_null($value->first())) {
          if (Storage::exists('attach/'.$value->first()->temp)) {
            Storage::delete('attach/'.$value->first()->temp);
          }
        }
        })->delete();
      }
      $f3=form_file::create([
        'form_id'=>$form_id->id,
        'no'=>1,
        'type'=>2,
        'name'=>$request->attachment_pic->getClientOriginalName(),
        'temp'=>$request->attachment_pic->hashName()
      ]);
      $request->attachment_pic->storeAs('attach',$f3->temp);
    }
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return redirect()->route('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(vdfm $request)
    {
      $this->middleware('check_edit');
      $data=form::create($this->field_form($request));
      $this->field_fam($request,$data);
      $this->field_brosis($request,$data);
      $this->field_edu($request,$data);
      $this->field_trn($request,$data);
      $this->field_lang($request,$data);
      $this->field_hisjob($request,$data);
      $this->field_positsl($request,$data);
      $this->field_file($request,$data);
      $request->user()->update([
        'status_fm'=>'SF'
      ]);
       Mail::to(emailnoti::first())->send(new notiresume($data));
      return redirect()->route('eform.edit',['eform'=>$data->id])->with('success','Resume Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Form\form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(form $form)
    {
        return redirect()->route('index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Form\form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(form $eform)
    {
      $this->authorize('update', $eform);
      $data=$eform->load([
        'getChildens'=>function($value){
          $value->orderBy('no','asc');
        },'getPositions'=>function($value){
          $value->orderBy('no','asc');
        },'getBroSis'=>function($value){
          $value->orderBy('no','asc');
        },'getEdu'=>function($value){
          $value->orderBy('no','asc');
        },'getTrn'=>function($value){
          $value->orderBy('no','asc');
        },'getHisJob'=>function($value){
          $value->orderBy('no','asc');
        },'getFile'=>function($value){
          $value->orderBy('no','asc');
        },'getLang'
      ]);
        return view('edit',[
          'data'=>$data,
          'form_mstatus'=>master_mstatus::all(),
          'form_nation'=>form_nation::all(),
          'form_posit'=>form_posit::all(),
          'form_provin'=>form_provin::all(),
          'form_race'=>form_race::all(),
          'form_relig'=>form_relig::all(),
          'form_lang'=>master_lang::all(),
          'master_edu'=>master_edu::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Form\form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(update_form $request, form $eform)
    {
      $this->authorize('update', $eform);
      $eform->update($this->field_update_form($request));
      $this->field_update_form($request,$eform);
      $this->field_brosis($request,$eform,1);
      $this->field_edu($request,$eform,1);
      $this->field_trn($request,$eform,1);
      $this->field_lang($request,$eform,1);
      $this->field_hisjob($request,$eform,1);
      $this->field_positsl($request,$eform,1);
      $this->field_file($request,$eform,1);
      Mail::to(emailnoti::first())->send(new notiresume($eform));
      return redirect()->route('eform.edit',['eform'=>$eform->id])->with('success','Resume Saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Form\form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(form $form)
    {
        return redirect()->route('index');
    }

    public function downloaddoc($fnm)
    {
      return response(Storage::get('attach/'.$fnm))->header('Content-Type', Storage::mimeType('attach/'.$fnm));
    }
}

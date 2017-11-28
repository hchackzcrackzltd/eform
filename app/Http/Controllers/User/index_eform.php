<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Masterdata\form_nation;
use App\Model\Masterdata\form_posit;
use App\Model\Masterdata\form_provin;
use App\Model\Masterdata\form_race;
use App\Model\Masterdata\form_relig;
use App\Model\Masterdata\master_lang;
use App\Model\Masterdata\master_mstatus;
use App\Model\Masterdata\master_edu;

class index_eform extends Controller
{
  public function index()
  {
    return view('index',[
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

  public function preview(Request $req)
  {
    $this->validate($req,[
      'data'=>'required|string'
    ]);
    mb_parse_str(base64_decode($req->data),$data);
    return view('preview',[
      'data'=>$data,
      'img1'=>$req->img1,
      'master_titlename'=>['นาย','นาง','นางสาว'],
      'master_titlenameeng'=>['Mr.','Mrs.','Miss.'],
      'master_mlitary'=>[1=>'เกณฑ์แล้ว Yes',2=>'ยังไม่เกณฑ์ No',3=>'ได้รับการยกเว้นเพราะ If exempted specify reason'],
      'master_lang'=>['ไม่ได้ Poor','พอใช้  Fair','ดี  Good','ดีมาก Excellent'],
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
}

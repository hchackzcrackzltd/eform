<?php

namespace App\Http\Controllers\Admin\Candidate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\adduser;
use App\Http\Requests\edituser;
use App\User;
use App\AdminUser;
use App\Model\View\forms_view;
use Illuminate\Support\Facades\Storage;
use App\Model\Masterdata\form_nation;
use App\Model\Masterdata\form_posit;
use App\Model\Masterdata\form_provin;
use App\Model\Masterdata\form_race;
use App\Model\Masterdata\form_relig;
use App\Model\Masterdata\master_lang;
use App\Model\Masterdata\master_mstatus;
use App\Model\Masterdata\master_edu;

class candidateControll extends Controller
{
    public function index()
    {
      return view('admin.candidate.index',['user_mem'=>User::with('getStatustxt')->get()]);
    }

    public function create()
    {
      return view('admin.candidate.add');
    }

    public function store(adduser $req)
    {
      User::create([
        'name'=>$req->fn.' '.$req->ln,
        'email'=>$req->em,
        'password'=>bcrypt($req->ic),
        'username'=>$req->ic,
        'status_fm'=>'PF',
      ]);
      return redirect()->route('candidate_admin')->with('suc','Candidate Added');
    }

    public function destroy(User $usr)
    {
      $usr->delete();
      return redirect()->route('candidate_admin')->with('suc','Candidate Deleted');
    }

    public function update(Request $req,User $usr)
    {
      $this->validate($req,[
        'status'=>'required|string|exists:statuses,id'
      ]);
      $usr->update([
        'status_fm'=>$req->status
      ]);
      return redirect()->route('candidate_admin')->with('suc','Candidate Updated');
    }

    public function edit(User $usr)
    {
      return view('admin.candidate.edit',['data'=>$usr]);
    }

    public function update_edit(edituser $req,User $usr)
    {
      $usr->update([
        'name'=>$req->fn.' '.$req->ln,
        'email'=>$req->em,
        'iq'=>$req->iq,
        'eq'=>$req->eq,
        'mbti'=>$req->mbti,
      ]);
      return redirect()->route('candidate_admin')->with('suc','Candidate Updated');
    }

    public function show(forms_view $id)
    {
      return view('previewdb',['data'=>$id->load(['getChildens','getPositions',
      'getBroSis','getEdu','getTrn','getHisJob','getFile','getLang']),
      'master_titlename'=>['นาย','นาง','นางสาว'],
      'master_titlenameeng'=>['Mr.','Mrs.','Miss.'],
      'master_mlitary'=>[1=>'เกณฑ์แล้ว Yes',2=>'ยังไม่เกณฑ์ No',3=>'ได้รับการยกเว้นเพราะ If exempted specify reason'],
      'master_lang'=>['ไม่ได้เลย Poor','พอใช้  Fair','ดี  Good','ดีมาก Excellent'],
      'form_mstatus'=>master_mstatus::all(),
      'form_nation'=>form_nation::withTrashed()->get(),
      'form_posit'=>form_posit::withTrashed()->get(),
      'form_provin'=>form_provin::withTrashed()->get(),
      'form_race'=>form_race::withTrashed()->get(),
      'form_relig'=>form_relig::withTrashed()->get(),
      'form_lang'=>master_lang::withTrashed()->get(),
      'master_edu'=>master_edu::withTrashed()->get()
    ]);
    }

    public function downloaddoc($fnm)
    {
      return response(Storage::get('attach/'.$fnm))->header('Content-Type', Storage::mimeType('attach/'.$fnm));
    }
}

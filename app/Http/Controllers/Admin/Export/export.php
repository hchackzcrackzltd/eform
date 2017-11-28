<?php

namespace App\Http\Controllers\Admin\Export;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\View\forms_view;
use App\Model\Masterdata\form_posit;
use App\Model\Masterdata\form_nation;
use App\Model\Masterdata\form_provin;
use App\Model\Masterdata\form_race;
use App\Model\Masterdata\form_relig;
use App\Model\Masterdata\master_edu;
use App\Model\Masterdata\master_lang;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Chumper\Zipper\Facades\Zipper;

class export extends Controller
{
    public function index()
    {
      return view('admin.export.index',['data'=>forms_view::where('status_fm','CF')->get()]);
    }

    public function store(Request $req)
    {
      $this->validate($req,[
        'item'=>'required|array',
        'item.*'=>'required|exists:forms_views,id'
      ],[
        'item.required'=>'Plase Select Item',
        'item.exists'=>'Plase Select Item',
      ]);
      $flodername=Carbon::now()->format('dmyhis');
      Storage::makeDirectory('exports/'.$flodername);
      Excel::create('export', function($excel) use ($req,$flodername) {
        $data=forms_view::find($req->item);
        $excel->sheet('main', function($sheet) use ($data) {
            $sheet->fromArray($data->toArray());
        });
        $excel->sheet('childens', function($sheet) use ($data) {
          foreach ($data->load(['getChildens'=>function($value)
          {
            $value->withTrashed();
          }]) as $value) {
            foreach ($value->getchildens->toArray() as $value1) {
              $mixar[]=$value1;
            }
          }
            $sheet->fromArray($mixar);
        });
        $excel->sheet('positions', function($sheet) use ($data) {
          foreach ($data->load(['getPositions'=>function($value)
          {
            $value->withTrashed();
          }]) as $value) {
            foreach ($value->getpositions->toArray() as $value1) {
              $mixar[]=$value1;
            }
          }
            $sheet->fromArray($mixar);
        });
        $excel->sheet('brosis', function($sheet) use ($data) {
          foreach ($data->load(['getBroSis'=>function($value)
          {
            $value->withTrashed();
          }]) as $value) {
            foreach ($value->getbrosis->toArray() as $value1) {
              $mixar[]=$value1;
            }
          }
            $sheet->fromArray($mixar);
        });
        $excel->sheet('edu', function($sheet) use ($data) {
          foreach ($data->load(['getEdu'=>function($value)
          {
            $value->withTrashed();
          }]) as $value) {
            foreach ($value->getedu->toArray() as $value1) {
              $mixar[]=$value1;
            }
          }
            $sheet->fromArray($mixar);
        });
        $excel->sheet('hisjob', function($sheet) use ($data) {
          foreach ($data->load(['getHisJob'=>function($value)
          {
            $value->withTrashed();
          }]) as $value) {
            foreach ($value->gethisjob->toArray() as $value1) {
              $mixar[]=$value1;
            }
          }
            $sheet->fromArray($mixar);
        });
        $excel->sheet('lang', function($sheet) use ($data) {
          foreach ($data->load(['getLang'=>function($value)
          {
            $value->withTrashed();
          }]) as $value) {
            foreach ($value->getlang->toArray() as $value1) {
              $mixar[]=$value1;
            }
          }
            $sheet->fromArray($mixar);
        });
        $excel->sheet('trn', function($sheet) use ($data) {
          foreach ($data->load(['getTrn'=>function($value)
          {
            $value->withTrashed();
          }]) as $value) {
            foreach ($value->gettrn->toArray() as $value1) {
              $mixar[]=$value1;
            }
          }
            $sheet->fromArray($mixar);
        });
          $excel->sheet('file', function($sheet) use ($data,$flodername) {
            $mixar=[];
            foreach ($data->load(['getFile'=>function($value)
            {
              $value->withTrashed();
            }]) as $value) {
              if ($value->getfile->count()>0) {
                foreach ($value->getfile->toArray() as $value1) {
                  $mixar[]=$value1;
                }
                foreach ($value->getfile as $valuef) {
                  Storage::copy('attach/'.$valuef->temp,'exports/'.$flodername.'/'.$valuef->temp);
                }
              }
            }
              $sheet->fromArray($mixar);
          });
          $excel->sheet('posit_master', function($sheet) {
            $sheet->fromModel(form_posit::withTrashed()->get());
          });
          $excel->sheet('educat_master', function($sheet) {
            $sheet->fromModel(master_edu::withTrashed()->get());
          });
          $excel->sheet('lang_master', function($sheet) {
            $sheet->fromModel(master_lang::withTrashed()->get());
          });
          $excel->sheet('religion_master', function($sheet) {
            $sheet->fromModel(form_relig::withTrashed()->get());
          });
          $excel->sheet('race_master', function($sheet) {
            $sheet->fromModel(form_race::withTrashed()->get());
          });
          $excel->sheet('provin_master', function($sheet) {
            $sheet->fromModel(form_provin::withTrashed()->get());
          });
          $excel->sheet('nation_master', function($sheet) {
            $sheet->fromModel(form_nation::withTrashed()->get());
          });
      })->store('xlsx',storage_path('app/exports/'.$flodername));
      Zipper::make(storage_path('app/exports/'.$flodername.'.zip'))->add(storage_path('app/exports/'.$flodername))->close();
      Storage::deleteDirectory('exports/'.$flodername);
      return response()->download(storage_path('app/exports/'.$flodername.'.zip'))->deleteFileAfterSend(true);
    }
}

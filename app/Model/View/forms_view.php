<?php

namespace App\Model\View;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class forms_view extends Model
{
    use SoftDeletes;

    public function getChildens()
    {
      return $this->hasMany('App\Model\Form\form_fam','form_id','id_form');
    }

    public function getPositions()
    {
      return $this->hasMany('App\Model\Form\form_positsl','form_id','id_form');
    }

    public function getBroSis()
    {
      return $this->hasMany('App\Model\Form\form_bro_sis','form_id','id_form');
    }

    public function getEdu()
    {
      return $this->hasMany('App\Model\Form\form_edu','form_id','id_form');
    }

    public function getTrn()
    {
      return $this->hasMany('App\Model\Form\form_trn','form_id','id_form');
    }

    public function getHisJob()
    {
      return $this->hasMany('App\Model\Form\form_his_job','form_id','id_form');
    }

    public function getFile()
    {
      return $this->hasMany('App\Model\Form\form_file','form_id','id_form');
    }

    public function getLang()
    {
      return $this->hasMany('App\Model\Form\form_lang','form_id','id_form');
    }
}

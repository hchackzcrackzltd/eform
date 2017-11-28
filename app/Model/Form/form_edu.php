<?php

namespace App\Model\Form;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class form_edu extends Model
{
    use SoftDeletes;
    protected $dates=['deleted_at'];
    protected $fillable=[
      'form_id',
      'no',
      'edu_id',
      'name',
      'locat',
      'startdate',
      'enddate',
      'ccd',
      'gpa',
      'ms'
    ];
}

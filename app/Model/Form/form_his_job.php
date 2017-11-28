<?php

namespace App\Model\Form;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class form_his_job extends Model
{
    use SoftDeletes;
    protected $dates=['deleted_at'];
    protected $fillable=[
      'form_id',
      'no',
      'type',
      'name',
      'address',
      'strdate',
      'enddate',
      'posit',
      'respon',
      'ref',
      'rel',
      'tel',
      'resign',
    ];
}

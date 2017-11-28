<?php

namespace App\Model\Form;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class form_positsl extends Model
{
  use SoftDeletes;
  protected $dates=['deleted_at'];
  protected $fillable=[
    'form_id',
    'posit_id',
    'no',
  ];
}

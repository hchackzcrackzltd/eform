<?php

namespace App\Model\Masterdata;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class form_race extends Model
{
  use SoftDeletes;
  protected $dates=['deleted_at'];
    protected $fillable=['name'];
}

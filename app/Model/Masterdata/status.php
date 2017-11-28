<?php

namespace App\Model\Masterdata;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    public $timestamps=false;
    protected $fillable=['id','descript'];
}

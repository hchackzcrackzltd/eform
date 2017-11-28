<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminUser extends Authenticatable
{
  use SoftDeletes;

  protected $fillable = [
      'name', 'password','username',
  ];

  protected $hidden = [
      'password', 'remember_token',
  ];
}

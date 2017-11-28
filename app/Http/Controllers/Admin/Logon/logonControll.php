<?php

namespace App\Http\Controllers\Admin\Logon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class logonControll extends Controller
{
    public function index()
    {
      return view('admin.logon.login');
    }
}

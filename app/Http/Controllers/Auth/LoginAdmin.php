<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginAdmin extends Controller
{
  use AuthenticatesUsers;

  protected $redirectTo = '/manage/candidate';

  protected function authenticated(Request $request, $user)
    {
        return redirect()->route('candidate_admin');
    }

  public function __construct()
  {
      $this->middleware('auth_admin')->except('logout');
  }

  public function username()
  {
    return 'username';
  }

  protected function guard()
    {
        return Auth::guard('admin');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect()->route('login_admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.logon.login');
    }
}

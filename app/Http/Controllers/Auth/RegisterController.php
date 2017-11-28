<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first' => 'required|string|max:255',
            'last' => 'required|string|max:255',
            'username'=>'required|string|max:255|unique:users,username|regex:/[0-9]-[0-9][0-9][0-9][0-9]-[0-9][0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9]/',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:13|confirmed',
        ],[
          'first.required'=>'Please Insert First Name',
          'last.required'=>'Please Insert Last Name',
          'username.required'=>'Please Insert ID Card',
          'username.unique'=>'This ID Card Exist',
          'username.regex'=>'Please Check Your ID Card',
          'email.required'=>'Please Insert E-Mail',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['first'].' '.$data['last'],
            'username'=>$data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'status_fm'=>'PF',
        ]);
    }

    public function showRegistrationForm()
    {
      return view('auth.register_new');
    }
}

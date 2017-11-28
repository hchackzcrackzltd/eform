<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addmember extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fn'=>'required|string|regex:/[a-zA-Zก-๙]/',
            'ln'=>'required|string|regex:/[a-zA-Zก-๙]/',
            'un'=>'required|string|unique:admin_users,username',
            'password'=>'required|min:8|confirmed',
            'password_confirmation'=>'required|min:8'
        ];
    }

    public function messages()
    {
      return [
        'fn.required'=>'Please Insert First Name',
        'fn.string'=>'Please Insert First Name',
        'fn.regex'=>'Please Insert First Name',
        'ln.required'=>'Please Insert Last Name',
        'ln.string'=>'Please Insert Last Name',
        'ln.regex'=>'Please Insert Last Name',
        'un.required'=>'Please Insert UserName',
        'un.string'=>'Please Insert UserName',
        'un.unique'=>'UserName Exists',
        'password.required'=>'Please Insert Password',
        'password.min'=>'Please Insert Password More Then 8 Charactor',
        'password_confirmation.required'=>'Please Insert Confirm Password ',
        'password_confirmation.min'=>'Please Insert Password More Then 8 Charactor',
        'password_confirmation.confirmed'=>'Password Not Matching',
      ];
    }
}

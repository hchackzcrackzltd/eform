<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editmember extends FormRequest
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
        'password.required'=>'Please Insert Password',
        'password.min'=>'Please Insert Password More Then 8 Charactor',
        'password_confirmation.required'=>'Please Insert Confirm Password ',
        'password_confirmation.min'=>'Please Insert Password More Then 8 Charactor',
        'password_confirmation.confirmed'=>'Password Not Matching',
      ];
    }
}

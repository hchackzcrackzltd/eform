<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class edituser extends FormRequest
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
            'em'=>'required|email',
            'iq'=>'nullable|numeric',
            'eq'=>'nullable|numeric',
            'mbti'=>'nullable|string',
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
        'em.required'=>'Please Insert E-Mail',
        'em.email'=>'Please Insert E-Mail',
        'iq.numeric'=>'Please Insert Number Only',
        'eq.numeric'=>'Please Insert Number Only',
      ];
    }
}

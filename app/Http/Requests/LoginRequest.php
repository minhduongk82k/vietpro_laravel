<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            "email"=>"required|email",
            "password"=>"required|min:3|max:6",
        ];
    }
    public function messages()
    {
        return [
            "email.required"=>"Email không được để trống! ",
            "email.email"=>"Email không hợp lệ! ",
            "password.required"=>"Password không được để trống! ",
            "password.min"=>"Password phải nhiều hơn 3 kí tự ! ",
            "password.max"=>"Password tối đa 6 kí tự ! ",
        ];
    }
}

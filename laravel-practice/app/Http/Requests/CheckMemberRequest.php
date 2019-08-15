<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckMemberRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email',
            'tel'=>'required|numeric'
        ];
    }

    public function messages() {
        return [
            "required" => "入力必須です",
            "email"    => "emailの形式で入力して下さい",
            "numeric"  => "半角英数字のみご利用いただけます"
        ];
    }
}

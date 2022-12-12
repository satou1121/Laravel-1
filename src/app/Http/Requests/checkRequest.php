<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class checkRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required',
            'name_kana'=> ['required', new \App\Rules\ValidationKatakana],
            'mailaddress'=>'required|email',
            'phonenumber'=>'required|numeric',
            'inquiry'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'mailaddress.email'=>'正しいメールアドレスを入力してください',
            'phonenumber.numeric'=>'正しい電話番号電話番号を入力してください',
            'name.required'=>'名前が入力されていません',
            'name_kana.required'=>'名前(カタカナ)が入力されていません',
            'mailaddress.required'=>'メールアドレスが入力されていません',
            'phonenumber.required'=>'電話番号が入力されていません',
            'inquiry.required'=>'問い合わせを記入してください',
        ];
    }
}

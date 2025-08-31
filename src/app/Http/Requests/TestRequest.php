<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'numeric', 'digits_between:1,3'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel' => ['required', 'numeric', 'digits_between:1,5'],
            'address' => ['required', 'string', 'max:255'],
            'building' => ['string', 'max:255'],
            'category' => ['required', 'digits_between:1,5'],
            'detail' => ['required', 'string', 'max:255'],

        ];

        public function messages()
        {
            return [
                'last_name.required' => '姓を入力してください',
                'first_name.required' => '名を入力してください',
                'gender.digits_between' => '性別を選択してください',
                'email.required' => 'メールアドレスを入力してください',
                'email.email' => 'メールアドレスはメール形式で入力してください',
                'tel.string' => '電話番号を入力してください',
                'tel.digits_between' => '電話番号は５桁までの数字で入力してください',
                'address.required' => '住所を入力してください',
                'category.required' => 'お問い合わせの種類を選択してください',
                'detail.required' => 'お問い合わせ内容を入力してください',
                'detail.max' => 'お問い合わせ内容は120文字以内で入力してください',

            ];
        }
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'hello')
        {
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    // public function rules()
    // {
    //     return [
    //         'name' => 'required',
    //         'mail' => 'email',
    //         'age' => 'numeric|between:0,150',
    //     ];
    // }
    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'email',
            //validateHelloメソッドのルール（hello）を組み込みp155
            'age' => 'numeric|hello',
        ];
    }
// メッセージのカスタマイズ（FormRequestのオーバーライド）p143
    // public function messages()
    // {
    //     return[
    //         'name.required' => '名前は必ず入力してください。',
    //         'mail.email' => 'メールアドレスが必要です。',
    //         'age.numeric' => '年齢を整数で記入してください',
    //         'age.between' => '年齢は0~150の間で入力してください。',
    //     ];
    // }
    public function messages()
    {
        return[
            'name.required' => '名前は必ず入力してください。',
            'mail.email' => 'メールアドレスが必要です。',
            'age.numeric' => '年齢を整数で記入してください',
            //validateHelloメソッドのルール（hello）を組み込みp155
            'age.hello' => 'Hello!入力は偶数のみ受け付けます。',
        ];
    }
}

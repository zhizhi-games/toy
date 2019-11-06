<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateAdmin extends FormRequest
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
            'id' => 'required|int|exists:admin',
            'passwordLod' => 'required|int|exists:admin',
            'password' => 'required|confirmed:password_confirmation',
            'password_confirmation' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'id.required' => '缺少参数！',
            'id.exists' => '参数错误！',
            'id.int' => '这不是一个有效的数值！',
            'passwordLod.required' => '缺少参数!',
            'password.required' => '缺少参数!',
            'password.password_confirmation' => '密码不一致!',
            'password_confirmation' => '缺少参数！'
        ];
    }
}

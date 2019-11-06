<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignAdminRole extends FormRequest
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
            'role_id' => 'required|array',
        ];
    }

    public function messages()
    {
        return [
            'id.required' => '缺少参数！',
            'id.exists' => '参数错误！',
            'id.int' => '这不是一个有效的数值！',
            'role_id.required' => '缺少参数!',
            'role_id.array' => '参数错误!'
        ];
    }
}

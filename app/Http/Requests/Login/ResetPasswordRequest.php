<?php

namespace App\Http\Requests\Login;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'password' => "required|confirmed",
            'password_confirmation' =>"required",  //|unique:table,column,except,id",
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'O campo senha é obrigatório!',
            'password_confirmation.required' => "O campo confirmar senha é obrigatório!"
        ];
    }
}

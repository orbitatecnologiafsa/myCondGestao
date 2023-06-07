<?php

namespace App\Http\Requests\Login;

use Illuminate\Foundation\Http\FormRequest;

class ResetEmailRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'email' => "required|email",  //|unique:table,column,except,id",
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'O campo email é obrigatório!',
            'email.email' => 'Informe um email valido!'
        ];
    }
}

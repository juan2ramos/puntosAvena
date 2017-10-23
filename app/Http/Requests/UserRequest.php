<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'password' => 'required|min:6',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Nombre requedido',
            'email.required'  => 'Email requerido',
            'email.email'  => 'Email invalido',
            'email.unique'  => 'El email esta en uso',
            'role.required'  => 'Rol requerido',
            'password.required'  => 'Contraseña requerido',
            'password.min'  => 'Contraseña debe tener mínimo 6 caracteres',
        ];
    }
}

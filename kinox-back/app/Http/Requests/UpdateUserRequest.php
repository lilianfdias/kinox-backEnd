<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array {
        return [
            'email'=> ['email'],
            'name'=> [],
            'password'=> ['min:6', 'regex:/[a-zA-Z0-9]/i'],
            'type'=>[]
        ];
    }

    public function messages(): array {
        return [
            'name.required' => 'Nome é obrigatório',
            'password.required' => 'Senha é obrigatória',
            'password.min' => 'Senha deve conter no mínimo 6 caracteres',
            'password.regex'=>'Senha deve conter no mínimo uma letra maiúscula, uma minúscula e um número',
            'email.required' => 'Email é obrigatório',
            'email.email' => 'Email deve ser um endereço válido',
            'type'=>'Tipo de usuário é obrigatório'
        ];
    }
}

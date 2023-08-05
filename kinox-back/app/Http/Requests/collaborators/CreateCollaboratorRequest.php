<?php

namespace App\Http\Requests\collaborators;

use Illuminate\Foundation\Http\FormRequest;

class CreateCollaboratorRequest extends FormRequest {
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
            'name'=>['required'],
            'role'=> ['required'],
            
        ];
    }

    public function messages(): array {
        return [
            'name.required' => 'Name é obrigatória',
            'role.required' => 'Função é obrigatório',
        ];
    }
}

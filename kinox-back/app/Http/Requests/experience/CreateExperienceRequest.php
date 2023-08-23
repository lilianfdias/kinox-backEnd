<?php

namespace App\Http\Requests\experience;

use Illuminate\Foundation\Http\FormRequest;

class CreateExperienceRequest extends FormRequest {
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
            'role'=> ['required'],
            'description'=> ['required'],
            'start_date'=> ['required'],
            'end_date'=>[]
        ];
    }

    public function messages(): array {
        return [
            'role.required' => 'Cargo é obrigatório',
            'description.required' => 'Descrição é obrigatória',
            'start_date.required' => 'Data de início é obrigatória',
        ];
    }
}

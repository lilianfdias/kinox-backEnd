<?php

namespace App\Http\Requests\curriculum;

use Illuminate\Foundation\Http\FormRequest;

class CreateCurriculumRequest extends FormRequest {
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
            'work-area'=> ['required'],
            'description'=> ['required'],
            'banner-image'=> [],
        ];
    }

    public function messages(): array {
        return [
            'work-area.required' => 'Área de atuação é obrigatório',
            'description.required' => 'Descrição é obrigatória',
        ];
    }
}

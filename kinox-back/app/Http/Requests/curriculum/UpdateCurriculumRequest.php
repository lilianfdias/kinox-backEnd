<?php

namespace App\Http\Requests\curriculum;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCurriculumRequest extends FormRequest {
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
            'work-area'=> [],
            'description'=> [],
            'banner-image'=> [],
            'revised'=>[]
        ];
    }

    public function messages(): array {
        return [
            
        ];
    }
}

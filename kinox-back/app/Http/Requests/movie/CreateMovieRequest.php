<?php

namespace App\Http\Requests\movie;

use Illuminate\Foundation\Http\FormRequest;

class CreateMovieRequest extends FormRequest {
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
            'title'=> ['required'],
            'description'=> [],
            'genre'=>['required'],
            'url'=>[],
            'ano'=>[]
        ];
    }

    public function messages(): array {
        return [
            'title.required' => 'Título é obrigatório',
            'director.required' => 'Diretor é obrigatório',
            'genre'=>'Escolha um gênero para o filme'
        ];
    }
}

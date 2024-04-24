<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LocaliteFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'arrondissement' => [
                'required',
                'string',
                'max: 255'
            ],
            'commune' => [
                'required',
                'string',
                'max: 255'
            ],
            'departement' => [
                'required',
                'string',
                'max: 255'
            ],
            'quartier' => [
                'required',
                'string',
                'max: 255'
            ]
            
        ];

        return $rules;
    }
}

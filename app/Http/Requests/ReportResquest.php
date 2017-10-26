<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportResquest extends FormRequest
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
            'point' => 'required',
            'date' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'point.required' => 'El punto es obligatorio',
            'date.required' => 'La fecha es obligatoria',
        ];

    }
}

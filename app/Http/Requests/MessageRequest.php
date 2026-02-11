<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
        return [
            'name' => 'required|min:2|alpha',
            'subject' => 'required|email|max:30',
            'text' => 'required|max:500',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'name.min' => 'Como mínimo debe contener 2 caracteres',
            'name.alpha' => 'El nombre solo puede contener letras',
            'email.required' => 'El email es obligatorio',
            'email.email' => 'El email debe tener el formato correcto',
            'email.max' => 'El email debe contener como máximo 30 caracteres',
            'content.required' => 'El mensaje debe contener algo',
            'content.max' => 'El tamaño máximo es de 500caracteres',
        ];
    }
}

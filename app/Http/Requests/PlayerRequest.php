<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRequest extends FormRequest
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
        return
        [
            'name' => 'required|alpha',
            'number' => 'required|numeric',
            'year' => 'required|numeric|min:15|max:100',
            'twitter' => 'alpha_num:ascii',
            'instagram' => 'alpha_num:ascii',
            'twitch' => 'alpha_num:ascii',
            'photo' => 'required|alpha_num:ascii',
            'visible' => 'boolean:strict'
        ];
    }
}

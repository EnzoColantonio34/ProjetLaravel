<?php

namespace App\Http\Requests\Back\Animal;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string|between:3,10|alpha',
            'image' => 'nullable|image|max:1024',
            'birthday' => 'required|date|date_format:Y-m-d|before:today'
        ];
    }
}
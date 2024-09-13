<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserUpdateRequest extends FormRequest
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
            "name" => ['sometimes', 'nullable', 'string', 'max:250'],
            "surname" => ['sometimes', 'nullable', 'string', 'max:250'],
            "username" => ['sometimes', 'nullable', 'string', 'max:250'],
            "address" => ['sometimes', 'nullable', 'string', 'max:250'],
            "company" => ['sometimes', 'nullable', 'string', 'max:250'],
            "website" => ['sometimes', 'nullable', 'string', 'max:250'],
            "phone" => ['sometimes', 'nullable', 'string', 'max:250'],
            "avatar" => ['sometimes', 'nullable', 'image', 'mimes:png,jpg,jpeg,bmp,gif', 'max:5120'],
            "password" => ['sometimes', 'nullable', Password::min(6)->numbers()->symbols()->letters()],
        ];
    }
}

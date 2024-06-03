<?php

namespace App\Http\Requests\Web\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' => ['required', 'min:3', 'max:255'],
            'email_register' => ['required', 'email', 'min:3', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'string', 'min:6', 'max:255'],
            'password_register' => ['required', 'string', 'min:6', 'max:255', 'confirmed'],
            'password_register_confirmation' => ['required', 'min:6', 'max:255'],
        ];
    }
}

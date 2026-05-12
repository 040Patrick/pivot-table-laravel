<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::default()]
        ];
    }

    public function messages()
    {
        return [
            // NAME 
            'name.required' => 'Field name is required',
            'name.string' => 'Field name needs to be a string',
            'name.max' => 'Field name is too long',
            'name.min' => 'Field name is too short',
            // EMAIL
            'email.required' => 'Field email is required',
            'email.email' => 'Email invalid format',
            'email.unique' => 'This email is already registered',
            // PASSWORD 
            'password.required' => 'Field password is required',
            'password.confirmed' => 'Passwords do not match',
        ];
    }
}

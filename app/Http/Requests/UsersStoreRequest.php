<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UsersStoreRequest extends FormRequest
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
            'name' => [
                'required',
                'string', // Prevents array-injection payloads
                'min:3',
                'max:50',
                'regex:/^[a-zA-Z\s\-\.\'\x{00c0}-\x{017f}]+$/u', // Correctly matches global names
            ],
            'email' => [
                'required',
                'unique:users',
                'string',
                'email:rfc', // Optional: Adds MX record check for real domains
            ],
            'password' => [
                'required',
                'string',
                'confirmed', // Requires a matching 'password_confirmation' field
                Password::min(7)
                    ->mixedCase()
                    ->symbols()
                    ->numbers(),
            ],
        ];
    }
}

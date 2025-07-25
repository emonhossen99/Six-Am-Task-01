<?php

namespace App\Http\Requests;

use Faker\Guesser\Name;
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
            'name'     => ['required','max:60'],
            'email'    => ['required','email','max:50','unique:users,email'],
            'password' => ['required','min:6','max:32','confirmed'],
        ];
    }
}

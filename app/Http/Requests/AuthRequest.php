<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'login'=>'required|unique:users,login|exists:usesr,login',
            'password'=>'required|min:6|accepted'
        ];
    }

    public function messages()
    {
        return [
            'login.required'=>'Login kiritiń!!!',
            'password.required'=>'Paroldi kiritiń!!!',
            
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'regex:/^[^0-9]*$/'],
            'email' => ['required', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'age' => ['required', 'numeric'],
            'phone_number' => ['required', 'regex:/^[0-9]{10}$/'],
            'location' => ['required', 'string', 'min:3']
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nombre',
            'email' => 'Correo electrónico',
            'age' => 'Edad',
            'phone_number' => 'Número de télefono',
            'location' => 'Ubicación'
        ];
    }

    public function messages()
    {
        return [
            'name.regex' => 'El campo nombre no puede contener números'
        ];
    }
}

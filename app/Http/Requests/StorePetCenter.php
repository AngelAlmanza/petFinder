<?php

namespace App\Http\Requests;

use App\Rules\TimeFormat;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePetCenter extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:10|max:255',
            'location' => 'required|string|min:10|max:255',
            'schedule' => ['required', 'string', new TimeFormat()],
            'email' => 'string|email',
            'phone' => 'regex:/^[0-9]{10}$/',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nombre',
            'location' => 'Ubicación',
            'schedule' => 'Horario',
            'phone' => 'Teléfono',
        ];
    }

    public function messages()
    {
        return [
            'phone.regex' => 'El campo Teléfono debe ser un número de teléfono válido de 10 dígitos',
        ];
    }
}

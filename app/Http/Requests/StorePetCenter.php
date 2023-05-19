<?php

namespace App\Http\Requests;

use App\Rules\TimeFormat;
use Illuminate\Foundation\Http\FormRequest;

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
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nombre',
            'location' => 'Ubicación',
            'schedule' => 'Horario'
        ];
    }
}

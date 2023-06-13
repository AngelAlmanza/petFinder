<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReport extends FormRequest
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
            'image' => 'image|max:2048',
            'reason' => 'required|string|min:5|max:255',
            'description' => 'required|string|min:50'
        ];
    }

    public function messages()
    {
        $messages = [
            'image.image' => 'Solo se permiten imagenes',
            'image.max' => 'La imágen que deseas subir es demasiado grande',
            'reason.min' => 'Por favor se más preciso',
            'reason.max' => 'Por favor se más breve',
            'description.min' => 'Por favor se más específico o agrega mas descripción para ayudarte de la mejor manera posible'
        ];
        return $messages;
    }
}

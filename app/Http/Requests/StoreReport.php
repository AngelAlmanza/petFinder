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
            'image.max' => 'La imagen que deseas subir es demasiado grande',
            'reason.min' => 'Por favor se mas preciso',
            'reason.max' => 'Por favor se mas breve',
            'description.min' => 'Por favor se mas especifico o agrega mas descripcion para ayudarte de la mejor manera posible'
        ];
        return $messages;
    }
}

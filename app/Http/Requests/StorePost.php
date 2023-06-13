<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
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
        $rules = [
            'breed' => 'required|string|max:20',
            'description' => 'required|string|min:50',
            'image' => 'required|image|max:2048'
        ];

        if ($this->input('title'))
        {
            $rules['title'] = 'required|string|min:10|max:255';
            $rules['placeAdopt'] = 'required|string|min:10|max:255';
        }

        if ($this->input('animal'))
        {
            $rules['animal'] = 'required|string|min:3|max:255';
            $rules['petName'] = 'required|string|max:255';
            $rules['placeLost'] = 'required|string|min:20|max:255';
        }

        if ($this->input('name'))
        {
            $rules['name'] = 'required|string|min:10|max:255';
        }

        return $rules;
    }

    public function attributes()
    {
        $attributes = [
            'breed' => 'raza',
            'description' => 'descripción'
        ];

        if ($this->input('title'))
        {
            $attributes['title'] = 'título';
            $attributes['placeAdopt'] = 'lugar de adopción';
        }

        if ($this->input('animal'))
        {
            $attributes['petName'] = 'nombre de la mascota';
            $attributes['placeLost'] = 'lugar donde se perdió';
        }

        if ($this->input('name'))
        {
            $attributes['name'] = 'nombre';
        }

        return $attributes;
    }

    public function messages()
    {
        $messages = [
            'description.min' => 'Por favor se más específico o agrega mas descripción para ayudarte de la mejor manera posible',
            'image.required' => 'Por favor sube una imágen de la mascota',
            'image.max' => 'La imágen que deseas subir es demasiado grande'
        ];
        return $messages;
    }
}

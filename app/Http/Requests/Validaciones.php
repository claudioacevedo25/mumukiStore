<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validaciones extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string','min:2', 'max:255'],
            'price' => ['required', 'numeric', 'min:1','max:100000'],
            'stock' => ['required', 'numeric', 'min:0','max:100000'],
            'description' => ['required', 'string', 'min:5', 'max:255'],
            'image' => ['required', 'mimes:jpeg,jpg,png']
        ];
    }

    public function messages()
    {
        return[
            'image.mimes' => 'Solo se aceptan formatos jpg,jpeg,png',
        ];
    }
}

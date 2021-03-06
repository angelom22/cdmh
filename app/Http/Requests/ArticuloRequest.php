<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloRequest extends FormRequest
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
            'titulo'            => 'min:5|max:250|required|unique:articulos',
            'extracto'     => 'required',
            'contenido'     => 'min:20|required',
            'image'             => 'image|required',
            'categoria_id'  => 'required'
        ];
    }
}

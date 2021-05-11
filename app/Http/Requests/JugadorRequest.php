<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JugadorRequest extends FormRequest
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
            'nombre'            => 'min:5|max:250|required',
            'edad'              => 'required|numeric',
            'fecha_nacimiento'  => 'required',
            'nacionalidad'      => 'required',
            'sexo'              => 'required',
            'telefono'          => 'required',
            'correo'            => 'required|email',
            'direccion'         => 'required',
            'posicion'          => 'required',
            'partidos'          => 'numeric',
            'goles'             => 'numeric',
            'categoria_jugador' => 'required',
            'file'              => 'image|required',
        ];
    }
}

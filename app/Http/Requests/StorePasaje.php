<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePasaje extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'dni' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'precio' => 'required',
            'destino' => 'required',
            'fechaviaje' => 'required',
            'asiento' => 'required'
        ];
    }
    public function attributes()
    {
        return [
            'dni' => 'D.N.I.',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
            'precio' => 'Precio',
            'destino' => 'Destino',
            'fechaviaje' => 'Fecha del Viaje',
            'asiento' => 'Asiento'
        ];
    }
}

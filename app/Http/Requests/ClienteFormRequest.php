<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'Nombre' => 'required|max:50',
            'Apellido' => 'required|max:50',
            'CorreoElectronico'=> 'required|max:100',
            'Contraseña' => 'required|max:100',
            'Telefono' => 'max:20',
            'Direccion' => 'max:100',
            'Ciudad' => 'max:50',
        ];
    }
}

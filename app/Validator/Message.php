<?php
namespace App\Validator;

class Message {
    public static function createDivision()
    {
        return [
            'itemNombre.unique' => 'La división ya se encuentra registrado',
            'itemNombre.required' => 'itemNombre parametro obligatorio',
            'itemDivisionSuperior.numeric' => 'itemDivisionSuperior debe ser entero',
            'itemEmbajador.required'=> 'itemEmbajador parametro obligatorio',
            'itemSubDivision.array'=> 'itemSubDivision debe ser un array',
        ];
    }

    public static function editarDivision()
    {
        return [
            'itemNombre.unique' => 'La división ya se encuentra registrado',
            'itemNombre.required' => 'itemNombre parametro obligatorio',
            'itemDivisionSuperior.numeric' => 'itemDivisionSuperior debe ser entero',
            'itemEmbajador.required'=> 'itemEmbajador parametro obligatorio'
        ];
    }
}

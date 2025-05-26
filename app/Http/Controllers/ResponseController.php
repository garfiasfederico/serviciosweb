<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    /**
     * Autenticarse en el servidor principal
     *
     * @param string $usuario
     * @param string $password
     * @return boolean
     */
    public function autenticarse($usuario,$password)
    {
        return false;
    }

    /**
     * Calculate the area of a circle with given radius
     *
     * @param string $radius
     * @return float
     */
    public function calculateCircleArea($radius)
    {
        if(is_numeric($radius))
            return 3.14 * $radius * $radius;
        else
            return 0;
    }
}

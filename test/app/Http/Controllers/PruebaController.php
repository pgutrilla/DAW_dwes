<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    function uno() {
        return 'Primer metodo de un controllador';
    }

    function unoparametro( $parametro ) {
        return 'Segundo metodo con parametro: ' . $parametro;
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class formularioCrearTour extends Controller
{
    public function formularioCrearTour()
    {
        return view('tours.formulario-crear-tour');
    }
}

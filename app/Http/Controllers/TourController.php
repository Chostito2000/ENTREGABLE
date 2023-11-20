<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        return view('tours.index', ['tours' => $tours]);
    }

    public function show($id)
    {
        $tour = Tour::find($id);
        $comentarios = $tour->comentarios;  

        return view('tours.show', compact('tour', 'comentarios')); 
    }

    public function buscarTours()
    {
        $tours = Tour::where('tipo_actividad', '=', 'aventura')->get(); 
        $textoSeguro = '<strong>Texto seguro para aventura</strong>';
        $textoNoSeguro = '<strong>Texto no seguro para aventura</strong>';

        return view('mi_vista', compact('tours', 'textoSeguro', 'textoNoSeguro'));
    }

    public function miVista()
    {
        $textoSeguro = '<strong>Texto seguro para aventura</strong>';
        $textoNoSeguro = '<strong>Texto no seguro para aventura</strong>';

        return view('mi_vista', compact('textoSeguro', 'textoNoSeguro'));
    }
    public function obtenerTours()
    {
        $tours = Tour::all();

        return view('tours.index', compact('tours'));
    }

    public function crearTour(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'imagen_url' => 'required|url',
        'tipo_actividad' => 'required|string|max:255',
    ]);

    $nuevoTour = new Tour;
    $nuevoTour->nombre = $request->input('nombre');
    $nuevoTour->descripcion = $request->input('descripcion');
    $nuevoTour->imagen_url = $request->input('imagen_url');
    $nuevoTour->tipo_actividad = $request->input('tipo_actividad');
    $nuevoTour->save();

    return redirect()->route('tours.index')->with('success', 'Tour creado exitosamente');
}


    public function actualizarTourForm($id)
    {
        $tour = Tour::find($id);
        return view('tours.formulario-actualizar-tour', compact('tour'));
    }
    
    public function actualizarTour(Request $request, $id)
    {
        $tour = Tour::find($id);
        $tour->nombre = $request->input('nombre');
        $tour->descripcion = $request->input('descripcion');
        $tour->save();
    
        return redirect()->route('tours.index')->with('success', 'Tour actualizado exitosamente');
    }
    
    public function eliminarTour($id)
    {
        $tour = Tour::find($id);
        $tour->delete();
    
        return redirect()->route('tours.index')->with('success', 'Tour eliminado exitosamente');
    }
    
    public function agregarTour()
    {
        $nuevoTour = new Tour;
        $nuevoTour->nombre = 'Nuevo Tour';
        $nuevoTour->descripcion = 'Descripción del Nuevo Tour';
        $nuevoTour->imagen_url = 'https://ejemplo.com/imagen_nuevo_tour.jpg';
        $nuevoTour->tipo_actividad = 'aventura';
        $nuevoTour->save();

        return redirect()->route('tours.index')->with('success', 'Tour agregado exitosamente');
    }

        public function formularioCrearTour()
    {
        return view('tours.formulario-crear-tour');
    }




}

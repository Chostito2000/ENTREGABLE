
@extends('layout')

@section('title', 'Ejemplo de Blade')

@section('content')
    <div>
        <p>{{ $textoSeguro }}</p>

        <p>{!! $textoNoSeguro !!}</p>
    </div>
@endsection

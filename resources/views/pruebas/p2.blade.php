@extends('layouts.plantilla')

@section('title', 'cursos' . $prueba)

@section('content')
    <h1>Bienvenido al curso <?php echo $prueba; ?></h1>
    <h4>Bienvenido al curso {{$prueba}}</h4>
@endsection



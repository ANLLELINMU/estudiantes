@extends('layout/template')

@section('title', 'Registrar Estudiante | estudiantes1')

@section('contenido')

<main>
<div class="container py-4">
<div style="border: 6px solid #2193b0; padding:25px; border-radius:8px; background-color:#2193b0">  
    <h2>{{ $msg }}</h2>
    <link rel="stylesheet" href="{{asset('interfaz.css')}}">

    <a href="{{url ('estudiante')}}"
        class="btn btn-secondary">Regresar</a>

    

    </div>
    <main>
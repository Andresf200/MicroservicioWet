@extends('layouts.layout')

@section('content')


<main class="historial">
        <h2 class="historial__heading">Historial</h2>
        <div class="historial__grid contenedor">
        @foreach ($data as $item)
            <div class="historial">
                <div class="historial__grid">
                    <div class="historial__imagen">
                       <img loading="lazy" decoding="async" src="{{asset('img/logo.png')}}" lazyalt="imagen"
                                alt="logo">
                    </div>
                    <div class="historial__contenido">
                    <h3 class="historial__nombre">{{ $item->ciudad }}</h3>
                     <p class="historial__descripcion">Humedad: {{ $item->humedad }}</p>
                    <p class="historial__descripcion">Fecha: {{ $item->fecha }}</p>
            </div>
                </div>
            </div><!-- .favorito -->
            @endforeach
        </div>
    </main>
@endsection

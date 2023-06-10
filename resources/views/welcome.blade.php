@extends('layouts.layout')

@section('content')
    <main class="mapa">
        <h2 class="mapa__heading">Mapa </h2>
        <div class="mapa contenedor">
        <div id="map" class="mapa__mapa"></div>
    </main>

    <script src="{{ asset('js/leaflet.js') }}"></script>
@endsection

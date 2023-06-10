<?php

namespace App\Http\Controllers;

use App\Http\Resources\WeatherHistoryResource;
use App\Models\WeatherHistory;
use App\Services\OpenWheaterMapService;


class MapController extends Controller
{
    public $mapService;

    public function __construct(OpenWheaterMapService $mapService)
    {
        $this->mapService = $mapService;
    }

    public function show($map){

        $weatherHistory = new WeatherHistory();
        if($map == 1){
            $response = $this->mapService->obtainData(40.730610,-73.935242);
            $weatherHistory->ciudad = 'New York';
        }else if($map == 2){
            $response = $this->mapService->obtainData(28.538336,-81.379234);
            $weatherHistory->ciudad = 'Orlando';
        }else if($map == 3){
            $response = $this->mapService->obtainData(25.761681,-80.191788);
            $weatherHistory->ciudad = 'Miami';
        }

        $weatherHistory->fecha = now(); // Asigna la fecha actual (puedes ajustarlo según tus necesidades)
        $weatherHistory->humedad = $response->current->humidity; // Asigna el valor de la humedad obtenido de la API
        $weatherHistory->save();

       return WeatherHistoryResource::make($weatherHistory);
    }

}

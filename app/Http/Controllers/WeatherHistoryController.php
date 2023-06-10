<?php

namespace App\Http\Controllers;

use App\Models\WeatherHistory;
use Illuminate\Http\Request;
use App\Http\Resources\WeatherHistoryResource;

class WeatherHistoryController extends Controller
{
    public function index(){
        $response = WeatherHistory::all();

        return view('history', ['data' => $response]);
    }
}

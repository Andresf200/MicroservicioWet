<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class OpenWheaterMapService
{
    public  $baseUri;

    public  $secret;

    public function __construct()
    {
        $this->baseUri = config('services.map.base_uri');
        $this->secret = config('services.map.secret');
    }
    public function obtainData($lat,$lon)
    {
        $response = Http::get($this->baseUri, [
            'lat' => $lat,
            'lon' => $lon,
            'appid' => $this->secret
        ]);

    return json_decode($response->getBody()->getContents());

    }
}

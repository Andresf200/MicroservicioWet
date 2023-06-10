<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WeatherHistoryResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'ciudad' => $this->resource->ciudad,
            'fecha' => $this->resource->fecha,
            'humedad' => $this->resource->humedad,
        ];
    }

    public static function collection($resource)
    {
        return parent::collection($resource);
    }
}

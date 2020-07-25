<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Hotel extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'provider' => $this['provider'],
            'hotelName' => $this['hotelName'],
            'fare_per_night' => $this['fare_per_night'],
            'amenities' => $this['amenities'],
        ];
    }
}

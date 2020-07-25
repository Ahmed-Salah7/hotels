<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TopHotel extends JsonResource
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
            'hotelName' => $this['hotelName'],
            'rate' => $this['rate'],
            'fare_per_night' => $this['fare_per_night'],
            'discount' => $this['discount'],
            'amenities' => $this['amenities'],
        ];
    }
}

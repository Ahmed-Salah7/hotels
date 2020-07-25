<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Hotel;
use App\Traits\ApiResponseTrait;
use App\Traits\Hotels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    use Hotels, ApiResponseTrait;

    public function hotels()
    {
        $result = $this->hotels;
        return $this->apiResponse(Hotel::collection($result), null, 200);

    }

    public function best_hotel(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'city' => 'required',
            'adults_number' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',

        ]);
        if ($validator->fails()) {
            return $this->apiResponse(null, $validator->errors(), 404);
        }
        $hotels = $this->hotels;
        $result = [];
        foreach ($hotels as $hotel) {
            if ($hotel['provider'] == 'BestHotels') {
                if ($hotel['IATA'] == $request->city) {
                    if ($hotel['adults_number'] == $request->adults_number) {
                        if ($hotel['ISO_LOCAL_DATE'] >= $request->from_date) {
                            if ($hotel['ISO_LOCAL_DATE'] <= $request->to_date) {
                                array_push($result, $hotel);
                            }
                        }
                    }
                }
            }
        }

        return $this->apiResponse(Hotel::collection($result), null, 200);

    }

    public function top_hotels(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'city' => 'required',
            'adults_number' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',

        ]);
        if ($validator->fails()) {
            return $this->apiResponse(null, $validator->errors(), 404);
        }


        $hotels = $this->hotels;
        $result = [];
        foreach ($hotels as $hotel) {
            if ($hotel['provider'] == 'TopHotels') {
                if ($hotel['IATA'] == $request->city) {
                    if ($hotel['adults_number'] == $request->adults_number) {
                        if ($hotel['ISO_LOCAL_DATE'] >= $request->from_date) {
                            if ($hotel['ISO_LOCAL_DATE'] <= $request->to_date) {
                                array_push($result, $hotel);
                            }
                        }
                    }
                }
            }
        }

        return $this->apiResponse($result, null, 200);

    }
}

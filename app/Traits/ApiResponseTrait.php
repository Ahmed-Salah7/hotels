<?php

namespace App\Traits;

use Response;

trait ApiResponseTrait
{
    /*{
    'data' =>
    'status' => true , false
    'error' =>
    }*/
    public function apiResponse($data = null, $error = null, $code = 200)
    {
        $array = [
            'data' => $data,
            'code' => $code,
            'status' => in_array($code, $this->successCode()) ? true : false,
            'error' => $error,
        ];
        return Response::json($array, $code);

    }

    public function successCode()
    {
        return [
            200, 201, 202
        ];
    }
}

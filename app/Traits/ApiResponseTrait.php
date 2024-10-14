<?php

namespace App\Traits;

trait ApiResponseTrait
{
    public function sucssessResponse($data, $massage = "success", $code = 200)
    {
        return response()->json([
            "status" => "success",
            "massage" => $massage,
            "data" => $data
        ], $code);
    }

    public function errorResponse($massage = "error", $code = 400)
    {
        return response()->json([
            "status" => "error",
            "massage" => $massage
        ], $code);
    }
}

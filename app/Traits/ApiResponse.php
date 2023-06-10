<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Laravel\Lumen\Http\ResponseFactory;

trait ApiResponser
{
    public function successResponse($data, $code = Response::HTTP_OK): Response|ResponseFactory
    {
        return response($data, $code)->header('Content-Type', 'application/json');
    }

    public function errorResponse($message, $code): JsonResponse
    {
        return response()->json(['message' => $message, 'code' => $code],$code);
    }

    public function errorMessage($message, $code): Response|ResponseFactory
    {
        return response($message, $code)->header('Content-Type', 'application/json');
    }

    public function validResponse($data, $code = Response::HTTP_OK): JsonResponse
    {
        return response()->json(['data' => $data], $code);
    }
}

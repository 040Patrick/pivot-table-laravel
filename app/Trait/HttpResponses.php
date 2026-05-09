<?php
declare(strict_types=1);
namespace app\Trait;

use Illuminate\Http\JsonResponse;

trait HttpResponses
{
    protected function success(array|string $data, string $message, int $Code = 200)
    {
        return response()->json([
            'status' => 'Request was succesful',
            'message' => $message,
            'data' => $data
        ], $Code);
    }

    protected function error(array|string $data, string $message = null, int $Code)
    {
        return response()->json([
            'status' => 'Error has occurred',
            'message' => $message,
            'data' => $data
        ], $Code);
    }
}

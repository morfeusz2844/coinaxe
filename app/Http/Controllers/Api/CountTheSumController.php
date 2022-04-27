<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Common\BaseCountTheSumController;
use App\Http\Requests\CountTheSumRequest;
use App\Http\Resources\CountTheSumResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class CountTheSumController extends BaseCountTheSumController
{
    /**
     * @param CountTheSumRequest $request
     *
     * @return JsonResponse
     */
    public function countTheSum(CountTheSumRequest $request): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'status_code' => Response::HTTP_OK,
            'data' => (new CountTheSumResource(
                $this->countTheSumService->calc(
                    $request->get('first_number'),
                    $request->get('second_number'))
            )),
            'errors' => (new \stdClass())
        ], Response::HTTP_OK);
    }
}

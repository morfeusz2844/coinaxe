<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountTheSumRequest;
use App\Services\CountTheSumService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

abstract class BaseCountTheSumController extends Controller
{
    protected CountTheSumService $countTheSumService;

    /**
     * @param CountTheSumService $countTheSumService
     */
    public function __construct(CountTheSumService $countTheSumService)
    {
        $this->countTheSumService = $countTheSumService;
    }

    abstract public function countTheSum(CountTheSumRequest $request): RedirectResponse|JsonResponse;
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountTheSumRequest;
use App\Services\CountTheSumService;
use Illuminate\Http\RedirectResponse;

class CountTheSumController extends Controller
{
    private CountTheSumService $countTheSumService;

    /**
     * @param CountTheSumService $countTheSumService
     */
    public function __construct(CountTheSumService $countTheSumService)
    {
        $this->countTheSumService = $countTheSumService;
    }

    /**
     * @param CountTheSumRequest $request
     *
     * @return RedirectResponse
     */
    public function countTheSum(CountTheSumRequest $request): RedirectResponse
    {
        return redirect()->back()->with(
            'calc_result',
            $this->countTheSumService->calc($request->get('first_number'), $request->get('second_number'))
        );
    }
}

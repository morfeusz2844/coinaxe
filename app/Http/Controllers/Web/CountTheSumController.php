<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Common\BaseCountTheSumController;
use App\Http\Requests\CountTheSumRequest;
use Illuminate\Http\RedirectResponse;

class CountTheSumController extends BaseCountTheSumController
{


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

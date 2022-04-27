<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\TextConcatRequest;
use App\Services\TextConcatService;
use Illuminate\Http\RedirectResponse;

class TextConcatController extends Controller
{
    private TextConcatService $textConcatService;

    public function __construct(TextConcatService $textConcatService)
    {
        $this->textConcatService = $textConcatService;
    }

    public function store(TextConcatRequest $request):RedirectResponse
    {
        $this->textConcatService->store($request->get('text-area'));

        return response()->redirectToRoute('welcome');
    }
}

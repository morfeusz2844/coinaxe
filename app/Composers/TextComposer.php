<?php

namespace App\Composers;

use App\Services\TextConcatService;
use Illuminate\View\View;

class TextComposer
{
    private TextConcatService $textService;

    public function __construct(TextConcatService $textService)
    {
        $this->textService = $textService;
    }

    public function compose(View $view): void
    {
        $view->with('vc_text_array', $this->textService->get());
    }
}

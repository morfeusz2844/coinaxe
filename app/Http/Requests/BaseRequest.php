<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class BaseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return string
     */
    protected function getRedirectUrl(): string
    {
        $url = $this->redirector->getUrlGenerator();
        return $url->previous();
    }
}

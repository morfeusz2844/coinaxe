<?php

namespace App\Http\Requests;

class TextConcatRequest extends BaseRequest
{
    protected $errorBag = "text_request";
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'text-area' => 'required|string'
        ];
    }
}

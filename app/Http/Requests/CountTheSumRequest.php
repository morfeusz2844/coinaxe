<?php

namespace App\Http\Requests;

class CountTheSumRequest extends BaseRequest
{
    protected $errorBag = "calc_request";
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'first_number' => 'required|numeric',
            'second_number' => 'required|numeric'
        ];
    }
}

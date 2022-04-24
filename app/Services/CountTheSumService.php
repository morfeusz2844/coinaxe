<?php

namespace App\Services;

class CountTheSumService
{
    public function calc(float $first_number, float $second_number): float
    {
        return $first_number + $second_number;
    }
}

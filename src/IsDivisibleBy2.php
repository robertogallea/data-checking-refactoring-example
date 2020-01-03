<?php


namespace App;


class IsDivisibleBy2 implements Check
{
    public function check($number): bool
    {
        return $number % 2 === 0;
    }
}
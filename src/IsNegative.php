<?php


namespace App;


class IsNegative implements Check
{
    public function check($number): bool
    {
        return $number<0;
    }
}
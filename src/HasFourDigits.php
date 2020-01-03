<?php


namespace App;


class HasFourDigits implements Check
{
    public function check($number): bool
    {
        return $number > 999 && $number < 9999;
    }
}
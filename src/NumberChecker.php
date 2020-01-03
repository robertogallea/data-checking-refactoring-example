<?php


namespace App;


class NumberChecker
{
    public function execute($number): bool
    {
        if ($number % 2 === 0) { // even
            return false;
        } elseif (strpos((string)$number, '0')) { // contains zeros
            return false;
        } elseif ($number < 0) { // negative
            return false;
        } elseif ($number > 999 && $number < 9999) { // four digits
            return false;
        }

        return true;
    }
}
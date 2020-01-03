<?php


namespace App;


class NumberChecker
{
    public function execute($number): bool
    {
        if ($this->isDivisibleBy2($number)) {
            return false;
        } elseif ($this->containsZeros($number)) {
            return false;
        } elseif ($this->isNegative($number)) {
            return false;
        } elseif ($this->hasFourDigits($number)) {
            return false;
        }

        return true;
    }

    private function isDivisibleBy2($number): bool
    {
        return $number % 2 === 0;
    }

    private function containsZeros($number)
    {
        return strpos((string)$number, '0');
    }

    private function isNegative($number)
    {
        return $number < 0;
    }

    private function hasFourDigits($number): bool
    {
        return $number > 999 && $number < 9999;
    }
}
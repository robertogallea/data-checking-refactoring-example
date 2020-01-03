<?php


namespace App;


class ContainsZeros implements Check
{
    public function check($number): bool
    {
        return strpos((string)$number, '0');
    }
}
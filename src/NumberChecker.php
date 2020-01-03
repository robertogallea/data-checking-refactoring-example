<?php


namespace App;


class NumberChecker
{
    public function execute($number): bool
    {
        if ((new IsDivisibleBy2())->check($number)) {
            return false;
        } elseif ((new ContainsZeros())->check($number)) {
            return false;
        } elseif ((new IsNegative())->check($number)) {
            return false;
        } elseif ((new HasFourDigits())->check($number)) {
            return false;
        }

        return true;
    }
}
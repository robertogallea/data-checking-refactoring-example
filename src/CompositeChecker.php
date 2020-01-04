<?php


namespace App;


class CompositeChecker implements Check
{
    private array $checks = [
        IsDivisibleBy2::class,
        ContainsZeros::class,
        IsNegative::class,
        HasFourDigits::class
    ];

    public function check($number): bool
    {
        foreach ($this->checks as $check) {
            if ((new $check)->check($number)) {
                return false;
            }
        }

        return true;
    }
}
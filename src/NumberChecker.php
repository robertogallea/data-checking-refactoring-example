<?php


namespace App;


class NumberChecker
{
    public function execute($number): bool
    {
        $checks = [

            IsDivisibleBy2::class,
            ContainsZeros::class,
            IsNegative::class,
            HasFourDigits::class
        ];

        return (new CompositeChecker($checks))->check($number);
    }
}
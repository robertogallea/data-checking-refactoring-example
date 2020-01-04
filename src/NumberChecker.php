<?php


namespace App;


class NumberChecker
{
    public function execute($number): bool
    {
        return (new CompositeChecker())->check($number);
    }
}
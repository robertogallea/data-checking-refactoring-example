<?php


namespace App;


class CompositeChecker implements Check
{
    private array $checks = [];

    public function __construct(array $checks)
    {
        $this->checks = $checks;
    }

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
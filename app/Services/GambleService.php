<?php

namespace App\Services;

class GambleService
{
    public function getResult(): float|int
    {
        $result = $this->generateResult();

        if ($result % 2 !== 0) {
            return 0;
        }

        return $this->cutResult($result);
    }

    private function generateResult(): int
    {
        return rand(1, 1000);
    }

    private function cutResult($number): float|int
    {
        if ($number > 900) {
            return $number * 70 / 100;
        }

        if ($number > 600) {
            return $number * 50 / 100;
        }

        if ($number > 300) {
            return $number * 30 / 100;
        }

        return $number * 10 / 100;
    }
}

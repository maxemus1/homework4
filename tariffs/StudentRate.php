<?php
require 'Rate.php';

/**
 * Class StudentRate
 * Тариф Студенчиский
 */
class StudentRate extends Rate implements InterfaceTariff
{
    protected function tariffPriceKilometer()
    {
        return 4;
    }

    protected function tariffPriceMinute()
    {
        return 1;
    }

    public function sum($distance, $time, $age)
    {
        if ($age >= 18 && $age <= 25) {
            $sum = $this->tariffPriceKilometer() * $distance + $this->tariffPriceMinute() * $time;
            ($age <= 21) ? $sum += $sum * 1.1 : $sum;
            return $sum;
        }
        throw new \InvalidArgumentException();
    }

}
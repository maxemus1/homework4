<?php
require 'Rate.php';

/**
 * Class StudentRate
 * Тариф Студенчиский
 */
class StudentRate extends Rate implements InterfaceTariff
{
    public function tariffPriceKil()
    {
        return $this->priceKil = 4;
    }

    public function tariffPriceMin()
    {
        return $this->priceMin = 1;
    }

    public function sum($distance, $time, $age)
    {
        if ($age >= 18 && $age <= 25) {
            $sum = $this->tariffPriceKil() * $distance + $this->tariffPriceMin() * $time;
            ($age <= 21) ? $sum += $sum * 1.1 : $sum;
            return $sum;
        }
        return 'Не подходящий возраст';
    }
}
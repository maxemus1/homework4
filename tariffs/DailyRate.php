<?php
require 'Rate.php';

/**
 * Class DailyRate
 * Тариф суточный
 */
class DailyRate extends Rate implements InterfaceTariff
{
    use traitTime;

    public function tariffPriceKil()
    {
        return $this->priceKil = 1;
    }

    public function tariffPriceMin()
    {
        return $this->priceMin = 1000;//округление до 24 часов в большую сторону, но не менее 30 минут
    }

    public function sum($distance, $time, $age)
    {
        if ($age >= 18 && $age <= 25) {
            $time = $this->DailyTime($time);
            $sum = $this->tariffPriceKil() * $distance + $this->tariffPriceMin() * $time;
            ($age <= 21) ? $sum += $sum * 1.1 : $sum;
            return $sum;
        }
        return 'Не подходящий возраст';
    }
}
<?php

/**
 * Class HourlyRate
 * Тариф Почасовой
 */
class HourlyRate extends Rate implements InterfaceTariff
{
    use traitTime;

    public function tariffPriceKil()
    {
        return $this->priceKil = 0;
    }

    public function tariffPriceMin()
    {
        return $this->priceMin = 200;//за 60 минут округляем в большую сторону
    }

    public function sum($distance, $time, $age)
    {
        if ($age >= 18 && $age <= 65) {
            $time = $this->HourlyTime($time);
            $sum = $this->tariffPriceKil() * $distance + $this->tariffPriceMin() * $time;
            ($age <= 21) ? $sum += $sum * 1.1 : $sum;
            return $sum;
        }
        return 'Не подходящий возраст';
    }
}
<?php

/**
 * Class HourlyRate
 * Тариф Почасовой
 */
class HourlyRate extends Rate implements InterfaceTariff
{
    use traitTime;

    protected function tariffPriceKilometer()
    {
        return  0;
    }

    protected function tariffPriceMinute()
    {
        return  200;//за 60 минут округляем в большую сторону
    }

    public function sum($distance, $time, $age)
    {
        if ($age >= 18 && $age <= 65) {
            $time = $this->HourlyTime($time);
            $sum = $this->tariffPriceKilometer() * $distance + $this->tariffPriceMinute() * $time;
            ($age <= 21) ? $sum += $sum * 1.1 : $sum;
            return $sum;
        }
        throw new \InvalidArgumentException();
    }
}
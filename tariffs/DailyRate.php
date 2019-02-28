<?php
require 'AbstractRate.php';

/**
 * Class DailyAbstractRate
 * Тариф суточный
 */
class DailyRate extends AbstractRate implements TariffInterface
{
    use timeTrait;

    protected function tariffPriceKilometer()
    {
        return 1;
    }

    protected function tariffPriceMinute()
    {
        return 1000;//округление до 24 часов в большую сторону, но не менее 30 минут
    }

    public function sum($distance, $time, $age)
    {
        if ($age >= 18 && $age <= 25) {
            $time = $this->DailyTime($time);
            $sum = $this->tariffPriceKilometer() * $distance + $this->tariffPriceMinute() * $time;
            ($age <= 21) ? $sum += $sum * 1.1 : $sum;
            return $sum;
        }
        throw new \InvalidArgumentException();
    }
}
<?php

/**
 * Class BaseRate
 * Базовый тариф
 */
class BaseRate extends Rate implements InterfaceTariff
{
    protected function tariffPriceKilometer()
    {
        return  10;
    }

    protected function tariffPriceMinute()
    {
        return  3;
    }

    public function sum($distance, $time, $age)
    {
        if ($age >= 18 && $age <= 65) {
            $sum = $this->tariffPriceKilometer()*$distance + $this->tariffPriceMinute()*$time;
           ($age <= 21) ?$sum+=$sum * 1.1:$sum;
            return $sum;
        }
        throw new \InvalidArgumentException();
    }
}

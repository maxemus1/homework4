<?php

/**
 * Class BaseRate
 * Базовый тариф
 */
class BaseRate extends Rate implements InterfaceTariff
{
    public function tariffPriceKil()
    {
        return $this->priceKil = 10;
    }

    public function tariffPriceMin()
    {
        return $this->priceMin = 3;
    }

    public function sum($distance, $time, $age)
    {
        if ($age >= 18 && $age <= 65) {
            $sum = $this->tariffPriceKil()*$distance + $this->tariffPriceMin()*$time;
           ($age <= 21) ?$sum+=$sum * 1.1:$sum;
            return $sum;
        }
        return 'Не подходящий возраст';
    }
}

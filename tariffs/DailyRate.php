<?php
require 'Rate.php';
/**
 * Class DailyRate
 * Тариф суточный
 */
class DailyRate extends Rate
{
    public function Tariff()
    {
        // TODO: Implement Tariff() method.
        $this->priceKil = 1;
        $this->priceMin = 1000;
        //округление до 24 часов в большую сторону, но не менее 30 минут. Например 24
      //часа 29 минут = 1 сутки. 23 часа 59 минут = 1 сутки. 24 часа 31 минута = 2 суток.

    }
}
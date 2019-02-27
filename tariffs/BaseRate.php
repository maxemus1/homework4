<?php

require 'Rate.php';
require '../InterfaceTariff.php';

/**
 * Class BaseRate
 * Базовый тариф
 */
class BaseRate extends Rate implements InterfaceTariff
{
    public function Tariff()
    {
        // TODO: Implement Tariff() method.
        $this->priceKil = 10;
        $this->priceMin = 3;
        $this->sum($this->priceKil, $this->priceMin);
    }

    public function sum($priceKil, $priceMin)
    {
        // TODO: Implement sum() method.
        $sum=5*$priceKil+60*$priceMin;
        return $sum;
    }
}
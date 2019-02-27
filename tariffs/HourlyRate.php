<?php

require 'Rate.php';

/**
 * Class HourlyRate
 * Тариф Почасовой
 */
class HourlyRate extends Rate
{
public function Tariff()
{
    // TODO: Implement Tariff() method.
    // TODO: Implement Tariff() method.
    $this->priceKil = 0;
    $this->priceMin = 200;//за 60 минут округляем в большую сторону
}
}
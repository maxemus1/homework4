<?php
require 'Rate.php';

/**
 * Class StudentRate
 * Тариф Студенчиский
 */
class StudentRate
{
    public function Tariff()
    {
        // TODO: Implement Tariff() method.
        $this->priceKil = 4;
        $this->priceMin = 1;
        //Возраст водителя не может быть более 25 лет
    }
}
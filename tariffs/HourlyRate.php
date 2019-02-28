<?php


/**
 * Class HourlyAbstractRate
 * Тариф Почасовой
 */
class HourlyRate extends AbstractRate implements TariffInterface
{
use TimeTrait;

    protected function tariffPriceKilometer()
    {
        return 0;
    }

    protected function tariffPriceMinute()
    {
        return 200;//за 60 минут округляем в большую сторону
    }

    public function sum($distance, $time, $age)
    {

        $time = $this->HourlyTime($time);
    }
}

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

        $time = $this->DailyTime($time);
    }

}
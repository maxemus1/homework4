<?php

/**
 * Class DailyAbstractRate
 * Тариф суточный
 */
class DailyRate extends AbstractRate implements TariffInterface
{
    use timeTrait;
    use DriverTrait;

    protected function tariffPriceKilometer()
    {
        return 1;
    }

    protected function tariffPriceMinute()
    {
        return 1000;//округление до 24 часов в большую сторону, но не менее 30 минут
    }

    public function sum($distance, $time, $age, $gps = false, $driver = false)
    {
        $time = $this->DailyTime($time);
        $driver ? $driver = $this->driver() : $driver = false;
        return parent::sum($distance, $time, $age, $gps, $driver);

    }
}

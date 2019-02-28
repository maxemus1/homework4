<?php

/**
 * Class BaseAbstractRate
 * Базовый тариф
 */
class BasicRate extends AbstractRate implements TariffInterface
{
    use DriverTrait;

    protected function tariffPriceKilometer()
    {
        return 10;
    }

    protected function tariffPriceMinute()
    {
        return 3;
    }

    public function sum($distance, $time, $age, $gps = false, $driver = false)
    {
        $driver ? $driver = $this->driver() : $driver = false;
        return parent::sum($distance, $time, $age, $gps, $driver);
    }
}

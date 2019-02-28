<?php

/**
 * Class StudentAbstractRate
 * Тариф Студенчиский
 */
class StudentRate extends AbstractRate implements TariffInterface
{
    use DriverTrait;

    protected function tariffPriceKilometer()
    {
        return 4;
    }

    protected function tariffPriceMinute()
    {
        return 1;
    }

    public function sum($distance, $time, $age, $gps = false, $driver = false)
    {
        if ($age > 25) {
            throw new \InvalidArgumentException();
        }
        $driver ? $driver = $this->driver() : $driver = false;
        return parent::sum($distance, $time, $age, $gps, $driver);
    }
}

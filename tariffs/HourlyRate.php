<?php


/**
 * Class HourlyAbstractRate
 * Тариф Почасовой
 */
class HourlyRate extends AbstractRate implements TariffInterface
{
    use TimeTrait;
    use DriverTrait;

    protected function tariffPriceKilometer()
    {
        return 0;
    }

    protected function tariffPriceMinute()
    {
        return 200;//за 60 минут округляем в большую сторону
    }

    public function sum($distance, $time, $age, $gps = false, $driver = false)
    {
        $gps ? $gps = $this->GpsTime($time) : $gps;
        $driver ? $driver = $this->driver() : $driver = false;
        $time = $this->HourlyTime($time);
        return parent::sum($distance, $time, $age, $gps, $driver);

    }
}

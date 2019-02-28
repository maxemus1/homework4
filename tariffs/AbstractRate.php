<?php

/**
 * Class AbstractRate
 */
abstract class AbstractRate implements TariffInterface
{
    /**
     * @return mixed
     */
    abstract protected function tariffPriceKilometer();

    /**
     * @return mixed
     */
    abstract protected function tariffPriceMinute();

    public function sum($distance, $time, $age,$gps=0)
    {
        if ($age >= 18 && $age <= 25) {
            $sum = $this->tariffPriceKilometer() * $distance + $this->tariffPriceMinute() * $time+$gps;
            if ($age <= 21) {
                $sum += $sum * 0.1;
                return $sum;
            }
            return $sum;
        }
        throw new \InvalidArgumentException();
    }
}


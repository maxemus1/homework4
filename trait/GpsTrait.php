<?php

/**
 * Trait gpstrait
 * Стоймость gps
 */
trait GpsTrait
{
    protected $costGps = 15;
    use timeTrait;

    public function traitGpsTime($time)
    {
        $costGps = $this->costGps;
        $time = $this->HourlyTime($time);
        $sum = $time * $costGps;
        return $sum;
    }
}
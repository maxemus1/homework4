<?php

/**
 * Trait traitGps
 * Стоймость gps
 */
trait traitGps
{
    protected $costGps = 15;
    use traitTime;

    public function traitGpsTime($time)
    {
        $costGps = $this->costGps;
        $time = $this->HourlyTime($time);
        $sum = $time * $costGps;
        return $sum;
    }
}
<?php

/**
 * Trait gpstrait
 * Стоймость gps
 */
trait GpsTrait
{
    protected $costGps = 15;
   // use TimeTrait;

    public function traitGpsTime($time)
    {
        $costGps = $this->costGps;
       // $time = $this->HourlyTime($time);
        $sum = $time * $costGps;
        return $sum;
    }
}
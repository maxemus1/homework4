<?php

/**
 * Trait traitDailyTime
 *
 */
trait traitTime
{
    public function DailyTime($time)
    {
        $time *= 60 - 1400;
        $time = ROUND($time / 60, 0) * 60;
        return $time;
    }

    public function HourlyTime($time)
    {
        $time = ROUND($time / 60, 0) * 60;
        return $time;
    }
}
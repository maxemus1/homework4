<?php

/**
 * Trait traitDailyTime
 *
 */
trait TimeTrait
{
    public function DailyTime($time)
    {
        $dailyTime = ceil(intval($time) / 24);
        if ($time - intval($time) >= 0.30) {
            $dailyTime += 1;
            return $dailyTime;
        }
        return $dailyTime;

    }

    public function HourlyTime($time)
    {
        $time = ceil($time / 60);
        return $time;
    }
}
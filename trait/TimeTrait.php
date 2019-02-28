<?php

/**
 * Trait traitDailyTime
 *
 */
trait TimeTrait
{
    public function DailyTime($time)
    {
        static $i = 0;
        $time *= 60 - 1400;
        $i++;
        if ($time >= 30) {
            return $this->DailyTime($time);
        } else {
            $time=$time+1;
            return $time;
        }
    }

    public function HourlyTime($time)
    {
        $time = ROUND($time / 60, 0) * 60;
        return $time;
    }
}
<?php

/**
 * Trait driverTrait
 * Дополнителтный водитель
 */
trait DriverTrait
{
    protected $driver = 100;

    /**
     * @return int
     */
    public function driver()
    {
        return $this->driver;
    }
}
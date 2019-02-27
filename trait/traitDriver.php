<?php

/**
 * Trait traitDriver
 * Дополнителтный водитель
 */
trait traitDriver
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
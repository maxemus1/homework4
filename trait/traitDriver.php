<?php

/**
 * Trait traitDriver
 * Дополнителтный водитель
 */
trait traitDriver
{
    protected $driv = 100;

    /**
     * @return int
     */
    public function driver()
    {
        return $this->driv;
    }
}
<?php

/**
 * Class AbstractRate
 */
abstract class AbstractRate
{
    /**
     * @return mixed
     */
    abstract protected function tariffPriceKilometer();

    /**
     * @return mixed
     */
    abstract protected function tariffPriceMinute();

}


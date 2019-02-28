<?php

class NewException extends Exception
{
    public function exception($e)
    {
        try {
            print_r($e);
        } catch
        (InvalidArgumentException $e) {
            echo 'Неподходящий возвраст';
        }
    }
}

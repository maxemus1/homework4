<?php

class NewException extends Exception
{

    public function exception()
    {
        try {
            print_r('jr');
        } catch
        (InvalidArgumentException $e) {
            echo 'Неподходящий возвраст';
        }
    }
}
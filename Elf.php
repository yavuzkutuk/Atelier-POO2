<?php


namespace Unit;


class Elf extends Unit
{    /**
     * Méthodes
     */
    public function __construct()
    {
        $this->speed = 5;
    }


    public function attack()
    {
        return 'à l\'attack';
    }

}
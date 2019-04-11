<?php


namespace Unit;


class Soldier extends Unit
{
    /**
     * Méthodes
     */
    public function __construct()
    {
        $this->speed = 2;
    }

    public function attack()
    {
        return 'à l\'attack';
    }
}
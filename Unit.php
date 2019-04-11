<?php


namespace Unit;


class Unit
{

    /**
     * Attributs
     */
    private $pv;
    private $position = [0,0];
    protected $speed;

    /**
     * Méthodes
     */
    public function __construct()
    {
        $this->speed = 1;
    }

    public function walk(string $direction) : array
    {
        if($direction == 'right'){
            $this->position[0] += $this->speed;
        }elseif($direction =='left'){
            $this->position[0] -= $this->speed;
        }elseif($direction =='top'){
            $this->position[1] += $this->speed;
        }elseif($direction =='bottom'){
            $this->position[1] -= $this->speed;
        }

        return $this->position;

    }

}
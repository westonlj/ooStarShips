<?php

class Ship
{
    public $name;
    public $weaponPower = 0;
    public $jediFactor = 0;
    public $strength = 0;

    public function sayHello()
    {
        echo 'HELLO';
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNameAndSpecs($userShortFormat)
    {
        if ($userShortFormat) {
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        } else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }
    }

    public function givenShipMoreStrength($givenShip)
    {
        // compare current ship to passed in ship
        return $givenShip->strength > $this->strength;
    }

}
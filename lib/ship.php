<?php

class Ship
{
    private $name;
    private $weaponPower = 0;
    private $jediFactor = 0;
    private $strength = 0;

    public function sayHello()
    {
        echo 'HELLO';
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getWeaponPower()
    {
        return $this->weaponPower;
    }

    public function setWeaponPower($weaponPow)
    {
        $this->weaponPower = $weaponPow;
    }

    public function getJediFactor()
    {
        return $this->jediFactor;
    }

    public function setJediFactor($jediPow)
    {
        $this->jediFactor = $jediPow;
    }

    public function getNameAndSpecs($userShortFormat = false)
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

    public function setStrength($strength)
    {
        if (!is_numeric($strength)) {
            throw new Exception('Invalid strength passed '.$strength);
        }
        $this-> strength = $strength;
    }

    public function getStrength()
    {
        return $this->strength;
    }
}
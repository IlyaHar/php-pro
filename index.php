<?php
require_once __DIR__ . '/vendor/autoload.php';

interface FlyingBird {
    public function eat();
    public function fly();
}

interface NotFlyingBird
{
    public function eat();
}

class Swallow implements FlyingBird
{
    public function eat()
    {
        // TODO: Implement eat() method.
    }

    public function fly()
    {
        // TODO: Implement fly() method.
    }
}

class Ostrich implements NotFlyingBird
{
    public function eat()
    {
        // TODO: Implement eat() method.
    }
}







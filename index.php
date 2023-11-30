<?php
require_once __DIR__ . '/vendor/autoload.php';

interface TypeTaxi {
    public function getModel(): string;
    public  function getPrice(): int;
}

class Economy implements TypeTaxi {

    public function getModel(): string
    {
        return 'Renault Logan';
    }

    public function getPrice(): int
    {
        return 5;
    }
}

class Standard implements TypeTaxi {

    public function getModel(): string
    {
        return 'Toyota Camry';
    }

    public function getPrice(): int
    {
        return 15;
    }
}

class Luxury implements TypeTaxi {

    public function getModel(): string
    {
        return 'Mercedes-Benz Maybach';
    }

    public function getPrice(): int
    {
        return 50;
    }
}

abstract class Logistic {
    abstract function getTypeTaxi(): TypeTaxi;
    public function taxi(): TypeTaxi {
        return $this->getTypeTaxi();
    }
}

class EconomyTaxi extends Logistic {

    function getTypeTaxi(): TypeTaxi
    {
        return new Economy();
    }
}

class StandardTaxi extends Logistic {

    function getTypeTaxi(): TypeTaxi
    {
        return new Standard();
    }
}

class LuxuryTaxi extends Logistic {

    function getTypeTaxi(): TypeTaxi
    {
        return new Luxury();
    }
}

function clientCode(Logistic $logistic) {
    $taxi = $logistic->taxi();
    echo 'Model: ' . $taxi->getModel() . "\n";
    echo 'Price: $' . $taxi->getPrice() . "\n";
}

clientCode(new EconomyTaxi());
clientCode(new StandardTaxi());
clientCode(new LuxuryTaxi());

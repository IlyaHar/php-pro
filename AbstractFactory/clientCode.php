<?php
namespace AbstractFactory;
require_once  '../vendor/autoload.php';

function clientCode(GUIFactory $factory) {
    $tvLed = $factory->createLedTV();
    $tvLcd = $factory->createLcdTv();
    echo  ' LED TV: ' . $tvLed->getTV() . "<br>";
    echo  ' LCD TV: ' . $tvLcd->getTV() . "<br>";
}

clientCode(new SonyFactory());
clientCode(new LGFactory());



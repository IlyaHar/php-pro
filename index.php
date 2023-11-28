<?php
require_once __DIR__ . '/vendor/autoload.php';

interface Format {
    public function getFormat($string): string;
}

class Raw implements Format {

    public function getFormat($string): string
    {
        return $string;
    }
}

class WithDate implements Format {

    public function getFormat($string): string
    {
        return date('Y-m-d H:i:s') . $string;
    }
}

class WithDateAndDetails implements Format {

    public function getFormat($string): string
    {
        return date('Y-m-d H:i:s') . $string . '- With some details';
    }
}

interface Delivery {
    public function getDelivery($format);
}

class ByEmail implements Delivery {
    public function getDelivery($format)
    {
        echo  "Вывод формата ({$format}) по имейл";
    }
}

class BySms implements Delivery {
    public function getDelivery($format)
    {
        echo  "Вывод формата ({$format}) в смс";
    }
}
class ToConsole implements Delivery {
    public function getDelivery($format)
    {
        echo  "Вывод формата ({$format}) в консоль";
    }
}

class Logger
{
    private $format;
    private $delivery;

    public function __construct( Format $format, Delivery $delivery)
    {
        $this->format   = $format;
        $this->delivery = $delivery;
    }

    public function log($string)
    {
        $this->deliver($this->format($string));
    }

    public function format($string)
    {
        return $this->format->getFormat($string);
    }

    public function deliver($format)
    {
        return $this->delivery->getDelivery($format);
    }
}

$format = new WithDate();
$delivery = new ByEmail();

$logger = new Logger($format, $delivery);
$logger->log(' Emergency error! Please fix me! ');










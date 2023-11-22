<?php
require_once __DIR__ . '/vendor/autoload.php';

class ValueObject
{
    private $red;
    private $green;
    private $blue;

    public function __construct($red, $green, $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function getRed()
    {
        return $this->red;
    }

    public function getGreen()
    {
        return $this->green;
    }

    public function getBlue()
    {
        return $this->blue;
    }

    public function setRed($red): void
    {

        if ($this->ValidColor($red)) {
            $this->red = $red;
        } else {
            echo 'Це не валідний колір!';
        }

    }

    public function setGreen($green): void
    {
        if ($this->ValidColor($green)) {
            $this->green = $green;
        } else {
            echo 'Це не валідний колір!';
        }
    }

    public function setBlue($blue): void
    {
        if ($this->ValidColor($blue)) {
            $this->blue = $blue;
        } else {
            echo 'Це не валідний колір!';
        }

    }

    private function ValidColor($value)
    {
        return $value >= 0 && $value <= 255;
    }

    public function equals($color)
    {
        if ($color instanceof ValueObject) {
            return
                $this->red === $color->getRed() &&
                $this->green === $color->getGreen() &&
                $this->blue === $color->getBlue();
        } else {
            return false;
        }
    }

    public static function random()
    {
        $red = rand(0, 255);
        $green = rand(0, 255);
        $blue = rand(0, 255);

        return new ValueObject($red, $green, $blue);
    }

    public function mix($color)
    {
        $mixedRed = round(($this->red + $color->getRed()) / 2);
        $mixedGreen = round(($this->green + $color->getGreen()) / 2);
        $mixedBlue = round(($this->blue + $color->getBlue()) / 2);

        if ($this->ValidColor($mixedRed) && $this->ValidColor($mixedGreen) && $this->ValidColor($mixedBlue)) {
            return new ValueObject($mixedRed, $mixedGreen, $mixedBlue);
        }
    }
}

$color = new ValueObject(250, 250, 250);
$mixedColor = $color->mix(new ValueObject(100, 100, 100));
echo $mixedColor->getRed() . "\n";
echo $mixedColor->getGreen() . "\n";
echo $mixedColor->getBlue() . "\n";



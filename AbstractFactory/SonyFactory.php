<?php

namespace AbstractFactory;

class SonyFactory implements GUIFactory
{

    public function createLedTV(): LedTv
    {
        return new SonyLedTV();
    }

    public function createLcdTv(): LcdTv
    {
        return new SonyLcdTV();
    }
}
<?php

namespace AbstractFactory;

interface GUIFactory
{
    public function createLedTV(): LedTv;
    public function createLcdTv(): LcdTv;
}
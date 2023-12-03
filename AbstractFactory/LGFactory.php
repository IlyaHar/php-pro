<?php

namespace AbstractFactory;

class LGFactory implements GUIFactory
{

    public function createLedTV(): LedTv
    {
        return new LGLedTV();
    }

    public function createLcdTv(): LcdTv
    {
        return new LGLcdTv();
    }
}
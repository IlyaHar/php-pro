<?php

namespace AbstractFactory;

class LGLcdTv implements LcdTv
{

    public function getTV(): string
    {
        return 'LG LCD TV';
    }
}
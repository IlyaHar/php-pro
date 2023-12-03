<?php

namespace AbstractFactory;

class SonyLcdTV implements LcdTv
{

    public function getTV(): string
    {
        return 'Sony LCD TV';
    }
}
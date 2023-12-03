<?php

namespace AbstractFactory;

class SonyLedTV implements LedTv
{

    public function getTV(): string
    {
        return 'Sony LED TV';
    }
}
<?php

namespace AbstractFactory;

class LGLedTV implements LedTv
{
    public function getTV(): string
    {
        return 'LG LED TV';

    }
}
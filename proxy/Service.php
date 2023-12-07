<?php

namespace proxy;

class Service implements ServiceInterface
{

    public function request()
    {
       echo "Виконання запиту... <br>";
    }
}
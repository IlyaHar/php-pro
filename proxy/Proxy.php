<?php

namespace proxy;

class Proxy implements ServiceInterface
{
    private $requestCount = 0;
    private Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }


    public function request()
    {
        $this->requestCount++;
        echo "Виклик методу request: {$this->requestCount} <br>";
        $this->service->request();
    }
}
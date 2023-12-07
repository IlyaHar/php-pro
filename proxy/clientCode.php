<?php

namespace proxy;
require_once '../vendor/autoload.php';

function clientCode(ServiceInterface $service)
{
    $service->request();
}

$service = new Service();
$proxy = new Proxy($service);

clientCode($proxy);
clientCode($proxy);

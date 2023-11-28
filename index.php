<?php
require_once __DIR__ . '/vendor/autoload.php';

interface Database {
    public function getData();
}
class Mysql implements Database
{
    public function getData()
    {
        return 'some data from database';
    }
}

class Controller implements Database
{
    private $adapter;
    public function __construct(Database $adapter)
    {
        $this->adapter = $adapter;
    }
    public function getData()
    {
        return $this->adapter->getData();
    }
}


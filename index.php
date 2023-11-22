<?php
require_once __DIR__ . '/vendor/autoload.php';

trait Trait1
{
   public function test() {
        return 1;
    }
}

trait Trait2
{
   public function test() {
        return 2;
    }
}

trait Trait3
{
    public function test() {
        return 3;
    }
}

 class Test
{
    use Trait1, Trait2, Trait3 {
        Trait1::test insteadof Trait2, Trait3;
        Trait2::test as test2;
        Trait3::test as test3;
    }
    function getSum() {
        return $this->test() + $this->test2() + $this->test3();
    }
 }

 $test = new Test;
dd($test->test(), $test->test2(), $test->test3(), $test->getSum());


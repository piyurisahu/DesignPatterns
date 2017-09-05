<?php
/**
 * Created by PhpStorm.
 * User: piyurisahu
 * Date: 04/09/17
 * Time: 2:07 PM
 */
class TestStrategyDesignPattern extends \PHPUnit\Framework\TestCase
{
    function  testAdd()
    {
        $cxt = new Context(new Add());

        $this->assertEquals(7,$cxt->doOperation(3,4));

    }

    function  testSubtract()
    {
        $cxt = new Context(new Subtract());

        $this->assertEquals(1,$cxt->doOperation(3,4));

    }

    function testDivide()
    {
        $ctx = new Context(new Divide());

        $this->assertEquals(2,$ctx->doOperation(4,2));
    }


}

Class Context
{
    private  $strategy;
    function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

     public function doOperation($a,$b)
    {
        return $this->strategy->doOperation($a,$b);
    }

}

interface Strategy
{
     function doOperation($a, $b);
}

class Add implements Strategy
{
    function doOperation($a, $b)
    {
        // TODO: Implement doOperation() method.
        return $a + $b;
    }
}

class Subtract implements Strategy
{

    function doOperation($a, $b)
    {
        return abs($a - $b);
    }
}

class Divide implements Strategy
{

    function doOperation($a, $b)
    {
        return $a / $b;
    }
}
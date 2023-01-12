<?php

namespace SlDemoComposerPackage\NarcissusLibrary\Tests;

use SlDemoComposerPackage\NarcissusLibrary\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function itSums()
    {
        $calculator = new Calculator();
        $sum = $calculator->sum(5, 10);

        $this->assertSame(15, $sum);
    }

     /**
      * @test
      */
    public function itMinus()
    {
        $calculator = new Calculator();
        $sum = $calculator->minus(10, 5);

        $this->assertSame(5, $sum);
    }
}

<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

require(__DIR__.'/../../practicals/Practical.php');
use practicals\Practical;

class PracticalTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testAdd(): void
    {
        $this->assertEquals(\Practical::add(1,3), 4);
    }

    /**
     * A basic unit test example.
     */
    public function testAddAlphabet(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        \Practical::add("abc","xyz");
    }

    /**
     * A basic unit test example.
     */
    public function testAddFloat(): void
    {
        $this->assertEquals(\Practical::add(1.5,3.5), 5);
    }

        /**
     * A basic unit test example.
     */
    public function testAddFloatInteger(): void
    {
        $this->assertEquals(\Practical::add(1.5,2), 3.5);
    }

        /**
     * A basic unit test example.
     */
    public function testAddStringInteger(): void
    {
        $this->assertIsInt(\Practical::add("2","3"), 5);
    }

        /**
     * A basic unit test example.
     */
    public function testAddStringFloat(): void
    {
        $this->assertIsNumeric(\Practical::add("1.5","3.5"), 5);
    }

    /**
     * A basic unit test example.
     */
    public function testAddAlphanumeric(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        \Practical::add("a1","2");
    }
}

?>

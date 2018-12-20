<?php

require_once __DIRNAME__ . '/../vendor/autoload.php';
require_once __DIRNAME__ . '/../src/formatWithCommas.php';

use PHPUnit\Framework\TestCase;

class FormatWithCommasTest extends TestCase
{
    public function testDoesNotJoinArraysWithOneItem()
    {
        $this->assertEquals('Apple', formatWithCommas(['Apple'], 'and'));
    }

    public function testJoinsArrayWithTwoItems()
    {
        $this->assertEquals('Apple and Banana', formatWithCommas(['Apple', 'Banana'], 'and'));
    }

    public function testJoinsArrayWithThreeItems()
    {
        $this->assertEquals('Apple, Banana or Carrot', formatWithCommas(['Apple', 'Banana', 'Carrot'], 'or'));
    }
}

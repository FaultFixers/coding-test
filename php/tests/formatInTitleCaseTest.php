<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/formatInTitleCase.php';

use PHPUnit\Framework\TestCase;

class FormatInTitleCaseTest extends TestCase
{
    public function testCapitalizeFirstLetterinEveryWord()
    {
        $this->assertEquals('An Hour Ago', formatInTitleCase('an hour ago'));
        $this->assertEquals('2 Minutes Ago', formatInTitleCase('2 minutes ago'));
        $this->assertEquals('CatDog', formatInTitleCase('catDog'));
    }

    public function testReturnsEmptyStringIfGivenEmptyString()
    {
        $this->assertEquals('', formatInTitleCase(''));
    }

    public function testReturnsNullIfGivenNull()
    {
        $this->assertEquals(null, formatInTitleCase(null));
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Given a non-string: 123
     */
    public function testThrowsIfGivenNonString()
    {
        formatInTitleCase(123);
    }
}

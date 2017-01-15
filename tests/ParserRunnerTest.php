<?php

namespace Hixman\Kata\Tests;

use Hixman\Kata\ParserRunner;

class ParserRunnerTest extends BaseTest
{
    /**
     * We create a test for ParserRunner. next step.
     */
    public function testCreateLinkParserTest()
    {
        //GIVEN
        //WHEN
        $parserRunner = new ParserRunner();
        //THEN
        $this->assertInstanceOf(ParserRunner::class, $parserRunner);
    }
}

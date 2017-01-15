<?php

namespace Hixman\Kata\Tests;

use Hixman\Kata\ParserRunner;

class ParserRunnerTest extends BaseTest
{
    public function testCreateLinkParserTest()
    {
        //GIVEN
        //WHEN
        $parserRunner = new ParserRunner();
        //THEN
        $this->assertInstanceOf(ParserRunner::class, $parserRunner);
    }
}

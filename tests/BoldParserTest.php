<?php

namespace Hixman\Kata\Tests;

use Hixman\Kata\BoldParser;

class BoldParserTest extends BaseTest
{
    public function testCreateBoldParser()
    {
        //GIVEN
        //WHEN
        $boldParser = new BoldParser();
        //THEN
        $this->assertInstanceOf(BoldParser::class, $boldParser);
    }
}

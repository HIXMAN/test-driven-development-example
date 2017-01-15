<?php

namespace Hixman\Kata\Tests;

use Hixman\Kata\BoldParser;

class BoldParserTest extends BaseTest
{
    /**
     * With this code we are declaring we need a class
     * called BoldParser and we need to instantiate it.
     * We are now in a red state because our test does
     * not pass. so lets fix this in the next step.
     */
    public function testCreateBoldParser()
    {
        //GIVEN
        //WHEN
        $boldParser = new BoldParser();
        //THEN
        $this->assertInstanceOf(BoldParser::class, $boldParser);
    }
}

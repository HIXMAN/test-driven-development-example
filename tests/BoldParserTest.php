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

    /**
     * Here we are defining how BoldParser will parse a text
     * defining the method naming and content returned.
     */
    public function testBoldParserParseText()
    {
        //GIVEN
        $expectedText = 'Hey! you are learning <b>TDD</b> with this awesome example.';
        $text = 'Hey! you are learning **TDD** with this awesome example.';
        $boldParser = new BoldParser();
        //WHEN
        $parsedText = $boldParser->parse($text);
        //THEN
        $this->assertEquals($expectedText, $parsedText);
    }
}

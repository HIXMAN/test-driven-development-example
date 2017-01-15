<?php

namespace Hixman\Kata\Tests;

use Hixman\Kata\BoldParser;
use Hixman\Kata\ParserInterface;

class BoldParserTest extends BaseTest
{
    public function testCreateBoldParser()
    {
        //GIVEN
        //WHEN
        $boldParser = new BoldParser();
        //THEN
        $this->assertInstanceOf(BoldParser::class, $boldParser);
        $this->assertInstanceOf(ParserInterface::class, $boldParser);
    }

    public function testBoldParserParseText()
    {
        //GIVEN
        $expectedText = $this->mockBoldExpectedText();
        $text = $this->mockBoldText();
        $boldParser = new BoldParser();
        //WHEN
        $parsedText = $boldParser->parse($text);
        //THEN
        $this->assertEquals($expectedText, $parsedText);
    }


}

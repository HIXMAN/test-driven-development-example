<?php

namespace Hixman\Kata\Tests;

use Hixman\Kata\LinkParser;
use Hixman\Kata\ParserInterface;

class LinkParserTest extends BaseTest
{
    public function testCreateLinkParserTest()
    {
        //GIVEN
        //WHEN
        $linkParser = new LinkParser();
        //THEN
        $this->assertInstanceOf(LinkParser::class, $linkParser);
        $this->assertInstanceOf(ParserInterface::class, $linkParser);
    }

    /**
     * We have to be more sofisticated with the string
     * we are testing so lets add two occurences instead
     * of only one. And lets pull up our mock texts to
     * base test to make reusable.
     */
    public function testImageParserParseImage()
    {
        //GIVEN
        $expectedText = $this->mockLinkExpectedText();
        $text = $this->mockLinkText();
        $linkParser = new LinkParser();
        //WHEN
        $parsedText = $linkParser->parse($text);
        //THEN
        $this->assertEquals($expectedText, $parsedText);
    }


}

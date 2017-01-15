<?php

namespace Hixman\Kata\Tests;

use Hixman\Kata\LinkParser;

class LinkParserTest extends BaseTest
{
    public function testCreateLinkParserTest()
    {
        //GIVEN
        //WHEN
        $linkParser = new LinkParser();
        //THEN
        $this->assertInstanceOf(LinkParser::class, $linkParser);
    }

    public function testImageParserParseImage()
    {
        //GIVEN
        $expectedText = 'Hey! Check this link <a href="http://url.to.path.com/">link text</a> is awe)some!.';
        $text = 'Hey! Check this link [link text](http://url.to.path.com/) is awe)some!.';
        $linkParser = new LinkParser();
        //WHEN
        $parsedText = $linkParser->parse($text);
        //THEN
        $this->assertEquals($expectedText, $parsedText);
    }
}

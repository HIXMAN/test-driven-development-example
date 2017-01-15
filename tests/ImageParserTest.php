<?php

namespace Hixman\Kata\Tests;

use Hixman\Kata\ImageParser;
use Hixman\Kata\ParserInterface;

class ImageParserTest extends BaseTest
{
    public function testCreateImageParserTest()
    {
        //GIVEN
        //WHEN
        $imageParser = new ImageParser();
        //THEN
        $this->assertInstanceOf(ImageParser::class, $imageParser);
        /**
         * We assert that parser is an instance of ParserInterface
         */
        $this->assertInstanceOf(ParserInterface::class, $imageParser);
    }

    public function testImageParserParseImage()
    {
        //GIVEN
        $expectedText = 'Hey! Check this image <img src="http://url.to.image.com/tdd.jpg" alt="image"/> awe)some!.';
        $text = 'Hey! Check this image ![image](http://url.to.image.com/tdd.jpg) awe)some!.';
        $imageParser = new ImageParser();
        //WHEN
        $parsedText = $imageParser->parse($text);
        //THEN
        $this->assertEquals($expectedText, $parsedText);
    }
}

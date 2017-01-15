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
        $this->assertInstanceOf(ParserInterface::class, $imageParser);
    }

    public function testImageParserParseImage()
    {
        //GIVEN
        $expectedText = $this->mockImageExpectedText();
        $text = $this->mockImageText();
        $imageParser = new ImageParser();
        //WHEN
        $parsedText = $imageParser->parse($text);
        //THEN
        $this->assertEquals($expectedText, $parsedText);
    }


}

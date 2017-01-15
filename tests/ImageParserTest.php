<?php

namespace Hixman\Kata\Tests;

use Hixman\Kata\ImageParser;

class ImageParserTest extends BaseTest
{
    public function testCreateImageParserTest()
    {
        //GIVEN
        //WHEN
        $imageParser = new ImageParser();
        //THEN
        $this->assertInstanceOf(ImageParser::class, $imageParser);
    }

    /**
     * Now we define in test a new method to parse an image in ImageParser class. Lets go to next step.
     */
    public function testImageParserParseImage()
    {
        //GIVEN
        $expectedText = 'Hey! Check this image <img src="http://url.to.image.com/tdd.jpg" alt="image"/> awesome.';
        $text = 'Hey! Check this image ![image](http://url.to.image.com/tdd.jpg).';
        $imageParser = new ImageParser();
        //WHEN
        $parsedText = $imageParser->parse($text);
        //THEN
        $this->assertEquals($expectedText, $parsedText);
    }
}

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
}

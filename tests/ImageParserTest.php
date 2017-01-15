<?php

namespace Hixman\Kata\Tests;

use Hixman\Kata\ImageParser;

class ImageParserTest extends BaseTest
{
    /**
     * We create a test to check that a class can be instantiated properly.
     */
    public function testCreateImageParserTest()
    {
        //GIVEN
        //WHEN
        $imageParser = new ImagePaser();
        //THEN
        $this->assertInstanceOf(ImageParser::class, $imageParser);
    }
}

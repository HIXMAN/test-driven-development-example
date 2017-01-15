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
}

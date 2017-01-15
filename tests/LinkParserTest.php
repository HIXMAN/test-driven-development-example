<?php

namespace Hixman\Kata\Tests;

use Hixman\Kata\LinkParser;

class LinkParserTest extends BaseTest
{
    /**
     * We add a new test that checks if a
     * LinkParser can be instantiated. Next step!
     */
    public function testCreateLinkParserTest()
    {
        //GIVEN
        //WHEN
        $linkParser = new LinkParser();
        //THEN
        $this->assertInstanceOf(LinkParser::class, $linkParser);
    }
}

<?php

namespace Hixman\Kata\Tests;

use Hixman\Kata\BoldParser;
use Hixman\Kata\ImageParser;
use Hixman\Kata\LinkParser;
use Hixman\Kata\ParserRunner;

class ParserRunnerTest extends BaseTest
{
    public function testCreateLinkParserTest()
    {
        //GIVEN
        //WHEN
        $parserRunner = new ParserRunner();
        //THEN
        $this->assertInstanceOf(ParserRunner::class, $parserRunner);
    }

    public function testParserRunnerRunsABunchOfParser()
    {
        //GIVEN
        $text = $this->mockParserRunnerText();
        $expectedText = $this->mockParserRunnerExpectedText();
        $boldParser = new BoldParser();
        $linkParser = new LinkParser();
        $imageParser = new ImageParser();
        $parserRunner = new ParserRunner();
        $parserRunner
            ->addParser($boldParser)
            ->addParser($linkParser)
            ->addParser($imageParser);
        //WHEN
        $parsedText = $parserRunner->parse($text);
        //THEN
        $this->assertEquals($expectedText, $parsedText);
    }


}

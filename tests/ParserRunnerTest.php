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

    /**
     * Here we have our bigger test for this kata.
     * Firs we need to force to ParserRunner to
     * implement addParser(ParserInterface) method
     * this method will attach parser to ParserRunner.
     * Then we have to create a parse(string) method
     * to run all parser with the given string.
     * next step.
     */
    public function testParserRunnerRunsABunchOfParser()
    {
        //GIVEN
        $text = 'this is a bold text **bold text** this ![alt text](url.image) an [link text](url.link) image ![alt text](url.image) this is a link [link text](url.link)';
        $expectedText = 'this is a bold text <b>bold text</b> this <img src="url.image" alt="alt text"/> an <a href="url.link">link text</a> image <img src="url.image" alt="alt text"/> this is a link <a href="url.link">link text</a>';
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

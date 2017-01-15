<?php

namespace Hixman\Kata\Tests;

abstract class BaseTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @return string
     */
    protected function mockBoldExpectedText()
    {
        $expectedText = 'Hey! you are learning <b>TDD</b> with this awesome example.';
        return $expectedText;
    }

    /**
     * @return string
     */
    protected function mockBoldText()
    {
        $text = 'Hey! you are learning **TDD** with this awesome example.';
        return $text;
    }

    /**
     * @return string
     */
    protected function mockImageExpectedText()
    {
        $expectedText = 'Hey! Check <img src="http://url.to.image.com/tdd.jpg" alt="image"/> image <img src="http://url.to.image.com/tdd.jpg" alt="image"/> awe)some!.';
        return $expectedText;
    }

    /**
     * @return string
     */
    protected function mockImageText()
    {
        $text = 'Hey! Check ![image](http://url.to.image.com/tdd.jpg) image ![image](http://url.to.image.com/tdd.jpg) awe)some!.';
        return $text;
    }

    /**
     * @return string
     */
    protected function mockLinkExpectedText()
    {
        $expectedText = 'Hey! Check <a href="http://url.to.path.com/">link text</a> link <a href="http://url.to.path.com/">link text</a> is awe)some!.';
        return $expectedText;
    }

    /**
     * @return string
     */
    protected function mockLinkText()
    {
        $text = 'Hey! Check [link text](http://url.to.path.com/) link [link text](http://url.to.path.com/) is awe)some!.';
        return $text;
    }

    /**
     * @return string
     */
    protected function mockParserRunnerText()
    {
        return 'this is a bold text **bold text** this ![alt text](url.image) an [link text](url.link) image ![alt text](url.image) this is a link [link text](url.link)';
    }

    /**
     * @return string
     */
    protected function mockParserRunnerExpectedText()
    {
        return 'this is a bold text <b>bold text</b> this <img src="url.image" alt="alt text"/> an <a href="url.link">link text</a> image <img src="url.image" alt="alt text"/> this is a link <a href="url.link">link text</a>';
    }
}

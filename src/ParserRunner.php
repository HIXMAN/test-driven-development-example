<?php

namespace Hixman\Kata;

/**
 * We have two new methods addParser that simply
 * adds new parser to the parsers array and parse(string)
 * that execute all parsers added to the parsers array.
 * At this point when i run my test suite i realize that
 * my regular expressions didnt work as expected when the
 * string given has several occurences. So i had to fix
 * regular expressions. And we will fix and refactor our
 * ImageParserTest and LinkParserTest in the next step.
 * Dont forget to run your test.
 * Class ParserRunner
 * @package Hixman\Kata
 */
class ParserRunner
{

    /**
     * @var ParserInterface[]
     */
    private $parsers = [];

    /**
     * @param ParserInterface $parser
     * @return ParserRunner
     */
    public function addParser(ParserInterface $parser) : self
    {
        $this->parsers[] = $parser;
        return $this;
    }

    /**
     * @param string $text
     * @return string
     */
    public function parse(string $text) : string
    {
        $parsedText = $text;
        foreach ($this->parsers as $parser) {
            $parsedText = $parser->parse($parsedText);
        }
        return $parsedText;
    }
}

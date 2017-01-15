<?php

namespace Hixman\Kata;

/**
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

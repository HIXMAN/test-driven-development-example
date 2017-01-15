<?php

namespace Hixman\Kata;

/**
 * Interface ParserInterface
 * @package Hixman\Kata
 */
interface ParserInterface
{
    /**
     * Ok, here it is the method that all parsers will expose to its collaborators.
     * Next step.
     * @param string $text
     * @return string
     */
    public function parse(string $text) : string;
}

<?php

namespace Hixman\Kata;

/**
 * Interface ParserInterface
 * @package Hixman\Kata
 */
interface ParserInterface
{
    /**
     * @param string $text
     * @return string
     */
    public function parse(string $text) : string;
}

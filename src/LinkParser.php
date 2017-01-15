<?php

namespace Hixman\Kata;

/**
 * Class LinkParser
 * @package Hixman\Kata
 */
class LinkParser extends AbstractParser implements ParserInterface
{
    protected function pattern() : string
    {
        return '/\[(.*)\]\((.*?)\)/';
    }

    protected function replace() : string
    {
        return '<a href="$2">$1</a>';
    }
}

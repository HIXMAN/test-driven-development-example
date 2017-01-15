<?php

namespace Hixman\Kata;

/**
 * Class ImageParser
 * @package Hixman\Kata
 */
class ImageParser extends AbstractParser implements ParserInterface
{
    protected function pattern() : string
    {
        return '/!\[(.*?)\]\((.*?)\)/';
    }

    protected function replace() : string
    {
        return '<img src="$2" alt="$1"/>';
    }
}

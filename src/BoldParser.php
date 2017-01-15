<?php

namespace Hixman\Kata;

/**
 * Class BoldParser
 * @package Hixman\Kata
 */
class BoldParser extends AbstractParser
{
    protected function pattern() : string
    {
        return '/\*\*(.*)\*\*/';
    }

    protected function replace() : string
    {
        return '<b>$1</b>';
    }
}

<?php

namespace Hixman\Kata;

/**
 * Class BoldParser
 * @package Hixman\Kata
 */
class BoldParser
{
    /**
     * @param string $text
     * @return string
     */
    public function parse(string $text) : string {
        $pattern = '/\*\*(.*)\*\*/';
        $replace = '<b>$1</b>';
        return preg_replace($pattern, $replace, $text);
    }
}

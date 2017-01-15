<?php

namespace Hixman\Kata;

/**
 * Class ImageParser
 * @package Hixman\Kata
 */
class ImageParser
{
    /**
     * @param string $text
     * @return string
     */
    public function parse(string $text) : string
    {
        $pattern = '/!\[(.*)\]\((.*?)\)/';
        $replace = '<img src="$2" alt="$1"/>';
        return preg_replace($pattern, $replace, $text);
    }
}

<?php

namespace Hixman\Kata;

/**
 * Class ImageParser
 * @package Hixman\Kata
 */
class ImageParser
{
    /**
     * Flow is exactly the same as the BoldParser this
     * give us a good information due to do a refactor.
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

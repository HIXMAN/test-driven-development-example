<?php

namespace Hixman\Kata;

class LinkParser
{
    /**
     * Add a parse method to replace our
     * link syntax to html syntax
     * @param string $text
     * @return string
     */
    public function parse(string $text) : string
    {
        $pattern = '/\[(.*)\]\((.*?)\)/';
        $replace = '<a href="$2">$1</a>';
        return preg_replace($pattern, $replace, $text);
    }
}

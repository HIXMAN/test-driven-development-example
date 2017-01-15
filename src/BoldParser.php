<?php

namespace Hixman\Kata;

/**
 * Class BoldParser
 * @package Hixman\Kata
 */
class BoldParser
{
    /**
     * A regular expression that finds our pattern in the
     * text given and the markup template to replace it.
     * Now we are green again. Lets go to the next step.
     * @param string $text
     * @return string
     */
    public function parse(string $text) : string {
        $pattern = '/\*\*(.*)\*\*/';
        $replace = '<b>$1</b>';
        return preg_replace($pattern, $replace, $text);
    }
}

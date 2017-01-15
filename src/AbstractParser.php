<?php

namespace Hixman\Kata;

/**
 * Class AbstractParser
 * @package Hixman\Kata
 */
abstract class AbstractParser
{
    /**
     * @return string
     */
    abstract protected function pattern() : string ;

    /**
     * @return string
     */
    abstract protected function replace() : string ;

    /**
     * @param string $text
     * @return string
     */
    public function parse(string $text) : string
    {
        $pattern = $this->pattern();
        $replace = $this->replace();
        return preg_replace($pattern, $replace, $text);
    }
}

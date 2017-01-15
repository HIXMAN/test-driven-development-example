<?php

namespace Hixman\Kata;

/**
 * As you can see we have created a new abstract class
 * called AbstractParser to extract our method parse($text)
 * to a common class (DRY). Dont forget to run your test
 * to see that we are still green after this refactor
 * this is a core concept of TDD.
 * In all sub-classes BoldPaser, ImageParser and LinkParser
 * we have to implement this abstract methods to give the
 * proper pattern and replate to the preg_replace function.
 * Next step.
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

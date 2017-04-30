<?php

namespace Mufuphlex\Textonic\Tokenizer;

/**
 * Class TokenizerLanguageAbstract
 * @package Mufuphlex\Textonic\Tokenizer
 */
abstract class TokenizerLanguageAbstract extends TokenizerAbstract
{
    const LETTERS = '';

    /**
     * @param string $str
     * @return array
     */
    public function tokenize($str)
    {
        return $this->tokenizeWithPreg($str);
    }

    /**
     * @return string
     */
    protected function getPreg()
    {
        return '/[^' . static::LETTERS . '0-9]/i';
    }
}
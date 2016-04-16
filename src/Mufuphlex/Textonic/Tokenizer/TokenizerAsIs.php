<?php

namespace Mufuphlex\Textonic\Tokenizer;

/**
 * Class TokenizerAsIs
 * @package Mufuphlex\Textonic\Tokenizer
 */
class TokenizerAsIs extends TokenizerAbstract
{
    /**
     * @param string $str
     * @return array
     */
    public function tokenize($str)
    {
        $str = $this->sanitize($str);

        if ($str !== '') {
            return array(mb_strtolower($str));
        }

        return array();
    }
}
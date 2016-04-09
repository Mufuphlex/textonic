<?php
namespace Mufuphlex\Textonic\Tokenizer;

/**
 * Class TokenizerEn
 * @package Mufuphlex\Textonic\Tokenizer
 */
class TokenizerEn extends TokenizerAbstract
{
    const EN_LETTERS = 'abcdefghijklmonpqrstuvwxyz';

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
        return '/[^' . self::EN_LETTERS . '0-9]/i';
    }
}
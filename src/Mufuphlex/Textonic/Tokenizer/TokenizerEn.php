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
        $str = $this->sanitizeByPreg($str, '/[^' . self::EN_LETTERS . '0-9]/siu');
        return $this->makeTokensByExplosion($str);
    }
}
<?php
namespace Mufuphlex\Textonic\Tokenizer;

/**
 * Class TokenizerDefault
 * @package Mufuphlex\Textonic\Tokenizer
 */
class TokenizerDefault extends TokenizerAbstract
{
    /**
     * @param string $str
     * @return array
     */
    public function tokenize($str)
    {
        $str = $this->trim($str);
        return $this->makeTokensByExplosion($str);
    }
}
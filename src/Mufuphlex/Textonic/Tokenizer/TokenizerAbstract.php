<?php

namespace Mufuphlex\Textonic\Tokenizer;

/**
 * Class TokenizerAbstract
 * @package Mufuphlex\Textonic\Tokenizer
 */
abstract class TokenizerAbstract implements TokenizerInterface
{
    /**
     * @param $str
     * @return mixed
     */
    protected function trim($str)
    {
        return trim($str, " \t\r\n");
    }

    /**
     * @param string $str
     * @param string $preg
     * @return string
     */
    protected function sanitizeByPreg($str, $preg)
    {
        $str = $this->trim($str);
        return preg_replace($preg, ' ', $str);
    }

    /**
     * @param string $str
     * @return array
     */
    protected function makeTokensByExplosion($str)
    {
        $parts = explode(' ', $str);
        $tokens = array();

        foreach ($parts as $part) {
            if ($part = $this->trim($part)) {
                $tokens[] = mb_strtolower($part);
            }
        }

        return $tokens;
    }
}
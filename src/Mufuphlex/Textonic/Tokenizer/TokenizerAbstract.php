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
     * @return string
     */
    protected function sanitize($str)
    {
        $str = $this->trim($str);
        $str = preg_replace('/[ \s\t\r\n]+/su', ' ', $str);
        $str = preg_replace('/[ ]{2,}/', ' ', $str);
        return $str;
    }

    /**
     * @param string $str
     * @return array
     */
    protected function makeTokensByExplosion($str)
    {
        $preg = $this->getPreg();
        $tokens = array();
        $parts = explode(' ', $str);

        foreach ($parts as $part) {
            if ($preg !== null) {
                $part = preg_replace($preg, ' ', $part);
            }

            $part = trim($part);

            if (!$part) {
                continue;
            }

            if (mb_strpos($part, ' ') !== false) {
                continue;
            }

            $tokens[] = mb_strtolower($part);
        }

        return $tokens;
    }

    /**
     * @return null|string
     */
    protected function getPreg()
    {
        return null;
    }

    /**
     * @param string $str
     * @return array
     */
    protected function tokenizeWithPreg($str)
    {
        $str = $this->sanitize($str);

        if (!$str) {
            return array();
        }

        return $this->makeTokensByExplosion($str);
    }
}
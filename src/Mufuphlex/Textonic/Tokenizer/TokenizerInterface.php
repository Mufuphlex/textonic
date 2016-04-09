<?php
namespace Mufuphlex\Textonic\Tokenizer;

/**
 * Interface TokenizerInterface
 * @package Mufuphlex\Textonic\Tokenizer
 */
interface TokenizerInterface
{
    /**
     * @param string $str
     * @return array
     */
    public function tokenize($str);
}
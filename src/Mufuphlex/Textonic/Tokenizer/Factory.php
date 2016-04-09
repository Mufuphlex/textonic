<?php

namespace Mufuphlex\Textonic\Tokenizer;

/**
 * Class Factory
 * @package Mufuphlex\Textonic\Tokenizer
 */
class Factory
{
    /**
     * @param string $tokenizerType
     * @return TokenizerInterface
     */
    public static function make($tokenizerType)
    {
        if (!is_string($tokenizerType)) {
            throw new \InvalidArgumentException('$tokenizerType must be a string, '.gettype($tokenizerType).' given');
        }

        $className = 'Tokenizer'.ucfirst($tokenizerType);

        if (!class_exists($className)) {
            throw new \RuntimeException('There is no Tokenizer with class name "'.$className.'"');
        }

        /** @var TokenizerInterface $tokenizer */
        $tokenizer = new $className;

        if (!$tokenizer instanceof TokenizerInterface) {
            throw new \RuntimeException('Class "'.$className.'" does not implement interface TokenizerInterface');
        }

        return $tokenizer;
    }
}
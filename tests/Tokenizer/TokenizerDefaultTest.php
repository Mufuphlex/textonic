<?php

namespace Mufuphlex\Tests\Textonic\Tokenizer;

use Mufuphlex\Textonic\Tokenizer\Factory;

class TokenizerDefaultTest extends \PHPUnit_Framework_TestCase
{
    public function testTokenize()
    {
        $tokenizer = $this->makeTokenizer();
        $text = 'This is a token 123';
        $tokens = $tokenizer->tokenize($text);
        $this->assertEquals(
            array(
                'this',
                'is',
                'a',
                'token',
                '123',
            ),
            $tokens
        );
    }

    /**
     * @return \Mufuphlex\Textonic\Tokenizer\TokenizerInterface
     */
    private function makeTokenizer()
    {
        return Factory::make('default');
    }
}
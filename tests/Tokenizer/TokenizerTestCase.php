<?php

namespace Mufuphlex\Tests\Textonic\Tokenizer;
use Mufuphlex\Textonic\Tokenizer\Factory;

/**
 * Class TokenizerTestCase
 * @package Mufuphlex\Tests\Textonic\Tokenizer
 */
abstract class TokenizerTestCase extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    protected $type;

    /** @var string */
    protected $text = 'This is a token 123 русский cuộc';

    /** @var array */
    protected $tokens = array();

    /** @var string */
    protected $emptyTokensStr = " \r\n\t    \n\t\r ";

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        mb_internal_encoding('utf-8');
        mb_regex_encoding('utf-8');
    }

    public function testTokenize()
    {
        $tokenizer = $this->makeTokenizer();
        $tokens = $tokenizer->tokenize($this->text);
        $this->assertEquals($this->tokens, $tokens);
    }

    /**
     * @return \Mufuphlex\Textonic\Tokenizer\TokenizerInterface
     */
    protected function makeTokenizer()
    {
        return Factory::make($this->type);
    }

    protected function checkEmptyTokens()
    {
        $tokenizer = $this->makeTokenizer();
        $this->assertEmpty($tokenizer->tokenize($this->emptyTokensStr));
    }
}
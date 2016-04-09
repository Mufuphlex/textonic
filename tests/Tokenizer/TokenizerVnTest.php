<?php

namespace Mufuphlex\Tests\Textonic\Tokenizer;

class TokenizerVnTest extends TokenizerTestCase
{
    /** @var string */
    protected $type = 'vn';

    /** @var array */
    protected $tokens = array(
        'this',
        'is',
        'a',
        'token',
        '123',
        'cuộc',
    );

    public function testEmptyTokens()
    {
        parent::checkEmptyTokens();
    }
}
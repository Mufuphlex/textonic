<?php

namespace Mufuphlex\Tests\Textonic\Tokenizer;

class TokenizerAsIsTest extends TokenizerTestCase
{
    /** @var string */
    protected $type = 'AsIs';

    /** @var array */
    protected $tokens = array(
        'this is a token 123 русский cuộc',
    );

    public function testEmptyTokens()
    {
        parent::checkEmptyTokens();
    }
}
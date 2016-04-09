<?php

namespace Mufuphlex\Tests\Textonic\Tokenizer;

class TokenizerDefaultTest extends TokenizerTestCase
{
    /** @var string */
    protected $type = 'default';

    /** @var array */
    protected $tokens = array(
        'this',
        'is',
        'a',
        'token',
        '123',
        'русский',
        'cuộc',
    );
}
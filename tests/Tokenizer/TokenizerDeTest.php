<?php

namespace Mufuphlex\Tests\Textonic\Tokenizer;

class TokenizerDeTest extends TokenizerTestCase
{
    /** @var string */
    protected $type = 'de';

    /** @var string */
    protected $text = 'Große Ärzte über Österreich 2';

    /** @var array */
    protected $tokens = array(
        'große',
        'ärzte',
        'über',
        'österreich',
        '2',
    );

    public function testEmptyTokens()
    {
        parent::checkEmptyTokens();
    }
}
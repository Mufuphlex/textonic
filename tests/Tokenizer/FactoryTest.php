<?php

namespace Mufuphlex\Tests\Textonic\Tokenizer;

use Mufuphlex\Textonic\Tokenizer\Factory;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider factoryProvider
     */
    public function testMake($type, $class)
    {
        $tokenizer = Factory::make($type);
        $this->assertInstanceOf($class, $tokenizer);
    }

    /**
     * @dataProvider notStringDataProvider
     * @expectedException \InvalidArgumentException
     */
    public function testMakeFailsOnNotString($type)
    {
        Factory::make($type);
    }

    /**
     * @expectedException \RuntimeException
     * @expectedExceptionMessageRegExp  /There is no Tokenizer with class name "[^"]*TokenizerRndClass[^"]+"/
     */
    public function testMakeFailsOnNonExistingClass()
    {
        $type = 'RndClass'.microtime(true).md5(time());
        Factory::make($type);
    }

    /**
     * @expectedException \RuntimeException
     * @expectedExceptionMessage  Class "Mufuphlex\Textonic\Tokenizer\TokenizerInvalid" does not implement interface TokenizerInterface
     */
    public function testMakeFailsOnInvalidInterface()
    {
        Factory::make('invalid');
    }

    public function factoryProvider()
    {
        return array(
            array('default', '\Mufuphlex\Textonic\Tokenizer\TokenizerDefault'),
            array('en', '\Mufuphlex\Textonic\Tokenizer\TokenizerEn'),
            array('vn', '\Mufuphlex\Textonic\Tokenizer\TokenizerVn'),
        );
    }

    /**
     * @return array
     */
    public function notStringDataProvider()
    {
        return array(
            array(1),
            array(1.0),
            array(array()),
            array(new \stdClass()),
            array(true),
            array(null),
            array(xml_parser_create()),
        );
    }
}
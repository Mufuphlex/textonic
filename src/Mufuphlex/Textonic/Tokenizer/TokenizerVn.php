<?php
namespace Mufuphlex\Textonic\Tokenizer;

/**
 * Class TokenizerVn
 * @package Mufuphlex\Textonic\Tokenizer
 */
class TokenizerVn extends TokenizerAbstract
{
    const VN_LETTERS = 'aáàảạãăắằẳặẵâấầẩậẫbcdđeéèẻẹẽêếềểệễfghiíìỉĩịjklmnoóòỏọõôốồổộỗơớờởợỡpqrstuúùủụũưứừửựữvxyýỳỷỵỹzwĐ';

    /**
     * @param string $str
     * @return array
     */
    public function tokenize($str)
    {
        $str = $this->sanitizeByPreg($str, '/[^' . self::VN_LETTERS . '0-9]/siu');
        return $this->makeTokensByExplosion($str);
    }
}
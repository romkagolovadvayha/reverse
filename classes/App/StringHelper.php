<?php

namespace App;

class StringHelper
{
    public static function revertCharacters(string $str): string
    {
        if (!preg_match_all("/\b(\w+)\b/ui", $str, $matches)) {
            return $str;
        }

        foreach ($matches[0] as $word) {
            $nWord = self::mbStrRev($word);
            $str = str_replace($word, $nWord, $str);
        }

        return $str;
    }

    public static function mbStrRev(string $string, string $encoding = null): string
    {
        $chars = mb_str_split($string, 1, $encoding ?: mb_internal_encoding());
        return implode('', array_reverse($chars));
    }
}
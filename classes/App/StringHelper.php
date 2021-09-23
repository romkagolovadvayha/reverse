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
            $nWord = mb_strtolower(self::mbStrRev($word));
            $firstChar = mb_substr($nWord, 0, 1);
            if (mb_strtolower($firstChar) !== mb_strtoupper($firstChar)) {
//            if (preg_match('/[А-ЯЁ]/', $firstChar) !== false) {
                $nWord = mb_strtoupper($firstChar) . mb_substr($nWord, 1);
            }
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
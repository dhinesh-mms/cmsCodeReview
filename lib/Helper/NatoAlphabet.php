<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\Helper;

class NatoAlphabet
{
    public static function convertToNato($word) {

        $replacement =  [
            "a"=>"Alpha", "b"=>"Bravo", "c"=>"Charlie",
            "d"=>"Delta", "e"=>"Echo", "f"=>"Foxtrot",
            "g"=>"Golf", "h"=>"Hotel", "i"=>"India",
            "j"=>"Juliet", "k"=>"Kilo", "l"=>"Lima",
            "m"=>"Mike", "n"=>"November", "o"=>"Oscar",
            "p"=>"Papa", "q"=>"Quebec", "r"=>"Romeo",
            "s"=>"Sierra", "t"=>"Tango", "u"=>"Uniform",
            "v"=>"Victor", "w"=>"Whiskey", "x"=>"X-Ray",
            "y"=>"Yankee", "z"=>"Zulu", "0"=>"Zero",
            "1"=>"One", "2"=>"Two", "3"=>"Three",
            "4"=>"Four", "5"=>"Five", "6"=>"Six",
            "7"=>"Seven", "8"=>"Eight", "9"=>"Nine",
            "-"=>"Dash", " "=>"(Space)"
        ];

        $converted = [];

        for ($i=0; $i < strlen($word); $i++) {
            $currentLetter  = substr($word, $i, 1);

            if (!empty($replacement[$currentLetter])) {
                $convertedWord = strtolower($replacement[$currentLetter]);
            } elseif (!empty($replacement[strtolower($currentLetter)])) {
                $convertedWord = $replacement[strtolower($currentLetter)];
            } else {
                $convertedWord = $currentLetter;
            }
            $converted[] = $convertedWord;
        }

        return implode(' ', $converted);
    }
}

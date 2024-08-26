<?php

$strings = ["Hello", "World", "PHP", "Programming", "Ass"];

function countVowels($str)
{
    $vowelCount = preg_match_all('/[aeiou]/i', $str);
    return $vowelCount;
}

foreach ($strings as $string) {
    $vowelCount = countVowels($string);

    $reversedString = strrev($string);

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString<br>";
}

?>
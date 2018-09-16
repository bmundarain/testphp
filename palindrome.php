<?php

class Palindrome
{
    public static function isPalindrome($word)
    {
        if(!strcmp(strtoupper($word), strrev(strtoupper($word))))
            return TRUE;
        else
            return FALSE;
    }
}

echo Palindrome::isPalindrome('Deleveled');
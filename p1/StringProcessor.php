<?php

class StringProcessor
{
    # Properties
    private $inputString;

    # Methods
    public function __construct($inputString)
    {
        $this->inputString = $inputString;
    }

    public function isPalindrome()
    {
        # TODO: Write actual palindrome logic
        return true;
    }

    public function isBigWord()
    {
        return strlen($this->inputString) > 7;
    }
}
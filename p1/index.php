<?php

function isPalindrome($inputString)
{
}

function isBigWord($inputString)
{
    return strlen($inputString) > 7;
    
    // if (strlen($inputString) > 7) {
    //     return true;
    // } else {
    //     return false;
    // }
}

$inputString = 'mississippi';

$isBigWord = isBigWord($inputString); // true/false

require 'index-view.php';
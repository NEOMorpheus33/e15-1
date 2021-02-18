<?php

session_start();

require 'StringProcessor.php';

$inputString = $_GET['inputString'];

$stringProcessor = new StringProcessor($inputString);

$_SESSION['results'] = [
    'isPalindrome' => $stringProcessor->isPalindrome(),
    'isBigWord' => $stringProcessor->isBigWord(),
    'inputString' => $inputString
];

header('Location: index.php');
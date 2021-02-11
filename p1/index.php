<?php

session_start();

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    // $isBigWord = $results['isBigWord'];
    // $isPalindrome = $results['isPalindrome'];
    // $inputString = $results['inputString'];

    extract($results);

    $_SESSION['results'] = null;
}

require 'index-view.php';
<?php

function getGeneratePassword($text) {
    $set_characters = '0123456789qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM!£$%&/()?@#,.;:<>';
    $number = '0123456789';
    $letterLower = 'qwertyuioplkjhgfdsazxcvbnm';
    $letterUpper = 'QWERTYUIOPLKJHGFDSAZXCVBNM';
    $letterSpecial = '!£$%&/()?@#,.;:<>';
    $password = '';

    for($i = 0; $i < ($text/4); $i++) {
        $password .=  $number[rand (0, strlen($number)-1)] . $letterLower[rand (0, strlen($number)-1)] . $letterSpecial[rand (0, strlen($letterSpecial)-1)] . $letterUpper[rand (0, strlen($letterUpper)-1)] ;
    }

    return $password;
};
?>
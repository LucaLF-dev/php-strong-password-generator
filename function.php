<?php

function getGeneratePassword($text) {
    $set_characters = '0123456789qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM!£$%&/()?@#,.;:<>';
    $password = '';

    for($i = 0; $i < $text; $i++) {
        $password .= $set_characters[rand (0, strlen($set_characters)-1)];
    }

    return $password;
};


?>
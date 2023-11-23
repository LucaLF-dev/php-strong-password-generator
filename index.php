<?php 

$password_lenght = $_GET['password_lenght'];

var_dump($password_lenght);

function getGeneratePassword($text) {
    $set_characters = '0123456789qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM!£$%&/()?@#,.;:<>';
    $password = '';

    for($i = 0; $i < $text; $i++) {
        $password .= $set_characters[rand (0, strlen($set_characters)-1)];
    }

    return $password;
};

$password = getGeneratePassword($password_lenght);

var_dump($password);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Genarator</title>
</head>
<body>

<div>
    <div class="container">
        <form action="" method="GET">
              <input type="number" name="password_lenght" id="password_lenght">
              <input type="submit" value="invia">
        </form>
   
    </div>
    <div>
        <p> 
            La tua password generata è : <?= $password ?>
        </p>
    </div>
</div>
    
</body>
</html>
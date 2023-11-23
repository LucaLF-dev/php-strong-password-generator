<?php 

include __DIR__  . '/function.php';

$password_lenght = $_GET['password_lenght'];



$password = getGeneratePassword($password_lenght);



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
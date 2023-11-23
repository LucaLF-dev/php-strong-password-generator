<?php 

include __DIR__  . '/function.php';

$error = '';

$password_lenght = intval($_GET['password_lenght']);
if ($password_lenght < 8) {
    $error = 'la password deve essere uguale o maggiore di 8 caratteri';
} else {
    $password = getGeneratePassword($password_lenght);
}
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
              <input type="text" name="password_lenght" id="password_lenght">
              <input type="submit" value="Genera">
              <h1>
                <?php echo $error; ?>
              </h1>
        </form>
    </div>
    <?php if (!$error): ?>
        <div>
            <p> 
                La tua password generata è : <?= $password ?>
            </p>
        </div>
    <?php endif; ?>
</div>
    
</body>
</html>
<?php
session_start();
if(isset($_SESSION['usuario']) && !isset($_POST["salir"])){
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Bienvedio <?php echo $_SESSION['usuario']?></h1>
    <form action="" method="post">
        <input type="hidden" name="salir">
        <input type="submit" value="salir">
    </form>
</body>
</html>
    <?php
}else{
    session_destroy();
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirmacion</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php
    if(isset($_SESSION['codigo'])){
        if(isset($_POST['codigo'])){
            if($_POST['codigo'] == $_SESSION['codigo']){
                $_SESSION['usuario'] = $_SESSION['datos']["usuario"];
                require_once './dataBase/user.php';
                $usr = new User();
                $usr->Create($_SESSION['datos']);
                unset($_SESSION['datos']);
                unset($_SESSION['codigo']);
                header('Location: logeado.php');
            }else{
                require "./formConfirm/error.php";
            }
        } elseif(isset($_POST['reenvio'])){
            $_SESSION['codigo'] = rand(999,10000);
            enviarMailConfimr($_SESSION['datos']["correo"],$_SESSION['codigo']);
            require "./formConfirm/formconf.php";
        } else{
            require "./formConfirm/formconf.php";
        }
    } else{
        header('Location: index.php'); 
    }
    ?>
</body>
</html>
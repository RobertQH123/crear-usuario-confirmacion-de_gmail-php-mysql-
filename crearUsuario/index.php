<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Crear usuario</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="container" id="registration-form">
        <div class="image"></div>
        <div class="frm">
            <h1>Crear usuario</h1>
            <form method="POST" action="confirmacion.php">
                <div class="form-group"> 
                    <label for="usuario">nombre del usuario: </label>
                    <input type="text" class="form-control" name="usuario" id="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="correo">correo:</label>
                    <input type="email" class="form-control" name="correo"  id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">contraseña:</label>
                    <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg">enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

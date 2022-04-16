<?php
include_once "db.php";
class User extends DB{
    public function Create($user){
        $query = $this->connect()->prepare("INSERT INTO `usuarios`(`USUARIO`, `CORREO`, `PASSWORD`) VALUES (:usuario,:correo,:password)");
        $query->execute(["usuario" => $user["usuario"],"correo" => $user["correo"],"password" => $user["password"]]);
        echo "creado";
    }
}
?>
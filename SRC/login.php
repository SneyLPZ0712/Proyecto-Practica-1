<?php
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$resultado = $conexion->query("SELECT * FROM usuarios 
WHERE email='$email' AND password='$password'");

if ($resultado->num_rows > 0) {
    header("Location: dashboard.php");
} else {
    echo "Credenciales incorrectas";
}
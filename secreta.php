<?php

session_start();

if (empty($_SESSION["usuario"])) {
    header("Location: formulario.html");
    exit();
}

echo "Estas logeado";
?>

<p>
    Ahora ya puedes acceder a tu cuenta
</p>

<a href="logout.php">Cerrar sesión</a>

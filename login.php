<?php

$usuario_correcto = "bruno";
$palabra_secreta_correcta = "brunoeduardo";


$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["palabra_secreta"];


if ($usuario === $usuario_correcto && $palabra_secreta === $palabra_secreta_correcta) {

    session_start();


    $_SESSION["usuario"] = $usuario;

    header("Location: secreta.php");
} else {
    echo "El usuario o la contraseña son incorrectos";
/* session_start();


    $_SESSION["usuario"] = $usuario;

    header("Location: secreta.php");
Sin verificación
*/

}

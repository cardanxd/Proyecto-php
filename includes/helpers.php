<?php

function mostrarError($errores, $campo)
{
    $alert = '';
    if (isset($errores[$campo]) && !empty($errores[$campo])) {
        $alert = "<div class='alerta alerta-error'>" . $errores[$campo] . "</div>";
    }
    return $alert;
}

function borrarError()
{
    $borrado = false;

    if (isset($_SESSION['errores'])) {
        $_SESSION['errores'] = null;
        unset($_SESSION['errores']);
    }


    if (isset($_SESSION['completado'])) {
        $_SESSION['completado'] = null;
        session_unset($_SESSION['completado']);
    }

    return $borrado;
}

<?php
if (isset($_POST)) {
    //Conexion
    require_once './includes/conexion.php';
    //Iniciar sesion
    if (!isset($_SESSION)) {
        session_start();
    }
    //Recoger valores del formulario de registro
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

    

    //Array de errores
    $errores = array();

    //Validar datos
    //Nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_valid = true;
    } else {
        $nombre_valid = false;
        $errores['nombre'] = "El nombre no es valido";
    }
    //Apellidos
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellidos_valid = true;
    } else {
        $apellidos_valid = false;
        $errores['apellidos'] = "Los apellidos no son valido";
    }
    //Email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_valid = true;
    } else {
        $email_valid = false;
        $errores['email'] = "El email no es valido";
    }
    //Password
    if (!empty($password)) {
        $password_valid = true;
    } else {
        $password_valid = false;
        $errores['password'] = "El password esta vacia";
    }

    $saveusers = false;
    //Validar erroes para insertar usuario
    if (count($errores) == 0) {
        $saveusers = true;
        //Cifrar la contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        //Insertar usuario
        $sql = "INSERT INTO usuarios VALUES (null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
        $guardar = mysqli_query($db, $sql);

        if ($guardar) {
            $_SESSION['completado'] = "El registro se ha completado con exito";
        } else {
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario";
        }
    } else {
        $_SESSION['errores'] = $errores;
    }
}

header("Location: index.php");
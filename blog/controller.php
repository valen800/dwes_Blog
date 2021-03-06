<?php
    require_once 'lib/utils.php';
    
    session_start();

    if (isset($_REQUEST['entrar'])) {

        if (isValidUser($_REQUEST['user'], $_REQUEST['password'])) {
            $_SESSION['auth'] = true;
            setInfoMessage('Sesion inciada');
            unset($_SESSION['error']);
        } else {
            $_SESSION['auth'] = false;
            setErrorMessage('Usuario o contraseña incorrecta');
            unset($_SESSION['info']);
        }
    } else if(isset($_REQUEST['salir'])) {

        $_SESSION = array();
        session_destroy();

        session_start();
        $_SESSION['auth'] = false;
        setInfoMessage('Sesion terminada');
    }
    header("Location: index.php");
?>
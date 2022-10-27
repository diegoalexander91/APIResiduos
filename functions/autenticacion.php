<?php
require_once 'config/define.php';
// Por: Diego Espitia
function authBasic($user, $pass)
{
    $mensaje = new Mensajes;
    $consultas = new Consultas;

    // if (!isset($_SERVER['PHP_AUTH_USER'])) {
    if (!isset($user)) {
        header('WWW-Authenticate: Basic realm="No autorizado"');
        header('HTTP/2.0 401 Unauthorized');
        $msj = $mensaje->__error('No autorizado');
        echo $msj;
        exit;
    } else {
        $auth = $consultas->__autenticacion($user, $pass);
        $auth = mysqli_fetch_array($auth);

        if (($auth[0]) == '1') {
            return true;
        } else {
            echo $mensaje->__error('No autorizado');
        }
    }
}

<?php
require_once 'config/define.php';
// Por: Diego Espitia
class Consultas
{

    function __autenticacion($user, $pass)
    {
        $query = "select count(*) from auth where username = '" . $user . "' and password = MD5('" . $pass . "');";
        $respuesta = mysqli_query(connect(), $query);
        return ($respuesta);
    }
    function __respuestas()
    {
        $query = "SELECT resp_usuario.id_usuario AS usuario, preguntas.descripcion AS pregunta, resp_usuario.respuesta, resp_usuario.puntuacion, categoria.nombre AS categoria FROM resp_usuario JOIN preguntas ON (resp_usuario.pregunta = preguntas.id) JOIN categoria ON (resp_usuario.categoria=categoria.id);";
        $respuesta = mysqli_query(connect(), $query);
        return (mysqli_fetch_array($respuesta));
    }

    function __preguntas()
    {
        $query = "SELECT * FROM preguntas";
        $respuesta = mysqli_query(connect(), $query);
        return (mysqli_fetch_array($respuesta));
    }

    function __intento()
    {
        $query = "SELECT uid_usuario,intento FROM preguntas";
        $respuesta = mysqli_query(connect(), $query);
        return (mysqli_fetch_array($respuesta));
    }

    function __getRespuesta($correo)
    {
        $query = "SELECT resp_usuario.id_usuario AS usuario, preguntas.descripcion AS pregunta, resp_usuario.respuesta, resp_usuario.puntuacion, categoria.nombre AS categoria FROM resp_usuario JOIN preguntas ON (resp_usuario.pregunta = preguntas.id) JOIN categoria ON (resp_usuario.categoria=categoria.id) WHERE resp_usuario.id_usuario = '" . $correo . "';";
        $respuesta = mysqli_query(connect(), $query);
        return (mysqli_fetch_assoc($respuesta));
    }
}

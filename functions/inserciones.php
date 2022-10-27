<?php
require_once 'config/define.php';
// Por: Diego Espitia

class Inserciones
{
    function __preguntas($mail, $preg, $res, $puntos, $intento, $categoria)
    {
        $sql = "INSERT INTO `resp_usuario` (`id_usuario`, `pregunta`, `respuesta`, `puntuacion`, `intento`, `categoria`) VALUES ('$mail', '$preg', '$res', '$puntos', '$intento', '$categoria');";
        return ($sql);
    }
}

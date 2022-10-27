<?php
// Por: Diego Espitia
require_once 'config/define.php';
header("HTTP/2.0 200 Procesando");

$consultas = new Consultas;
$inserciones = new Inserciones;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario_id = $_POST['usuario'];
    $jornada_id = $_POST['jornada'];
    $cupo_id = $_POST['cupo'];
    $dia_id = $_POST['dia'];
    $lugar_id = $_POST['lugar'];


    $getUser = $consultas->__getRespuesta('despitia@uniminuto.edu');
    var_dump(json_encode($getUser));
    exit;

    $consulta = $consultas->__respuestas();
    $insert = $inserciones->__preguntas("mail", "preg", "res", "puntos", "intento", "categoria");
    var_dump($consulta);
    var_dump($insert);
}

<?php

require_once("../config/define.php");

// class Consultas
// {
//     function respuestas()
//     {
$query = "SELECT * FROM resp_usuario";

$respuesta = mysqli_query(connect(), $query);

var_dump(mysqli_fetch_array($respuesta));
//     }
// }

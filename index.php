<?php
// Por: Diego Espitia
require_once 'config/define.php';

$mensaje = new Mensajes;

// Procesando autenticación
$username = authBasic($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']);


if (!$username) {
    $header = "HTTP/2.0 405 Unauthenticated";
    $msj = $mensaje->__error("Unauthenticated");
    exit;
}
$header = "HTTP/2.0 200 OK";
// Fin autenticación

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    print_r($_POST);
    $response = file_get_contents("php://input");
    var_dump($response);
    exit;
    // $response = array('response_code' => '200', 'message' => $postBody['request']);
} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $response = $_GET;
} else {
    $response = "Método no soportado";
}

header($header);
$data[] = $response;
echo json_encode($data);


// return ("Realizado");
// switch ($fn[1]) {
//     case 'rectoria':
//         $rectorias = $classConsultas->__rectorias();
//         while ($row = mysqli_fetch_assoc($rectorias)) {
//             $array[] = array(
//                 "id" => $row['id'],
//                 "codigo" => $row['codigo'],
//                 "nombre" => $row['nombre'],
//             );
//         }
//         $json = json_encode($array);
//         echo $json;
//         break;

//     case 'sedes':
//         $sedes = $classConsultas->__sedes($_POST['sede']);
//         while ($row = mysqli_fetch_assoc($sedes)) {
//             $array[] = array(
//                 "id" => $row['id'],
//                 "codigo" => $row['codigo'],
//                 "nombre" => $row['nombre'],
//             );
//         }
//         $json = json_encode($array);
//         echo $json;
//         break;

//     case 'usuarios':
//         $usuario = $classConsultas->__usuarios($_POST['doc']);
//         if (mysqli_num_rows($usuario) != 0) {
//             $array = array("resp" => "false", "msg" => "Ya cuenta con un registro");
//         } else {
//             $array = array("resp" => "true", "msg" => "Continuar");
//         }
//         $json = json_encode($array);
//         echo $json;
//         break;

//     case 'espacios':
//         $espacios = $classConsultas->__espacios($_POST['rol'], $_POST['sede'], $_POST['rectoria']);
//         $row = mysqli_fetch_assoc($espacios);
//         if (mysqli_num_rows($espacios) != 0) {
//             if ($row['estado'] == 0) {
//                 $array = array("resp" => "false", "msg" => "No existe cupos disponibles");
//             } else {
//                 $array = array("resp" => "true", "msg" => "Continuar");
//             }
//         } else {
//             $array = array("resp" => "false", "msg" => "No existe cupos disponibles");
//         }
//         $json = json_encode($array);
//         echo $json;
//         break;
// }

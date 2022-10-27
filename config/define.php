<?php
// Por: Diego Espitia

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


require_once 'variables.php';
require_once 'conexion.php';

require_once 'functions/consultas.php';
require_once 'functions/inserciones.php';
require_once 'functions/mensajes.php';
require_once 'functions/autenticacion.php';

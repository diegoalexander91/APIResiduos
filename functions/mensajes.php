<?php
// Por: Diego Espitia

class Mensajes
{
    function __error($msj)
    {
        return json_encode(array('mensaje:' => $msj));
    }
}

<?php
require_once('define.php');

function connect()
{
    if (!($conn = mysqli_connect(HOST, USER, PASS))) {
        exit();
    } else {
        if (!mysqli_select_db($conn, DABA)) {
            exit();
        } else {
            return $conn;
        }
    }
}

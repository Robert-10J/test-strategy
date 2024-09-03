<?php
if (!isset($_GET["id"])) {
    http_response_code(500);
    exit();
}

include_once "metodos.php";
$respuesta = eliminarUsuario($_GET["id"]);
echo json_encode($respuesta);
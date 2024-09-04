<?php
if (!isset($_GET["id"])) {
    http_response_code(500);
    exit();
}
include_once "metodos.php";
$contacto = obtenerUsuarioPorId($_GET["id"]);
echo json_encode($contacto);
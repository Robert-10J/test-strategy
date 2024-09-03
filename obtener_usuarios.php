<?php
include_once "metodos.php";
$clientes = obtenerUsuarios();
echo json_encode($clientes);
<?php
include_once "metodos.php";
$productos = obtenerUsuarios();
echo json_encode($productos);
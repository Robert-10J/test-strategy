<?php
include_once "metodos.php";
$roles = obtenerRoles();
echo json_encode($roles);
<?php
$body = json_decode(file_get_contents("php://input"));
// Si no hay datos, salir inmediatamente indicando un error 500
if (!$body) {
    http_response_code(500);
    exit;
}

// Extraer valores
$nombre = $body->nombre;
$email = $body->email;
$telefono = $body->telefono;
$salario = $body->salario;
$id_rol = $body->rol;


include_once "metodos.php";
$respuesta = guardarContacto($nombre, $email, $telefono, $salario, $id_rol);
// Devolver al cliente la respuesta de la función
echo json_encode($respuesta);
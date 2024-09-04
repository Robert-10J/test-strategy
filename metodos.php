<?php
function actualizarUsuario($nombre, $email, $telefono, $salario, $id_rol, $id)
{
    $bd = obtenerConexion();
    $query = $bd->prepare("UPDATE usuarios SET nombre = ?, email = ?, telefono = ?, salario = ?, id_rol = ? WHERE id = ?");
    return $query->execute([$nombre, $email, $telefono, $salario, $id_rol, $id]);
}

function obtenerUsuarioPorId($id)
{
    $bd = obtenerConexion();
    $query = $bd->prepare("SELECT
            contactos.id AS contacto_id,
            contactos.nombre,
            contactos.email,
            contactos.telefono,
            contactos.salario,
            roles.rol,
            roles.id AS rol_id,
            contactos.created_at
        FROM 
            contactos
        JOIN 
            roles ON contactos.id_rol = roles.id
        WHERE contactos.id = ?;");
    $query->execute([$id]);
    return $query->fetchObject();
}

function obtenerUsuarios()
{
    $bd = obtenerConexion();
    $query = $bd->query("SELECT
        contactos.id,
        contactos.nombre,
        contactos.email,
        contactos.telefono,
        contactos.salario,
        roles.rol,
        roles.color,
        contactos.created_at FROM contactos JOIN roles ON contactos.id_rol = roles.id ORDER BY contactos.id");
    return $query->fetchAll();
}

function eliminarUsuario($id)
{
    $bd = obtenerConexion();
    $query = $bd->prepare("DELETE FROM usuarios WHERE id = ?");
    return $query->execute([$id]);
}

function guardarContacto($nombre, $email, $telefono, $salario, $id_rol)
{
    $bd = obtenerConexion();
    $query = $bd->prepare("INSERT INTO contactos (nombre, email, telefono, salario, id_rol) VALUES(?, ?, ?, ?, ?)");
    return $query->execute([$nombre, $email, $telefono, $salario, $id_rol]);
}

function obtenerRoles() {
    $bd = obtenerConexion();
    $query = $bd->query("SELECT id, rol FROM roles");
    return $query->fetchAll();
}

function obtenerVariableDeEntorno($key)
{
    if (defined("_ENV_CACHE")) {
        $vars = _ENV_CACHE;
    } else {
        $file = "env.php";
        if (!file_exists($file)) {
            throw new Exception("El archivo de las variables de entorno ($file) no existe. Favor de crearlo");
        }
        $vars = parse_ini_file($file);
        define("_ENV_CACHE", $vars);
    }
    if (isset($vars[$key])) {
        return $vars[$key];
    } else {
        throw new Exception("La clave especificada (" . $key . ") no existe en el archivo de las variables de entorno");
    }
}
function obtenerConexion()
{
    $password = obtenerVariableDeEntorno("MYSQL_PASSWORD");
    $user = obtenerVariableDeEntorno("MYSQL_USER");
    $dbName = obtenerVariableDeEntorno("MYSQL_DATABASE_NAME");
    $database = new PDO('mysql:host=localhost;dbname=' . $dbName, $user, $password);
    $database->query("set names utf8;");
    $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $database;
}

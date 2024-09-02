<?php
function actualizarUsuario($nombre, $precio, $descripcion, $id)
{
    $bd = obtenerConexion();
    $query = $bd->prepare("UPDATE usuarios SET nombre = ?, precio = ?, descripcion = ? WHERE id = ?");
    return $query->execute([$nombre, $precio, $descripcion, $id]);
}

function obtenerUsuarioPorId($id)
{
    $bd = obtenerConexion();
    $query = $bd->prepare("SELECT id, nombre, descripcion, precio FROM usuarios WHERE id = ?");
    $query->execute([$id]);
    return $query->fetchObject();
}

function obtenerUsuarios()
{
    $bd = obtenerConexion();
    $query = $bd->query("SELECT id, nombre, descripcion, precio FROM usuarios");
    return $query->fetchAll();
}

function eliminarUsuario($id)
{
    $bd = obtenerConexion();
    $query = $bd->prepare("DELETE FROM usuarios WHERE id = ?");
    return $query->execute([$id]);
}

function guardarUsuario($nombre, $precio, $descripcion)
{
    $bd = obtenerConexion();
    $query = $bd->prepare("INSERT INTO usuarios(nombre, precio, descripcion) VALUES(?, ?, ?)");
    return $query->execute([$nombre, $precio, $descripcion]);
}
Instrucciones Detalladas:

Configuración del Entorno:

Asegúrate de tener un servidor local en funcionamiento con PHP habilitado.
Crea una base de datos MySQL (cantidad de tablas a consideración para realizar el ejercicio) para almacenar la información de los usuarios (id, nombre de usuario, contraseña, etc.).
Estructura del Proyecto:

Organiza tu proyecto con los siguientes archivos/carpetas principales:
index.php: Página principal que mostrará la lista de usuarios y el formulario de inicio de sesión (si no hay sesión activa).
agregar_usuario.php: Script PHP para manejar la inserción de nuevos usuarios (recibirá datos vía Ajax).
editar_usuario.php: Script PHP para manejar la actualización de usuarios existentes (recibirá datos vía Ajax).
eliminar_usuario.php: Script PHP para manejar la eliminación de usuarios (recibirá el ID del usuario vía Ajax).
login.php: Script PHP para procesar el inicio de sesión del usuario.
obtener_usuarios.php: Script PHP para obtener la lista de usuarios y devolverla en formato JSO
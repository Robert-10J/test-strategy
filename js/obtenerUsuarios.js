// http://localhost:4000/obtener_usuarios.php
const $table = document.querySelector('#tableUsers')

document.addEventListener('DOMContentLoaded', async () => {
  await getUsuarios()
})

async function getUsuarios() {
  try {
    const response = await fetch('http://localhost:4000/obtener_usuarios.php')
    const users = await response.json()
    
    $table.innerHTML = ''

    for(const user of users) {
      const $fila = document.createElement('tr')
      $fila.style.paddingTop = '5rem'

      const $celdaId = document.createElement('td')
      $celdaId.innerText = user.id
      $fila.appendChild($celdaId)
      
      const $celdaNombre = document.createElement('td')
      $celdaNombre.innerText = user.nombre
      $fila.appendChild($celdaNombre)

      const $celdaEmail = document.createElement('td')
      $celdaEmail.innerText = user.email
      $fila.appendChild($celdaEmail)

      const $celdaTelefono = document.createElement('td')
      $celdaTelefono.innerText = user.telefono
      $fila.appendChild($celdaTelefono)

      const $celdaRol = document.createElement('td')
      
      const $spanBadge = document.createElement('span')
      $spanBadge.classList.add('badge')
      $spanBadge.style.backgroundColor = user.color
      $spanBadge.innerText = user.rol
      $celdaRol.appendChild($spanBadge)
      $fila.appendChild($celdaRol)

      const $celdaFecha = document.createElement('td')
      $celdaFecha.innerText = user.created_at
      $fila.appendChild($celdaFecha)

      const $celdaSalario = document.createElement('td')
      $celdaSalario.innerText = user.salario
      $fila.appendChild($celdaSalario)

      // Extraer el id del producto en el que estamos dentro del ciclo
      const idUsuario = user.id
      // Link para eliminar
      const $linkEditar = document.createElement("a")
      $linkEditar.href = "./editar_usuario.php?id=" + idUsuario
      $linkEditar.innerHTML = `<i class="bi bi-pencil-square"></i>`
      $linkEditar.classList.add("btn", "btn-warning")
      
      // Celda para acciones
      const $acciones = document.createElement("td")
      $acciones.classList.add('d-flex', 'gap-2')

      $acciones.appendChild($linkEditar)
      $fila.appendChild($acciones)


      // Para el botón de eliminar primero creamos el botón, agregamos su listener y luego lo adjuntamos a su celda
      const $botonEliminar = document.createElement("button");
      $botonEliminar.classList.add("btn", "btn-danger")
      $botonEliminar.innerHTML = `<i class="bi bi-trash"></i>`;
      $botonEliminar.onclick = async () => {

          const respuestaConfirmacion = await Swal.fire({
              title: "Confirmación",
              text: "¿Eliminar el usuario? esto no se puede deshacer",
              icon: 'warning',
              showCancelButton: true,
              cancelButtonColor: '#3085d6',
              confirmButtonColor: '#d33',
              confirmButtonText: 'Sí, eliminar',
              cancelButtonText: 'Cancelar',
          });
          if (respuestaConfirmacion.value) {
              const url = `./eliminar_usuario.php?id=${idUsuario}`;
              const respuestaRaw = await fetch(url, {
                  method: "DELETE",
              });
              const respuesta = await respuestaRaw.json();
              if (respuesta) {
                  Swal.fire({
                      icon: "success",
                      text: "Usuario eliminado",
                      timer: 700, // <- Ocultar dentro de 0.7 segundos
                  });
              } else {
                  Swal.fire({
                      icon: "error",
                      text: "El servidor no respondió con una respuesta exitosa",
                  });
              }
              // De cualquier modo, volver a obtener los productos para refrescar la tabla
              obtenerProductos();
          }
      };
      
      $acciones.appendChild($botonEliminar);

      $table.appendChild($fila)
    }

  } catch(e) {
    console.error('Error:', e)
  }
}
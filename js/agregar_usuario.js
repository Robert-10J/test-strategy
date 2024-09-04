const $nombre = document.querySelector('#nombre')
const $email = document.querySelector('#email')
const $telefo = document.querySelector('#telefono')
const $rol = document.querySelector('#rol')
const $salario = document.querySelector('#salario')
const $btnSubmit = document.querySelector('#submit')


console.log($nombre, $email, $telefo, $rol, $salario)

document.addEventListener('DOMContentLoaded', async () => {
  getRoles()
  await saveClient()
})

async function saveClient() {
  $btnSubmit.onclick = async () => {
    const nombre = $nombre.value
    const email = $email.value
    const telefono = $telefo.value
    const rol = $rol.value
    const salario = $salario.value
  
  /*   if(!nombre) {
      return Swal.fire({
        icon: "error",
        text: "Escribe el nombre",
        timer: 700, 
      });
    }
    
    if(!email) {
      return Swal.fire({
        icon: "error",
        text: "Escribe el email",
        timer: 700, 
      });
    }
  
    if(!telefono) {
      return Swal.fire({
        icon: "error",
        text: "Escribe el teléfono",
        timer: 700, 
      });
    }
  
    if(!rol) {
      return Swal.fire({
        icon: "error",
        text: "Seleccione el rol",
        timer: 700, 
      });
    }
  
    if(!salario) {
      return Swal.fire({
        icon: "error",
        text: "Escribe el salario",
        timer: 700, 
      });
    }
  
    const body = {
      nombre,
      email,
      telefono,
      rol,
      salario
    }
  
    try {
      const response = await fetch('http://localhost:4000/guardar_contacto.php', {
        method: 'POST',
        body: JSON.stringify(body)
      })
  
      if(response) {
        Swal.fire({
          icon: "success",
          text: "Producto guardado",
          timer: 700,
        });
      }
  
    } catch (error) {
      Swal.fire({
        icon: "error",
        title: "Error de servidor",
        text: "Inténtalo de nuevo. El error es: " + e,
      });
    } */
  
    if (nombre === '' || email === '' || telefono === '' || rol === '' || salario === '') {
      Swal.fire('Todos los campos son obligatorios')
      return
    }
  
    const body = {
      nombre,
      email,
      telefono,
      rol,
      salario
    }
  
    const response = await fetch('http://localhost:4000/guardar_contacto.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(body)
    })
  
    if (response.ok) {
      Swal.fire('Usuario agregado correctamente')
      $nombre.value = ''
      $email.value = ''
      $telefono.value
    }
  }
}


async function getRoles() {
  try {
    const response = await fetch('http://localhost:4000/obtener_roles.php')
    const roles = await response.json()
    
    for (const role of roles) {
      const $option = document.createElement('option')
      $option.value = role.id
      $option.innerText = role.rol
      $rol.appendChild($option)
    }
  } catch (error) {
    console.log(error)
  }
}

const $nombre = document.querySelector('#nombre')
const $email = document.querySelector('#email')
const $telefono = document.querySelector('#telefono')
const $rol = document.querySelector('#rol')
const $salario = document.querySelector('#salario')

const $btnSubmit = document.querySelector('#submit')

let idCliente
let rolesData = []
let roleId = 0

document.addEventListener('DOMContentLoaded', async () => {
  rellenarFormulario()
  getRoles()
  await editarClient()
})

async function rellenarFormulario() {
  const urlSearchParams = new URLSearchParams(window.location.search)
  idCliente = urlSearchParams.get("id")
  // Obtener el producto desde PHP
  const respuestaRaw = await fetch(`./obtener_cliente_id.php?id=${idCliente}`)
  const contacto = await respuestaRaw.json()
  console.log(contacto)
  // Rellenar formulario
  $nombre.value = contacto.nombre
  $email.value = contacto.email
  $telefono.value = contacto.telefono
  $salario.value = contacto.salario
  roleId = contacto.rol_id
}

async function getRoles() {
  try {
    const response = await fetch('http://localhost:4000/obtener_roles.php')
    const roles = await response.json()
    rolesData = roles

    for (const role of roles) {
      const $option = document.createElement('option')
      $option.value = role.id
      $option.innerText = role.rol

      if (role.id === roleId) {
        $option.selected = true
      }

      $rol.appendChild($option)
    }
  } catch (error) {
    console.log(error)
  }
}

async function editarClient() {
  $btnSubmit.onclick = async () => {
    const nombre = $nombre.value
    const email = $email.value
    const telefono = $telefono.value
    const rol = $rol.value
    const salario = $salario.value
  
  
    if (nombre === '' || email === '' || telefono === '' || rol === '' || salario === '') {
      Swal.fire('Todos los campos son obligatorios')
      return
    }
  
    const body = {
      id: idCliente,
      nombre,
      email,
      telefono,
      rol,
      salario
    }

    console.log(body)
  
    const response = await fetch('http://localhost:4000/actualizar_cliente.php', {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(body)
    })
  
    if (response.ok) {
      Swal.fire('Cliente editado correctamente')
      $nombre.value = ''
      $email.value = ''
      $telefono.value = ''
    }

    window.location.href = '/'
  }
}
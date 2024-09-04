const $nombre = document.querySelector('#nombre')
const $email = document.querySelector('#email')
const $telefono = document.querySelector('#telefono')
const $rol = document.querySelector('#rol')
const $salario = document.querySelector('#salario')

const $btnSubmit = document.querySelector('#submit')

let idCliente

document.addEventListener('DOMContentLoaded', async () => {
  rellenarFormulario()
})

async function rellenarFormulario() {
  const urlSearchParams = new URLSearchParams(window.location.search)
  idCliente = urlSearchParams.get("id")
  // Obtener el producto desde PHP
  const respuestaRaw = await fetch(`./obtener_cliente_id.php?id=${idCliente}`)
  const producto = await respuestaRaw.json()
  // Rellenar formulario
  $nombre.value = producto.nombre
  $email.value = producto.email
  $telefono.value = producto.telefono
  $salario.value = producto.salario

  const option = document.createElement('option')
  option.value = producto.rol_id
  option.selected = producto.rol
  option.textContent = producto.rol
  $rol.appendChild(option)
  
}
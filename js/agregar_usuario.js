const $nombre = document.querySelector('#nombre')
const $email = document.querySelector('#email')
const $telefo = document.querySelector('#telefono')
const $rol = document.querySelector('#rol')
const $salario = document.querySelector('#salario')


console.log($nombre, $email, $telefo, $rol, $salario)

document.addEventListener('DOMContentLoaded', () => {
  getRoles()
})



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
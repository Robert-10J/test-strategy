const $btnAddRole = document.querySelector('#addLabel')
const $listCat = document.querySelector('#list-cat')

const roles = JSON.parse(localStorage.getItem('roles')) || []

addEventListener('DOMContentLoaded', function() {
  renderListCategories()
})

$btnAddRole.addEventListener('click', async function() {
  const { value: rol } = await Swal.fire({
    title: "Ingrese una nueva etiqueta",
    input: "text",
    inputLabel: "Ingrese un nuevo rol",
    inputPlaceholder: "Rol",
    showCancelButton: true,
    inputValidator: (rol) => {
      if (!rol) {
        return "Necesita escribir una categoría"
      }
    }
  })

  if (rol) {
    const inputOptions = new Promise((resolve) => {
      setTimeout(() => {
        resolve({
          "#ff0000": "Rojo",
          "#00ff00": "Verde",
          "#0000ff": "Azul",
          "#fcbf49": "Amarillo",
          "#f77f00": "Naranja"
        });
      }, 1000);
    });
    const { value: color } = await Swal.fire({
      title: "Seleccione un color para la categría",
      input: "radio",
      inputOptions,
      inputValidator: (value) => {
        if (!value) {
          return "Necesita seleccionar un color"
        }
      }
    });
    if (color) {
      Swal.fire('Se agrego una nueva categría')
    }

    roles.push({ rol, color, usuarios: 0 })
    localStorage.setItem('roles', JSON.stringify(roles))
  }
})

function renderListCategories() {
  roles.forEach(role => {
    const li = document.createElement('li');
    li.className = 'list-group-item bg-gray-blue cl-white d-flex justify-content-between gap-5';
    li.textContent = role.rol;

    // Crear el span para mostrar el número de usuarios
    const span = document.createElement('span');
    span.className = 'badge-cat-work';
    span.textContent = role.usuarios;

    // Aplicar el color del rol al fondo del span
    span.style.backgroundColor = role.color;

    // Agregar el span al li
    li.appendChild(span);

    // Agregar el li al ul
    $listCat.appendChild(li);
});
}
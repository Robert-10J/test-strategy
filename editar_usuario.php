<?php include_once "head.php"; ?>
<div class="vh-100 d-flex justify-content-center align-items-center">
  <div class="w-75 h-auto shadow bg-white p-2">
    <div class="d-flex justify-content-start align-items-center gap-5">
      <a href="/" class="btn btn-link" style="margin-right: 15rem;">Volver</a>
      <p class="text-center fs-2">Editar contacto</p>
    </div>
    <form action="" method="POST" class="needs-validation" novalidate>
      <div class="row">

        <div class="col w-50 h-100">
          <div class="mb-3 w-100 input-group-lg has-validation">
            <label
              for="nombre"
              class="form-label">Nombre</label>
            <input
              type="text"
              class="form-control bg-gray-blue cl-white"
              id="nombre"
              name="nombre"
              aria-describedby="nombreHelp"
              placeholder="Ingrese el nombre de contacto" />
          </div>

          <div class="mb-3 w-100 input-group-lg">
            <label
              for="email"
              class="form-label">Correo Electrónico</label>
            <input
              type="email"
              class="form-control bg-gray-blue cl-white"
              id="email"
              name="email"
              aria-describedby="emailHelp"
              placeholder="Ingrese el email de contacto" />
          </div>

          <div class="mb-3 w-100 input-group-lg">
            <label
              for="telefono"
              class="form-label">Teléfono</label>
            <input
              type="tel"
              class="form-control bg-gray-blue cl-white"
              id="telefono"
              name="telefono"
              aria-describedby="telefonoHelp"
              placeholder="Ingrese el telefono de contacto" />
          </div>

          <div class="mb-3 w-100 input-group-lg">
            <select
              class="form-select mt-5 bg-gray-blue cl-white"
              aria-label="Default select example"
              id="rol">
              <option selected>Seleccione un rol de contacto</option>
            </select>
          </div>

          <div class="mb-3 w-100 input-group-lg">
            <label
              for="salario"
              class="form-label">Salario</label>
            <input
              type="tel"
              class="form-control bg-gray-blue cl-white"
              id="salario"
              name="salario"
              aria-describedby="salarioHelp"
              placeholder="Ingrese el salario de contacto" />
          </div>

          <div class="d-flex justify-content-end gap-2 border-form my-2">
            <button
              type="submit"
              class="btn btn-rgt mt-2"
              id="submit"
            >Editar</button>

            <a
              href="/"
              class="btn btn-cancel mt-2 shadow">Cancelar</a>
          </div>

        </div>

        <div class="col">
          <div id="bg-image" class="w-100 h-100 d-flex justify-content-center align-items-center">
            <img src="./assets/LOGO-AVION-ROJO-iSTRATEGY.png" alt="logo de istrategy">
          </div>
        </div>

      </div>
    </form>
  </div>
</div>

<script src="js/editar_contacto.js"></script>
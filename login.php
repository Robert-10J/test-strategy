<div class="container-xl h-100 d-flex flex-column justify-content-center align-items-center">
  <div class="d-flex flex-column justify-content-center align-items-center">
    <img src="./assets/LOGO-iSTRATEGY.png" alt="logo de iSTRATEGY" id="logo-login">
    <p class="font-regular fs-1 text-center cl-gray-blue">Iniciar Sesión</p>
    <p class="font-regular fs-3 text-center cl-black">Ingresa tus datos a continuación</p>
  </div>

  <div class="w-50">
    <form method="POST" action="/index.php">
      <div class="mb-3 w-100 input-group-lg">
        <label 
          for="email" 
          class="form-label"
        >Correo Electrónico</label>
        <input 
          type="email" 
          class="form-control bg-gray-blue cl-white" 
          id="email"
          name="email"
          aria-describedby="emailHelp"
          placeholder="Ingrese el Correo"
        />
      </div>

      <div class="mb-3 input-group-lg">
        <div class="d-flex justify-content-between">
          <label 
            for="password" 
            class="form-label"
          >Contraseña</label>
          <a href="#" class="cl-red">¿Olvidaste la contraseña?</a>
        </div>
        <input 
          type="password" 
          class="form-control bg-gray-blue cl-white" 
          id="password"
          name="password"
          placeholder="Introduzca la contraseña"
        />
      </div>

      <div class="mb-3 form-check">
        <input
          type="checkbox"
          class="form-check-input"
          id="remember"
          name="remember"
        />
        <label 
          class="form-check-label"
          for="remember"
        >Mantenme conectado</label>
      </div>

      <div class="d-flex justify-content-center align-items-center">
        <button
          type="submit" 
          class="btn cl-red-btn cl-white"
        >Iniciar Sesión</button>
      </div>
    </form>
  </div>
</div>
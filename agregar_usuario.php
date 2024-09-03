<div class="row vh-100">
  <!-- BARRA DE NAVEGACIÓN -->
  <nav class="col-sm-1 bg-gray-blue px-5 d-flex flex-column justify-content-between align-items-center">
    <div class="py-3">
      <a href="/">
        <img src="./assets/avion.png" alt="imagen de avión istrategy" style="width: 3rem;">
      </a>
    </div>

    <div class="py-5 d-flex flex-column justify-content-between align-items-center gap-3">
      <a href="https://www.facebook.com/iStrategy">
        <img src="./assets/redes_1.png" alt="" style="width: 2rem;">
      </a>
      <a href="https://www.instagram.com/istrategymexico/">
        <img src="./assets/redes_2.png" alt="" style="width: 2rem;">
      </a>

      <a href="https://www.tiktok.com/@istrategymx">
        <img src="./assets/redes_3.png" alt="" style="width: 2rem;">
      </a>
    </div>

  </nav>

  <section class="col d-flex justify-content-center align-items-center">
    <div class="h-75 w-75 col-auto shadow">
      <div class="w-100 h-100 row bg-gray-light">
        <div class="col p-5">
          <form method="POST" action="/index.php" class="needs-validation" novalidate>
            
            <div class="col-md-4 w-100">
              <label for="username" class="form-label">Nombre de usuario</label>
              <div class="input-group has-validation">
                <span class="input-group-text bg-gray-blue cl-white" id="span-input">
                  <img src="./assets/username.png" alt="" style="width: 25px;">
                </span>
                <input 
                  type="text"
                  class="form-control bg-gray-blue cl-white input-brd"
                  id="username"
                  placeholder="Ingrese su nombre de usuario"
                  aria-describedby="inputGroupPrepend"
                  required
                />
                <div class="invalid-feedback">
                  Por favor ingrese su nombre de usuario
                </div>
              </div>
            </div>
            
            <div class="col-md-4 w-100 mt-3">
              <label for="email" class="form-label">Correo Electrónico</label>
              <div class="input-group has-validation">
                <span class="input-group-text bg-gray-blue cl-white" id="span-input">
                  <img src="./assets/email.png" alt="" style="width: 25px;">
                </span>
                <input 
                  type="email"
                  class="form-control bg-gray-blue cl-white input-brd"
                  id="email"
                  placeholder="Ingrese su correo electrónico"
                  aria-describedby="inputGroupPrepend"
                  required
                />
                <div class="invalid-feedback">
                  Por favor ingrese su correo electrónico
                </div>
              </div>
            </div>
            
            <div class="col-md-4 w-100 mt-3">
              <label for="password" class="form-label">Contraseña</label>
              <div class="input-group has-validation">
                <span class="input-group-text bg-gray-blue cl-white" id="span-input">
                  <img src="./assets/password.png" alt="" style="width: 25px;">
                </span>
                <input 
                  type="password"
                  class="form-control bg-gray-blue cl-white input-brd"
                  id="password"
                  placeholder="Ingrese su contraseña"
                  aria-describedby="inputGroupPrepend"
                  required
                />
                <div class="invalid-feedback">
                  Por favor ingrese su contraseña
                </div>
              </div>
            </div>

            <div class="col-md-4 w-100 mt-3">
              <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
              <div class="input-group has-validation">
                <span class="input-group-text bg-gray-blue cl-white" id="span-input">
                  <img src="./assets/passwordConfirmation.png" alt="" style="width: 25px;">
                </span>
                <input 
                  type="password_confirmation"
                  class="form-control bg-gray-blue cl-white input-brd"
                  id="password_confirmation"
                  placeholder="Confirme su contraseña"
                  aria-describedby="inputGroupPrepend"
                  required
                />
                <div class="invalid-feedback">
                  Por favor confirme su contraseña
                </div>
              </div>
            </div>

            <p class="text-left pt-2">Género</p>
            <div class="mb-3 form-check">
              <input
                type="radio"
                class="form-check-input"
                id="masculino"
                name="masculino" 
              />
              <label
                class="form-check-label"
                for="masculino"
              >Masculino</label>
            </div>
            <div class="mb-3 form-check">
              <input
                type="radio"
                class="form-check-input"
                id="femenino"
                name="femenino" 
              />
              <label
                class="form-check-label"
                for="femenino"
              >Femenino</label>
            </div>


            <div class="mt-3 form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id="remember"
                name="remember" 
              />
              <label
                class="form-check-label"
                for="remember"
              >Recordarme siempre</label>
            </div>

            <div class="d-flex justify-content-end gap-2 border-form my-2">
              <button
                type="submit"
                class="btn btn-rgt mt-2"
              >Registrar</button>
              
              <a
                href="/"
                class="btn btn-cancel mt-2 shadow"
              >Cancelar</a>
            </div>
          </form>
        </div>

        <div id="bg-image" class="col w-100 d-flex justify-content-center align-items-center">
          <img src="./assets/LOGO-AVION-ROJO-iSTRATEGY.png" alt="">
        </div>
      </div>
    </div>
  </section>

</div>
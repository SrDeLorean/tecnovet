<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Crear Cuenta</h1>
              </div>
              <!-- El nombre del formulario es  form_registrar-->
              <form id="form_registrar" class="user" enctype="multipart/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="usuario_nombre" name="usuario_nombre" placeholder="Nombre">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="usuario_apellido" name="usuario_apellido" placeholder="Apellido">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="usuario_rut" name="usuario_rut" placeholder="RUT">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="usuario_telefono" name="usuario_telefono" placeholder="Telefono">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="usuario_direccion" name="usuario_direccion" placeholder="Direccion">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="usuario_email" name="usuario_email" placeholder="Correo">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="usuario_password" name="usuario_password" placeholder="Contraseña">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="usuario_password2" name="usuario_password2" placeholder="Verificar Contraseña">
                  </div>
                  <div class="file-field input-field form-group mt-4 file-path-wrapper ">
                    <input type="file" class="form-control-file file-path validate" id="usuario_foto" name="usuario_foto" accept="image/*">
                  </div>
                </div>
                <button id="bt_registrar" class="btn btn-primary btn-user btn-block">Registrarse</button>
                <hr>
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Recuperar Contraseña</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?php echo base_url();?>">Iniciar Sesion</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
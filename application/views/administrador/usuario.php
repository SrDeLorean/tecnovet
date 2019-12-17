        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Usuarios</h1>
          <p class="mb-4">Listado de todos los Usuarios en el sistema</p>
          <div class="text-right">Ingresar <button type="button" class="btn btn-primary btn-circle m-1 pb-1 " data-toggle="modal" data-target="#modalAdd"><i class="fas fa-plus"></i></button></div>     

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
               <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                 
                <div class="input-group">
                  <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar usuarios" aria-label="Search" aria-describedby="basic-addon2">
                  
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                      <i class="fas fa-search fa-sm"></i>
                    </button>                   
                  </div>  
                                               
                </div>
                   
              </form>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>RUT</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Correo</th>
                      <th>Telefono</th>
                      <th>Dirección</th>
                      <th>Perfil</th>
                      <th>Estado</th>
                      <th>Foto</th>
                      <th>Acción</th>
                    </tr>
                  </thead>
                  
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>RUT</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Correo</th>
                      <th>Telefono</th>
                      <th>Dirección</th>
                      <th>Perfil</th>
                      <th>Estado</th>
                      <th>Foto</th>
                      <th>Acción</th>
                    </tr>
                    <tbody >
                    <?php
                        foreach($usuarios->result() as $row){
                    ?>
                      <tr>
                          <td id="id" value="<?php echo $row->usuario_id; ?>"> <?php echo $row->usuario_id; ?></td>
                          <td> <?php echo $row->usuario_rut; ?></td>
                          <td> <?php echo $row->usuario_nombre; ?></td>
                          <td> <?php echo $row->usuario_apellido; ?></td>
                          <td> <?php echo $row->usuario_email; ?></td>
                          <td> <?php echo $row->usuario_telefono; ?></td>
                          <td> <?php echo $row->usuario_direccion; ?></td>
                          <td> <?php if($row->usuario_perfil == '1'){
                                        echo 'administrador';
                                      }
                                      else if($row->usuario_perfil == '2'){
                                        echo 'veterinario';
                                      }
                                      else if($row->usuario_perfil == '3'){
                                        echo 'usuario';
                                      }else{
                                        echo 'error';
                                      }    
                         ?></td>
                          <td> <?php if($row->usuario_estado == '1'){
                                        echo 'activo';
                                      }
                                      else if($row->usuario_estado == '2'){
                                        echo 'inactivo';
                                      }else{
                                        echo 'error';
                                      }  
                          
                          ?></td>
                          <td> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row->usuario_foto) .'"class="img-fluid img-responsive " width="75" height="50"/>'; ?></td>
                          <th><button class="btn btn-warning btn-circle m-1 pb-1 userEditBtn" href="#" role="button" data-toggle="modal" data-target="#modalEdit" value= ""><i sclass="fas fa-edit"></i></button></th>
                      </tr>
                      <?php
                          }
                          
                      ?>
                  </tbody>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<!-- CRUD MODAL editar Detalle Usuario  -->

<!------------------------------- Modal editar User--------------------------------------------------------->
  <div class="modal fade bd-example-modal-lg" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEdit" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEdit">Editar Usuario <i class="fas fa-edit"></i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-center">
          <!--   <img src="..." class="rounded" alt="...">-->
          </div>
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4"></h1>
            </div>
            <!-- inicio del formulario "form_editar"-->
            <form id="form_editar" class="user" method="POST" enctype="multipart/form-data">
              <div class="form-group row">
                <input type="text" class="form-control form-control-user" id="editar_id" name="id" hidden="true">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="editar_nombre" name="nombre" placeholder="Nombre">
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user" id="editar_apellido" name="apellido" placeholder="Apellido">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="editar_rut" name="rut" placeholder="RUT">
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user" id="editar_telefono" name="telefono" placeholder="Telefono">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="editar_direccion" name="direccion" placeholder="Direccion">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user email" id="editar_email" name="email" placeholder="Correo">
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-user" id="editar_contraseña" name="contraseña" placeholder="Contraseña">
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Perfil</label>
                  <select class="custom-select my-1 mr-sm-2" id="editar_perfil" name="perfil">
                    <option value="" selected>Perfil Actual</option>
                    <option value="1">Administrador</option>
                    <option value="2">Veterinario</option>
                    <option value="3">Usuario</option>
                  </select>
                </div>
                <div class="col-sm-6">                    
                  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Estado</label>
                  <select class="custom-select my-1 mr-sm-2" id="editar_estado" name="estado">
                    <option selected>Estado Actual</option>
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                  </select>
                </div>
                <div class="file-field input-field form-group mt-4 file-path-wrapper ">
                  <input type="file" class="form-control-file file-path validate" id="editar_foto" name="foto" accept="image/*">
                </div>
              </div>
              <button id="bt_editar" class="btn btn-warning btn-user btn-block">Editar</button>                
            </form>              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- CRUD MODAL Agregar Detalle Usuario  -->

<!-- Modal Agregar User-->
<div class="modal fade bd-example-modal-lg" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAdd" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAdd">Agregar Usuario <i class="fas fa-plus"></i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="p-5">
            <!-- Por defecto el perfil es "3" usuario y el estado es "1" activo-->
                <form id="form_registrar" class="user">
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
                    <input type="password" class="form-control form-control-user" id="usuario_password2" name="usuario_password2" placeholder="Repetir contraseña">
                  </div>
                </div>
                    <div class="file-field input-field form-group mt-4 file-path-wrapper ">
                      <input type="file" class="form-control-file file-path validate" id="usuario_foto" name="usuario_foto" accept="image/*">
                    </div>
                  </div>
                  <button id="bt_registrar" class="btn btn-primary btn-user btn-block">Agregar</button>                
                </form>              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
    </div>
  </div>

 
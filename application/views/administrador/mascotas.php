<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Mascotas</h1>
<p class="mb-4">Listado de todos las Mascotas en el sistema</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
     <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
      <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar mascotas" aria-label="Search" aria-describedby="basic-addon2">
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
            <th>Dueño</th>
            <th>Nombre</th>
            <th>Microchip</th>
            <th>Especie</th>
            <th>Raza</th>
            <th>Caracter</th>
            <th>Sexo</th>
            <th>Nacimiento</th>
            <th>Color</th>
            <th>Estado</th>
            <th>Esterizilización</th>
            <th>Inscripción</th>
            <th>Foto</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>ID</th>
            <th>Dueño</th>
            <th>Nombre</th>
            <th>Microchip</th>
            <th>Especie</th>
            <th>Raza</th>
            <th>Caracter</th>
            <th>Sexo</th>
            <th>Nacimiento</th>
            <th>Color</th>
            <th>Estado</th>
            <th>Esterizilización</th>
            <th>Inscripción</th>
            <th>Foto</th>
            <th>Acción</th>
          </tr>
        </tfoot>
        <tbody>
            <?php
            for ($i = 1; $i <= 20; $i++) {
            echo"<tr>" ;
            echo "<td>$i</td>";
            echo "<td>nombre dueño</td>";
            echo "<td>nombre mascota</td>";
            echo "<td>codigo chip</td>";
            echo "<td>especie</td>";
            echo "<td>raza</td>";
            echo "<td>caracter</td>";
            echo "<td>sexo</td>";
            echo "<td>nacimiento</td>";
            echo "<td>color</td>";
            echo "<td>estado</td>";
            echo "<td>esterilizacion</td>";
            echo "<td>inscripción</td>";
            echo "<td>foto</td>";
            echo '<th >'
              . '<button class="btn btn-warning btn-circle m-1 pb-1 href="#" role="button" data-toggle="modal" data-target="#modalEdit"><i class="fas fa-edit"></i></button>'
              .'<button class="btn btn-danger btn-circle m-1 pb-1 href="#" role="button" data-toggle="modal" data-target="#modalDelete"><i class="fas fa-trash"></i></button>'
                    . '</th>';
           echo "</tr>";
          }
            
            ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- CRUD MODAL editar Detalle Usuario  -->

<!-- Modal editar User-->
<div class="modal fade bd-example-modal-lg" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEdit" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="modalEdit">Editar Usuario</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="text-center">
  <img src="..." class="rounded" alt="...">
</div>
<div class="p-5">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">'usuario_nombre . usuario_apellido'</h1>
      </div>
      <form class="user">
      <div class="form-group row">
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
          <input type="email" class="form-control form-control-user" id="editar_correo" name="email" placeholder="Correo">
        </div>
        <div class="form-group row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Perfil</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
              <option selected>Perfil Actual</option>
              <option value="1">Administrador</option>
              <option value="2">Veterinario</option>
              <option value="3">Usuario</option>
            </select>
          </div>
          <div class="col-sm-6">                    
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Estado</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
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


<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Visitas</h1>
<p class="mb-4">Listado de todos las Visitas en el sistema</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
     <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
      <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar Visitas" aria-label="Search" aria-describedby="basic-addon2">
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
            <th>Veterinario</th>
            <th>Ficha</th>
            <th>Consulta</th>
            <th>FR</th>
            <th>FC</th>
            <th>Preción</th>
            <th>Mucosa</th>
            <th>Temperatura</th>
            <th>Fecha</th>
            <th>Documento</th>
            <th>Observación</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>ID</th>
            <th>Veterinario</th>
            <th>Ficha</th>
            <th>consulta</th>
            <th>FR</th>
            <th>FC</th>
            <th>Preción</th>
            <th>Mucosa</th>
            <th>Temperatura</th>
            <th>Fecha</th>
            <th>Documento</th>
            <th>Observación</th>
          </tr>
        </tfoot>
        <tbody >
                    <?php

                        foreach($visita->result() as $row){
                    ?>
                      <tr>
                          <td> <?php echo $row->visita_id; ?></td>
                          <td> <?php echo $row->visita_usuario; ?></td>
                          <td> <?php echo $row->visita_ficha; ?></td>
                          <td> <?php echo $row->visita_consulta; ?></td>
                          <td> <?php echo $row->visita_fr; ?></td>
                          <td> <?php echo $row->visita_fc; ?></td>
                          <td> <?php echo $row->visita_precion; ?></td>
                          <td> <?php echo $row->visita_mucosa; ?></td>
                          <td> <?php echo $row->visita_temperatura; ?></td>
                          <td> <?php echo $row->visita_fecha; ?></td>
                          <td> <?php echo $row->visita_documento; ?><i class="fas fa-file-download d-flex justify-content-center" ></i></td>
                          <td> <?php echo $row->visita_observacion; ?></td>
                          
                      </tr>
                      <?php
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



<!-- Modal Agregar User-->
<div class="modal fade bd-example-modal-lg" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAdd" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAdd">Agregar Mascota <i class="fas fa-plus"></i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="p-5">
            <!-- Por defecto el perfil es usuario y el estado es 1-->
                <form class="mascotaAdd">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" id="mascota_usuario" name="mascota_usuario" placeholder="RUT Dueño">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" id="mascota_nombre" name="mascota_nombre" placeholder="Nombre">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="form-control">
                      <option>Especie</option>
                      <option value="1">Perro</option>
                      <option value="2">Gato</option>
                      <option value="3">Exotico</option>
                    </select>
                    </div>
                    <div class="col-sm-6">
                    <select class="form-control">
                      <option>Raza</option>
                      <option value="1">Golden Retriever</option>
                      <option value="2">Akita</option>
                      <option value="3">Exotico</option>
                    </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="form-control">
                      <option>Caracter</option>
                      <option value="1">Agresivo</option>
                      <option value="2">Docil</option>
                      <option value="3">Tranquilo</option>
                    </select>
                    </div>
                    <div class="col-sm-6">
                    <select class="form-control">
                      <option>Sexo</option>
                      <option value="1">Macho</option>
                      <option value="2">Hembra</option>
                    </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="date" class="form-control form-control-user" id="mascota_fechaNacimiento" name="mascota_fechaNacimiento" placeholder="Fecha Nacimiento">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" id="mascota_color" name="mascota_color" placeholder="Color">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="form-control">
                      <option>Estado</option>
                      <option value="1">Sano</option>
                      <option value="2">Post-Hoperatorio</option>
                      <option value="3">Tratamiento</option>
                    </select>
                    </div>
                    <div class="col-sm-6">
                    <select class="form-control">
                      <option>Esterizilización</option>
                      <option value="1">Si</option>
                      <option value="0">No</option>
                    </select>
                    </div>
                  <!-- La fecha de inscripcion es la cual se crea y la modificiacion es cuando se actualiza-->
                    <div class="file-field input-field form-group mt-4 file-path-wrapper ">
                      <input type="file" class="form-control-file file-path validate" id="mascota_foto" name="mascota_foto" accept="image/*">
                    </div>
                  </div>
                  <button id="bt_admin_masc_add" class="btn btn-primary btn-user btn-block">Agregar</button>                
                </form>              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
    </div>
  </div>

<!-- Modal Editar User-->
<div class="modal fade bd-example-modal-lg" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditar" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditar">Editar Mascota <i class="fas fa-edit"></i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="p-5">
            <!-- Por defecto el perfil es usuario y el estado es 1-->
                <form id="form_registrar" class="mascotaAdd">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" id="agregar_usuario" name="usuario" placeholder="RUT Dueño">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" id="agregar_nombre" name="nombre" placeholder="Nombre">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="form-control">
                      <option>Especie</option>
                      <option value="1">Perro</option>
                      <option value="2">Gato</option>
                      <option value="3">Exotico</option>
                    </select>
                    </div>
                    <div class="col-sm-6">
                    <select class="form-control">
                      <option>Raza</option>
                      <option value="1">Golden Retriever</option>
                      <option value="2">Akita</option>
                      <option value="3">Exotico</option>
                    </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="form-control">
                      <option>Caracter</option>
                      <option value="1">Agresivo</option>
                      <option value="2">Docil</option>
                      <option value="3">Tranquilo</option>
                    </select>
                    </div>
                    <div class="col-sm-6">
                    <select class="form-control">
                      <option>Sexo</option>
                      <option value="1">Macho</option>
                      <option value="2">Hembra</option>
                    </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="date" class="form-control form-control-user" id="agregar_nacimiento" name="nacimiento" placeholder="Fecha Nacimiento">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" id="agregar_color" name="color" placeholder="Color">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="form-control">
                      <option>Estado</option>
                      <option value="1">Sano</option>
                      <option value="2">Post-Hoperatorio</option>
                      <option value="3">Tratamiento</option>
                    </select>
                    </div>
                    <div class="col-sm-6">
                    <select class="form-control">
                      <option>Esterizilización</option>
                      <option value="1">Si</option>
                      <option value="0">No</option>
                    </select>
                    </div>
                  <!-- La fecha de inscripcion es la cual se crea y la modificiacion es cuando se actualiza-->
                    <div class="file-field input-field form-group mt-4 file-path-wrapper ">
                      <input type="file" class="form-control-file file-path validate" id="agregar_foto" name="foto" accept="image/*">
                    </div>
                  </div>
                  <button id="bt_admin_masc_add" class="btn btn-primary btn-user btn-block">Agregar</button>                
                </form>              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
    </div>
  </div>



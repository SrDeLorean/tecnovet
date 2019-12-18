<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Fichas</h1>
<p class="mb-4">Listado de todos las Fichas en el sistema</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
     <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
      <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar fichas" aria-label="Search" aria-describedby="basic-addon2">
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
            <th>RUT Dueño</th>
            <th>Mascota</th>
            <th>MicroChip</th>
            <th>Visitas</th>
            <th>Fecha Siguiente Visita</th>
            <th>Confirmación</th>
            <th>Alta en el Sistema</th>
            <th>Ultima Actualización</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>ID</th>
          <th>Dueño</th>
          <th>RUT Dueño</th>
            <th>Mascota</th>
            <th>MicroChip</th>
            <th>Visitas</th>
            <th>Fecha Siguiente Visita</th>
            <th>Confirmación</th>
            <th>Alta en el Sistema</th>
            <th>Ultima Actualización</th>
            <th>Acción</th>
          </tr>
        </tfoot>
        <tbody >
                    <?php
                        foreach($fichas->result() as $row){
                    ?>
                      <tr>
                          <td> <?php echo $row->ficha_id; ?></td>
                          <td> <?php echo $row->usuario_nombre," ",$row->usuario_apellido; ?></td>
                          <td> <?php echo $row->usuario_rut; ?></td>
                          <td><?php echo $row->mascota_nombre;?> </td>
                          <td><?php echo $row->mascota_microchip;?></td>
                          <td><button class="btn btn-primary btn-circle m-1 pb-1 visitasFichasBtn" role="button" data-toggle="modalVisitaFicha"><i class="fas fa-search"></i></button></td>
                          <td> <?php echo $row->ficha_control; ?></td>
                          <td> <?php if($row->ficha_confirmacion == 1){echo "Confirmado";}else{echo "No Confirmado";}; ?></td>
                          <td> <?php echo $row->ficha_creacion; ?></td>
                          <td> <?php echo $row->ficha_actualizacion; ?></td>
                          <th><button class="btn btn-warning btn-circle m-1 pb-1 fichaEditBtn" href="#" role="button" data-toggle="modal"><i class="fas fa-edit"></i></button></th>
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

<!-- Modal editar User-->
<div class="modal fade bd-example-modal-lg" id="modalEditarFicha" tabindex="-1" role="dialog" aria-labelledby="modalEditar" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditar">Editar ficha</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="p-5">
                <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><p id="nombreDueño"></p></h1>
                <h1 class="h4 text-gray-900 mb-4"><p id="nombreMascota"></p></h1>
                </div>
                <form class="perfil">
    
                  <div class="form-group">
                    <input type="datetime-local" class="form-control form-control-user" id="editar_nombre" name="fecha" placeholder="Fecha">
                  </div>
                  <div class="form-group">
                  <select class="form-control">
                      <option>Confirmación</option>
                      <option value="1">Si</option>
                      <option value="2">No</option>
                    </select>
                  </div>
                  
                  <button id="bt_especie_editar" class="btn btn-warning btn-user btn-block">Editar</button>                
                </form>              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
    </div>
  </div>
<!-- Modal para el uso de visitas, esto es para ver la lista de visitas que a realizado la mascota seleccionada-->

<!-- Modal -->
<div class="modal fade" id="modalVisitaFicha" tabindex="-1" role="dialog" aria-labelledby="modalVisitaFicha" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <h5 class="modal-title" id="modalVisitaFicha">Resumen de Visitas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Veterinario</th>
            <th>Tipo Consulta</th>
            <th>Obervación</th>
            <th>Fecha</th>
            <th>Documento</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>ID</th>
            <th>Veterinario</th>
            <th>Tipo Consulta</th>
            <th>Obervación</th>
            <th>Fecha</th>
            <th>Documento</th>
          </tr>
        </tfoot>
        <tbody >
          
        </tbody>
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalVisitaFicha" tabindex="-1" role="dialog" aria-labelledby="modalVisitaFicha" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <h5 class="modal-title" id="modalVisitaFicha">Resumen de Visitas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Veterinario</th>
            <th>Tipo Consulta</th>
            <th>Obervación</th>
            <th>Fecha</th>
            <th>Documento</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>ID</th>
            <th>Veterinario</th>
            <th>Tipo Consulta</th>
            <th>Obervación</th>
            <th>Fecha</th>
            <th>Documento</th>
          </tr>
        </tfoot>
        <tbody >
                    
        </tbody>
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


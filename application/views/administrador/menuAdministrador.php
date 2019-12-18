<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Bienvenido  <?php print_r(($usu = $this->session->userdata())['administrador'][0]->usuario_nombre );?></h1>
  
</div>

<!-- Content Row -->
<div class="row">

  <!-- Estadisticas de Usuario -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Dueños</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">N° <?php print_r(count($i = $this->db->get("usuarios")->result()));?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-users fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Estadisticas de Mascotas -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Mascotas</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">N° <?php print_r(count($i = $this->db->get("mascotas")->result()));?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-paw fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Cantidad de Visitas -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Visitas</div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">N°<?php print_r(count($i = $this->db->get("visitas")->result()));?></div>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Visitas del Dia</div>
            <!-- --------------------------------------------------------------Aca hay que corregir el SQL por que no esta funcionando como deberia --------------------------------------->
            <div class="h5 mb-0 font-weight-bold text-gray-800">N° <?php $this->db->select('visita_id');print_r( count($this->db->get_where('visitas', array('visita_fecha'.date('Y-m-d')))->result()));?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-check fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Content Row -->

<div class="row">
<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Visitas del dia <?php echo date('d-m-Y');?></h1>
          <p class="mb-4">En esta seccion se muestran las visitas del dia.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Resumen</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Ficha</th>
                      <th>Dueño</th>
                      <th>Mascota</th>
                      <th>Especie</th>
                      <th>Contacto</th>
                      <th>Consulta</th>
                      <th>Hora</th>
                      <th>Estado</th>
                      <th>Ingresar</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Ficha</th>
                      <th>Dueño</th>
                      <th>Mascota</th>
                      <th>Especie</th>
                      <th>Contacto</th>
                      <th>Consulta</th>
                      <th>Hora</th>
                      <th>Estado</th>
                      <th>Ingresar</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>id</td>
                      <td>nombre dueño</td>
                      <td>nombre mascota</td>
                      <td>especie</td>
                      <td>contacto</td>
                      <td>consulta</td>
                      <td>hora</td>
                      <td>estado</td>
                      <td><button class="btn btn-primary btn-circle m-1 pb-1 ingresarVisitaBtn" role="button" data-toggle="modal" data-target="#modalIngresarVisita"><i class="fas fa-plus"></i></button></td>
                    </tr>
                    <tr>
                      <td>id</td>
                      <td>nombre dueño</td>
                      <td>nombre mascota</td>
                      <td>especie</td>
                      <td>contacto</td>
                      <td>consulta</td>
                      <td>hora</td>
                      <td>estado</td>
                      <td><button class="btn btn-primary btn-circle m-1 pb-1 ingresarVisitaBtn" role="button" data-toggle="modal" data-target="#modalIngresarVisita"><i class="fas fa-plus"></i></button></td>
                    </tr>
                    <tr>
                      <td>id</td>
                      <td>nombre dueño</td>
                      <td>nombre mascota</td>
                      <td>especie</td>
                      <td>contacto</td>
                      <td>consulta</td>
                      <td>hora</td>
                      <td>estado</td>
                      <td><button class="btn btn-primary btn-circle m-1 pb-1 ingresarVisitaBtn" role="button" data-toggle="modal" data-target="#modalIngresarVisita"><i class="fas fa-plus"></i></button></td>
                    </tr>
                    <tr>
                      <td>id</td>
                      <td>nombre dueño</td>
                      <td>nombre mascota</td>
                      <td>especie</td>
                      <td>contacto</td>
                      <td>consulta</td>
                      <td>hora</td>
                      <td>estado</td>
                      <td><button class="btn btn-primary btn-circle m-1 pb-1 ingresarVisitaBtn" role="button" data-toggle="modal" data-target="#modalIngresarVisita"><i class="fas fa-plus"></i></button></td>
                    </tr>
                    <tr>
                      <td>id</td>
                      <td>nombre dueño</td>
                      <td>nombre mascota</td>
                      <td>especie</td>
                      <td>contacto</td>
                      <td>consulta</td>
                      <td>hora</td>
                      <td>estado</td>
                      <td><button class="btn btn-primary btn-circle m-1 pb-1 ingresarVisitaBtn" role="button" data-toggle="modal" data-target="#modalIngresarVisita"><i class="fas fa-plus"></i></button></td>
                    </tr>
                    <tr>
                      <td>id</td>
                      <td>nombre dueño</td>
                      <td>nombre mascota</td>
                      <td>especie</td>
                      <td>contacto</td>
                      <td>consulta</td>
                      <td>hora</td>
                      <td>estado</td>
                      <td><button class="btn btn-primary btn-circle m-1 pb-1 ingresarVisitaBtn" role="button" data-toggle="modal" data-target="#modalIngresarVisita"><i class="fas fa-plus"></i></button></td>
                    </tr>
                    <tr>
                      <td>id</td>
                      <td>nombre dueño</td>
                      <td>nombre mascota</td>
                      <td>especie</td>
                      <td>contacto</td>
                      <td>consulta</td>
                      <td>hora</td>
                      <td>estado</td>
                      <td><button class="btn btn-primary btn-circle m-1 pb-1 ingresarVisitaBtn" role="button" data-toggle="modal" data-target="#modalIngresarVisita"><i class="fas fa-plus"></i></button></td>
                    </tr>
                    <tr>
                      <td>id</td>
                      <td>nombre dueño</td>
                      <td>nombre mascota</td>
                      <td>especie</td>
                      <td>contacto</td>
                      <td>consulta</td>
                      <td>hora</td>
                      <td>estado</td>
                      <td><button class="btn btn-primary btn-circle m-1 pb-1 ingresarVisitaBtn" role="button" data-toggle="modal" data-target="#modalIngresarVisita"><i class="fas fa-plus"></i></button></td>
                    </tr>
                    <tr>
                      <td>id</td>
                      <td>nombre dueño</td>
                      <td>nombre mascota</td>
                      <td>especie</td>
                      <td>contacto</td>
                      <td>consulta</td>
                      <td>hora</td>
                      <td>estado</td>
                      <td><button class="btn btn-primary btn-circle m-1 pb-1 ingresarVisitaBtn" role="button" data-toggle="modal" data-target="#modalIngresarVisita"><i class="fas fa-plus"></i></button></td>
                    </tr>
                    <tr>
                      <td>id</td>
                      <td>nombre dueño</td>
                      <td>nombre mascota</td>
                      <td>especie</td>
                      <td>contacto</td>
                      <td>consulta</td>
                      <td>hora</td>
                      <td>estado</td>
                      <td><button class="btn btn-primary btn-circle m-1 pb-1 ingresarVisitaBtn" role="button" data-toggle="modal" data-target="#modalIngresarVisita"><i class="fas fa-plus"></i></button></td>
                    </tr>
                    <tr>
                      <td>id</td>
                      <td>nombre dueño</td>
                      <td>nombre mascota</td>
                      <td>especie</td>
                      <td>contacto</td>
                      <td>consulta</td>
                      <td>hora</td>
                      <td>estado</td>
                      <td><button class="btn btn-primary btn-circle m-1 pb-1 ingresarVisitaBtn" role="button" data-toggle="modal" data-target="#modalIngresarVisita"><i class="fas fa-plus"></i></button></td>
                    </tr>
                    <tr>
                      <td>id</td>
                      <td>nombre dueño</td>
                      <td>nombre mascota</td>
                      <td>especie</td>
                      <td>contacto</td>
                      <td>consulta</td>
                      <td>hora</td>
                      <td>estado</td>
                      <td><button class="btn btn-primary btn-circle m-1 pb-1 ingresarVisitaBtn" role="button" data-toggle="modal" data-target="#modalIngresarVisita"><i class="fas fa-plus"></i></button></td>
                    </tr>
                    <tr>
                      <td>id</td>
                      <td>nombre dueño</td>
                      <td>nombre mascota</td>
                      <td>especie</td>
                      <td>contacto</td>
                      <td>consulta</td>
                      <td>hora</td>
                      <td>estado</td>
                      <td><button class="btn btn-primary btn-circle m-1 pb-1 ingresarVisitaBtn" role="button" data-toggle="modal" data-target="#modalIngresarVisita"><i class="fas fa-plus"></i></button></td>
                    </tr>
                    <tr>
                      <td>id</td>
                      <td>nombre dueño</td>
                      <td>nombre mascota</td>
                      <td>especie</td>
                      <td>contacto</td>
                      <td>consulta</td>
                      <td>hora</td>
                      <td>estado</td>
                      <td><button class="btn btn-primary btn-circle m-1 pb-1 ingresarVisitaBtn" role="button" data-toggle="modal" data-target="#modalIngresarVisita"><i class="fas fa-plus"></i></button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
  

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!--Inicio Modal para igresar una visita -->

<div class="modal fade" id="modalIngresarVisita" tabindex="-1" role="dialog" aria-labelledby="modalIngresarVisita" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
      <h5 class="modal-title" id="modalAdd">Ingreso de Visitas <i class="fas fa-plus"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="p-5">
            <!-- Por defecto el perfil es "3" usuario y el estado es "1" activo-->
                <form id="form_registrar" class="user">
                <div class="form-group">
                    <select class="form-control">
                      <option>Tipo Consulta</option>
                      <option value="1">Consulta</option>
                      <option value="2">Vacuna</option>
                    </select>
                  </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" id="fr" name="fr" placeholder="FR">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" id="fc" name="fc" placeholder="FC">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" id="precion" name="precion" placeholder="Preción">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" id="mucosa" name="mucosa" placeholder="Mucosa">
                    </div>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="observacion" name="observacion" placeholder="Observación">
                  </div>
                    <div class="file-field input-field form-group mt-4 file-path-wrapper ">
                      <input type="file" class="form-control-file file-path validate" id="usuario_doc" name="usuario_doc" accept="application/pdf">
                    </div>
                  </div>
                  <button id="bt_IngresarVisita" class="btn btn-primary btn-user btn-block">Ingresar visita</button>                
                </form>              
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
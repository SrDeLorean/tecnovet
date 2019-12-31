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
                      <th>Caracter</th>
                      <th>Contacto</th>
                      <th>Consulta</th>
                      <th>Hora</th>                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Ficha</th>
                      <th>Dueño</th>
                      <th>Mascota</th>
                      <th>Especie</th>
                      <th>Caracter</th>
                      <th>Contacto</th>
                      <th>Consulta</th>
                      <th>Hora</th>
                    </tr>
                  </tfoot>
                  <tbody >
                    <?php
                        foreach($fichas->result() as $row){
                    ?>
                      <tr>
                          <td> <?php echo $row->ficha_id; ?></td>
                          <td> <?php echo $row->usuario_nombre," ",$row->usuario_apellido; ?></td>
                          <td> <?php echo $row->mascota_nombre;?> </td>
                          <td> <?php echo $row->especie_nombre; ?></td>
                          <td> <?php echo $row->caracter_nombre; ?></td>
                          <td> <?php echo $row->usuario_telefono; ?></td>
                          <td> <?php echo $row->consulta_nombre; ?></td>
                          <td> <?php echo $row->ficha_control; ?></td>
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


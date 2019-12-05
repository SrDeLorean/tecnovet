        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Usuarios</h1>
          <p class="mb-4">Listado de todos los Usuarios en el sistema</p>

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
                      <th>N°</th>
                      <th>RUT</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Direccion</th>
                      <th>Correo</th>
                      <th>Telefono</th>
                      <th>Perfil</th>
                      <th>Estado</th>
                      <th>Foto</th>
                      <th>Acción</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>N°</th>
                      <th>RUT</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Direccion</th>
                      <th>Correo</th>
                      <th>Telefono</th>
                      <th>Perfil</th>
                      <th>Estado</th>
                      <th>Foto</th>
                      <th>Acción</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      <?php
                      for ($i = 1; $i <= 20; $i++) {
                      echo"<tr>" ;
                      echo "<td>$i</td>";
                      echo "<td>11111111-1</td>";
                      echo "<td>Juan</td>";
                      echo "<td>Perez</td>";
                      echo "<td>Algun Lugar de Curico</td>";
                      echo "<td>algo@correo.com</td>";
                      echo "<td>+56994988986</td>";
                      echo "<td>usuario</td>";
                      echo "<td>activo</td>";
                      echo '<td><img src="http://localhost/tecnovet/assets/img/perfilMapache.jpg" class="rounded mx-auto d-block" width="75" height="75" alt="Responsive image"></td>';
                      echo '<th >'
                        . '<a class="btn btn-primary" href="#" role="button"><i class="fas fa-file"></i></a>'
                        . '<a class="btn btn-warning" href="#" role="button"><i class="fas fa-edit"></i></a>'
                        .'<a class="btn btn-danger" href="#" role="button"><i class="fas fa-trash"></i></a>'
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
      
      <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
  </div>
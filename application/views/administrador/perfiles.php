        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Perfiles</h1>
          <p class="mb-4">Listado de todos los Perfiles en el sistema </p>

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
                      <th>Nombre</th>
                      <th>Estado</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>N°</th>
                      <th>Nombre</th>
                      <th>Estado</th>
                      <th></th>

                    </tr>
                  </tfoot>
                  <tbody>
                      <?php
                      for ($i = 1; $i <= 5; $i++) {
                      echo"<tr>" ;
                      echo "<td>$i</td>";
                      echo "<td>nombre perfil</td>";
                      echo "<td>estado de perfil</td>";
                      echo '<th>'
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
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Caracteres</h1>
          <p class="mb-4">Listado de  los Caracteres hablitados en el sistema </p>
          <div class="text-right">Ingresar <button type="button" class="btn btn-primary btn-circle m-1 pb-1 " data-toggle="modal" data-target="#modalAdd"><i class="fas fa-plus"></i></button></div> 

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
               <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                  <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar caracter" aria-label="Search" aria-describedby="basic-addon2">
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
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>Acción</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>N°</th>
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>Acción</th>

                    </tr>
                  </tfoot>
                  <tbody>
                      <?php
                      for ($i = 1; $i <= 5; $i++) {
                      echo"<tr>" ;
                      echo "<td>$i</td>";
                      echo "<td>nombre caracter</td>";
                      echo "<td>descripcion de caracter</td>";
                      echo '<th >'
                        . '<button class="btn btn-warning btn-circle m-1 pb-1 href="#" role="button" data-toggle="modal" data-target="#modalEdit"><i class="fas fa-edit"></i></button>'
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
          <h5 class="modal-title" id="modalEdit">Editar caracter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">'caracter_nombre'</h1>
                </div>
                <form class="perfil">
    
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="editar_nombre" name="nombre" placeholder="Nombre">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="editar_correo" name="descripcion" placeholder="Descripcion">
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
          <h5 class="modal-title" id="modalAdd">Agregar caracter <i class="fas fa-plus"></i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="p-5">
            <!-- Por defecto el perfil es usuario y el estado es 1-->
            <form class="perfilAdd">    
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="editar_nombre" name="nombre" placeholder="Nombre">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="editar_correo" name="descripcion" placeholder="Descripcion">
              </div>
              
              <button id="bt_caracter_editar" class="btn btn-primary btn-user btn-block">Agregar</button>                
            </form>               
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
    </div>
  </div>


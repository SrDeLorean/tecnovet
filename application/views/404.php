<div class="container-fluid">

          <!-- 404 Error Text -->
          <div class="text-center">
            <div class="error mx-auto" data-text="404">404</div>
            <p class="lead text-gray-800 mb-5">Pagina No Encontrada</p>
            <p class="text-gray-500 mb-0">Si esta leyendo esto, a encontrado un problema</p>
            <a href="<?php 
            if($this->session->userdata("administrador")){
              echo base_url().'administrador';
            }
            else if($this->session->userdata("veterinario")){
              echo base_url().'veterinario';
            }
            else if($this->session->userdata("usuario")){
              echo base_url().'usuario';
            }
            else{
              echo base_url().'index';
            }
            ?>">&larr; Volver</a>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      


$( document ).ready(function() {
    var base_url = "http://localhost/tecnovet/"
 //-------Login-------------
    $("#bt_login").click(function(e){
        e.preventDefault();
        var email = $("#email").val();
        var password = $("#password").val();
        //envio de datos
        $.ajax({
            url:base_url+'login',
            type:'post',
            dataType:'json',
            data:{email:email, password:password},
            success:function(o){
                if(o.msg =="0"){
                    alert(o.msg,'algo paso'),{
                        type: 'primary',
                        position: 'topright',
                        appendType: 'append',
                        closeBtn: false,
                        className: ''
                    }
                }else{
                    window.location.href=base_url+o.msg;
                }
            },
            error:function(){
                alert('Error'),{
                    type: 'warning',
                    position: 'topright',
                    appendType: 'append',
                    closeBtn: false,
                    className: ''
                }
            }
        });
    });
 //-------------Registrar Usuarios---------
    $("#bt_registrar").click(function(e){
        e.preventDefault();
        var form = $("#form_registrar")[0];
        var data = new FormData(form);
        $.ajax({
            url:base_url+'crearUsuario',
            type: 'POST',
            dataType: 'json',
            data: data,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success:function(o){
                alert(o.msg, "registrado");
            },
            error:function(){
                alert("Error 500");
            }
        });
    });
 //------------------modal editar usuario Usuarios // Carga de datos al modal-------------
    $(document).ready(function(){
        $('.userEditBtn').on('click', function(){
            $('#modalEdit').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            //console.log(data);
            $('#editar_id').val(data[0]);
            $('#editar_nombre').val(data[2]);
            $('#editar_apellido').val(data[3]);
            $('#editar_rut').val(data[1]); 
            $('#editar_telefono').val(data[5]);
            $('#editar_direccion').val(data[6]);
            $('#editar_email').val(data[4]);
            $('#editar_contaseña').val(data[6]);
            $('#editar_perfil').val(data[8]);
            $('#editar_estado').val(data[9]);
            $('#editar_foto').val(data[10]);
            var nombre = data[2]+data[3];
            document.getElementById('nombre').innerHTML = nombre;
        });
    });
 //----------------Modificar usuario--------------------------------
    $("#bt_editar").click(function(e){
        e.preventDefault();
        var form = $("#form_editar")[0];
        var data = new FormData(form);
        $.ajax({
            url:base_url+'editarUsuario',
            type: 'POST',
            dataType: 'json',
            data: data,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success:function(o){
                alert(o.msg, "Usuario Editado");
            },
            error:function(){
                alert("Error 500");
            }
        });
    });
//------------------Agregar Perfil------------------
    $("#bt_perfil_agregar").click(function(e){
        e.preventDefault();
        var form = $("#form_registrar")[0];
        var data = new FormData(form);
        $.ajax({
            url:base_url+'crearPerfil',
            type: 'POST',
            dataType: 'json',
            data: data,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success:function(o){
                alert("Registrado");
            },
            error:function(){
                alert("Error 500");
            }
        });
    });
 //---------Carga de datos al modal Editar Perfil-------------
    $(document).ready(function(){
        $('.perfilEditBtn').on('click', function(){
            $('#modalEditPerfil').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            //console.log(data);
            $('#editar_id').val(data[0]);
            $('#editar_nombre').val(data[1]);
            $('#editar_descripcion').val(data[2]);
            var nombre = data[1];
            document.getElementById('nombre').innerHTML = nombre;
        });
    });

//------------------------------------------------------------------------
    $("#bt_admin_masc_add").click(function(e){
        e.preventDefault();
        var form = $("#form_registrar")[0];
        var data = new FormData(form);
        $.ajax({
            url:base_url+'crearMascota',
            type: 'POST',
            dataType: 'json',
            data: data,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success:function(o){
                alert("Registrado");
            },
            error:function(){
                alert("Error 500");
            }
        });
    });
//-------------------------Estado Mascota -------------------------
//-------------------------Agregar Estado -------------------------
    $("#bt_agregar_estado").click(function(e){
        e.preventDefault();
        var form = $("#form_registrar")[0];
        var data = new FormData(form);
        $.ajax({
            url:base_url+'crearEstado',
            type: 'POST',
            dataType: 'json',
            data: data,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success:function(o){
                alert("Registrado");
            },
            error:function(){
                alert("Error 500");
            }
        });
    });
//-------------------------Editar Estado Mascota -------------------------
    $(document).ready(function(){
        $('.estadoEditBtn').on('click', function(){
            $('#modalEditEstado').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#estado_id_editar').val(data[0]);
            $('#estado_nombre_editar').val(data[1]);
            $('#estado_descripcion_editar').val(data[2]);
            var nombre = data[1];
            document.getElementById('nombre').innerHTML = nombre;
        });
    });
//-------------------------Caracter Mascota -------------------------
//-------------------------Agregar Caracter -------------------------
    $("#bt_caracter_crear").click(function(e){
        e.preventDefault();
        var form = $("#form_registrar_caracter")[0];
        var data = new FormData(form);
        $.ajax({
            url:base_url+'crearCaracter',
            type: 'POST',
            dataType: 'json',
            data: data,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success:function(o){
                alert("Registrado");
            },
            error:function(){
                alert("Error 500");
            }
        });
    });
//-------------------------Editar Caracter Mascota -------------------------
    $(document).ready(function(){
        $('.caracterEditBtn').on('click', function(){
            $('#modalEditCaracter').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#caracter_id_editar').val(data[0]);
            $('#caracter_nombre_editar').val(data[1]);0
            $('#caracter_descripcion_editar').val(data[2]);
            var nombre = data[1];
            document.getElementById('nombre').innerHTML = nombre;
        });
    });
//-------------------------Sexo Mascota -------------------------
//-------------------------Agregar Sexo -------------------------
    $("#bt_sexo_agregar").click(function(e){
        e.preventDefault();
        var form = $("#form_registrar_sexo")[0];
        var data = new FormData(form);
        $.ajax({
            url:base_url+'crearSexo',
            type: 'POST',
            dataType: 'json',
            data: data,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success:function(o){
                alert("Registrado");
            },
            error:function(){
                alert("Error 500");
            }
        });
    });
//-------------------------Editar Sexo Mascota -------------------------
    $(document).ready(function(){
        $('.sexoEditBtn').on('click', function(){
            $('#modalEditSexo').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#sexo_id_editar').val(data[0]);
            $('#sexo_nombre_editar').val(data[1]);0
            $('#sexo_descripcion_editar').val(data[2]);
            var nombre = data[1];
            document.getElementById('nombre').innerHTML = nombre;
        });
    });
//-------------------------Especie Mascota -------------------------
//-------------------------Agregar Especie -------------------------
    $("#bt_especie_agregar").click(function(e){
        e.preventDefault();
        var form = $("#form_registrar_especie")[0];
        var data = new FormData(form);
        $.ajax({
            url:base_url+'crearEspecie',
            type: 'POST',
            dataType: 'json',
            data: data,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success:function(o){
                alert("Registrado");
            },
            error:function(){
                alert("Error 500");
            }
        });
    });
//-------------------------Editar Sexo Mascota -------------------------
    $(document).ready(function(){
        $('.especieEditBtn').on('click', function(){
            $('#modalEditEspecie').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#especie_id_editar').val(data[0]);
            $('#especie_nombre_editar').val(data[1]);0
            $('#especie_descripcion_editar').val(data[2]);
            var nombre = data[1];
            document.getElementById('nombre').innerHTML = nombre;
        });
    });
    

//-------------------------Raza Mascota ----------------------------
//-------------------------Agregar Especie -------------------------
//-------------------------Editar Sexo Mascota -------------------------
    $(document).ready(function(){
        $('.razaEditBtn').on('click', function(){
            $('#modalEditRaza').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#raza_id_editar').val(data[0]);
            $('#raza_nombre_editar').val(data[1]);
            $('#raza_descripcion_editar').val(data[2]);
            var nombre = data[1];
            document.getElementById('nombre').innerHTML = nombre;
        });
    });
//-------------------------Ficha Mascota ----------------------------
//-------------------------Agregar Ficha -------------------------
//-------------------------Editar Ficha Mascota -------------------------
    $(document).ready(function(){
        $('.fichaEditBtn').on('click', function(){
            $('#modalEditarFicha').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#raza_id_editar').val(data[0]);
           
            var dueño = data[1];
            var mascota = data[3];
            document.getElementById('nombreDueño').innerHTML = dueño;
            document.getElementById('nombreMascota').innerHTML = mascota;
        });
    });
//-------------------------Visitas Ficha -------------------------  
    $(document).ready(function(){
        $('.visitasFichasBtn').on('click', function(){
            $('#modalVisitaFicha').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data[0]);
            $d = data[0];
            $.ajax({
                url:base_url+'cargarFicha',
                type: 'Post',
                dataType: 'json',
                data: $d
            })
            .done(function(data){
                console.log(data);
            });
        });
    });
    
        
    
    
//-------------------------Vacuna  Mascota ----------------------------
//-------------------------Agregar Vacuna -------------------------
//-------------------------Editar Vacuna Mascota -------------------------
    $(document).ready(function(){
        $('.vacunaEditBtn').on('click', function(){
            $('#modalEditVacuna').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#vacuna_id_editar').val(data[0]);
            $('#vacuna_nombre_editar').val(data[1]);
            $('#vacuna_descripcion_editar').val(data[2]);
            var nombre = data[1];
            document.getElementById('nombre').innerHTML = nombre;
        });
    });
//-------------------------Tratamiento  Mascota ----------------------------
//-------------------------Agregar Tratamiento -------------------------
//-------------------------Editar Tratamiento Mascota -------------------------
    $(document).ready(function(){
        $('.tratamientoEditBtn').on('click', function(){
            $('#modalEditTratamiento').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#tratamiento_id_editar').val(data[0]);
            $('#tratamiento_nombre_editar').val(data[1]);
            $('#tratamiento_descripcion_editar').val(data[2]);
            var nombre = data[1];
            document.getElementById('nombre').innerHTML = nombre;
        });
    });
//-------------------------Hospitalizacion  Mascota ----------------------------
//-------------------------Agregar Hospitalización -------------------------
//-------------------------Editar Hospitalizacion Mascota -------------------------
    $(document).ready(function(){
        $('.hospitalizacionEditBtn').on('click', function(){
            $('#modalEditHospitalizacion').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#hospitalizacion_id_editar').val(data[0]);
            $('#hospitalizacion_nombre_editar').val(data[1]);
            $('#hospitalizacion_descripcion_editar').val(data[2]);
            var nombre = data[1];
            document.getElementById('nombre').innerHTML = nombre;
        });
    });
//-------------------------Hospitalizacion  Mascota ----------------------------
//-------------------------Agregar Hospitalización -------------------------
//-------------------------Editar Hospitalizacion Mascota -------------------------
    $(document).ready(function(){
        $('.consultaEditBtn').on('click', function(){
            $('#modalEditConsulta').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#consulta_id_editar').val(data[0]);
            $('#consulta_nombre_editar').val(data[1]);
            $('#consulta_descripcion_editar').val(data[2]);
            var nombre = data[1];
            document.getElementById('nombre').innerHTML = nombre;
        });
    });
});
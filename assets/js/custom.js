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

    $("#bt_registrar_administrador").click(function(e){
        e.preventDefault();
        var form = $("#form_registrar")[0];
        var data = new FormData(form);
        $.ajax({
            url:base_url+'crearUsuarioAdministrador',
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

});
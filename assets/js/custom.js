$( document ).ready(function() {
    var base_url = "http://localhost/tecnovet/"
//-------Login-------------
    $("#bt_login").click(function(e){
        e.preventDefault();
        var email = $("#email").val();
        var password = $("#password").val();+

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
});
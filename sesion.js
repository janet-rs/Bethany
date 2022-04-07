jQuery(document).on('submit','#formlg', function(event){
    event.preventDefault();
    $('.error').slideDown('slow');

    jQuery.ajax({
        url: './modelo/sesion.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function(){

        }
    })
    .done(function(respuesta){
        console.log(respuesta);
        if(!respuesta.error){
            if(respuesta.tipo == 'admin'){
                location.href = 'contacto.html';
            }else if(respuesta.tipo == 'usuario'){
                location.href = 'contactoUsuario.html'
            }

        }else{
            $('.error').slideUp('slow');
            setTimeout(function(){
                $('.error').slideUp('slow');
            },5000);
            $('.botonlg').val('Iniciar Sesion');
        }
    })
    .fail(function(resp){
        console.log(resp.responseText);
    })
    .always(function(){
        console.log("complete");
    });
});
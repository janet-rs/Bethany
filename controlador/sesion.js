jQuery(document).on('submit','#formlg', function(event){
    event.preventDefault();
    $('.error').slideDown('slow');

    /*jQuery.ajax({
        url: './modelo/sesion.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function(){

        }
    })*/
    done(function(respuesta){
        console.log(respuesta);
        if(respuesta.error){
            $('.error').slideUp('slow');
            setTimeout(function(){
                $('.error').slideUp('slow');
            },5000);
            $('.botonlg').val('Iniciar Sesion');
        }
    })
});
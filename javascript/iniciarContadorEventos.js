$(iniciar);

function iniciar(){
    $.ajax({
        url: './php/contarEventos.php',
        type: 'GET',
        dataType: 'text',
    })
    .done(function(data){
        $(".contador-eventos").append(data)
    })
    .fail(function(){
        $(".contador-eventos").append('???')
    });
}
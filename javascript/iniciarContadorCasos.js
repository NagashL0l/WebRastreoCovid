$(iniciar);

function iniciar(){
    $.ajax({
        url: './php/contarCasos.php',
        type: 'GET',
        dataType: 'text',
    })
    .done(function(data){
        $(".contador-casos").append(data)
    })
    .fail(function(){
        $(".contador-casos").append('???')
    });
}
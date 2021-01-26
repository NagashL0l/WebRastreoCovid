function comprobarLogin(){
    formCorrecto = true;
    fallo = "";

    dniUser = document.getElementById("dniUser");
    // correo cumple reg. exp.
    if(!checkDNI(dniUser.value)){
        dniUser.value = "";
        formCorrecto = false;
        mal += "DNI no válido.\n";
    }

    pass = document.getElementById("pass");
    // contraseña cumple exp. reg.
    if(!checkPassword(pass.value)){
        pass.value = "";
        formCorrecto = false;
        mal += "Contraseña no válida.\n";
    }

    if(formCorrecto){
        $.ajax({
            url: './php/cogerUsuario.php?dniUser=' + dniUser.value + '&pass=' + pass.value,
            type: 'GET',
            dataType: 'json',
        })
        .done(function(data){
            if(typeof data[0] === "undefined"){
                alert("DNI o contraseña incorrectos. Intentalo de nuevo.");
                pass.value = "";
            }else{
                window.open("login.php?dniUser=" + dniUser.value + "&pass=" + pass.value ,"_self");
            }
        })
        .fail(function(){
            alert("No se ha podido iniciar sesión. Intentalo de nuevo más tarde.");
        });
    }else{
        alert(fallo);
    }
}

function cerrarSesion(){
    window.open("cerrar_sesion.php", "_self");
}
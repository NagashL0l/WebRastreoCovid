function comprobarLogin() {
    formCorrecto = true;
    fallo = "";

    dniUser = document.getElementById("ldniUser");
    
    if(!checkDNI(dniUser.value)){
        dniUser.style.border = "2px solid red";
        dniUser.value = "";
        formCorrecto = false;
        mal += "DNI no válido.\n";
    }

    pass = document.getElementById("lpass");
    
    if(!checkPassword(pass.value)){
        pass.style.border = "2px solid red";
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


function comprobarRegistroCaso() {
    formCorrecto = true;
    fallo = "";
    
    dniCaso = document.getElementById("rdniCaso");
    
    if(!checkDNI(dniUser.value)){
        dniUser.style.border = "2px solid red";
        dniUser.value = "";
        formCorrecto = false;
        mal += "DNI no válido.\n";
    }

    movilCaso = document.getElementById("rnombre");
    
    if(!checkNombre(movilCaso.value)){
        movilCaso.style.border = "2px solid red";
        movilCaso.value = "";
        formCorrecto = false;
        mal += "Nombre no válido.\n";
    }

    movilCaso = document.getElementById("rmovil");
    
    if(!checkMovil(movilCaso.value)){
        movilCaso.style.border = "2px solid red";
        movilCaso.value = "";
        formCorrecto = false;
        mal += "Móvil no válido.\n";
    }


    emailCaso = document.getElementById("remail");
    
    if(!checkEmail(emailCaso.value)){
        emailCaso.style.border = "2px solid red";
        emailCaso.value = "";
        formCorrecto = false;
        mal += "Email no válido.\n";
    }

    


}




function cerrarSesion(){
    window.open("cerrar_sesion.php", "_self");
}



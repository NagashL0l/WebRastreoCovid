function checkPassword(pass){
    regExPass = /.{2,20}/;
    if(pass.match(regExPass) && pass.length <= 20)
        return true;
    else return false;
}

function checkDNI(dniUser){
    regExDni = /[A-Za-z0-9]/;
    if(dniUser.match(regExDni) && dniUser.length == 9)   
        return true;
    else return false;
}

function checkNombre(nombreCaso){
    regExUser = /[A-Za-z 0-9]{6,40}/;
    if(nombreCaso.match(regExUser) && nombreCaso.length <= 40)
        return true;
    else return false;
}

function checkMovil(movilCaso){
    regExPhone = /[0-9]{9}/;
    if(movilCaso.match(regExPhone) && movilCaso.length <= 12)
        return true;
    else return false;
}

function checkEmail(emailCaso){
    regExEmail = /[a-zA-Z0-9\-\_\.]*\@[a-zA-Z0-9\-\_\.]*\.[a-zA-Z0-9\-\_\.]*/;
    if(emailCaso.match(regExEmail))
        return true;
    else return false;
}

function checkTexto(descripcionEvento){
    regExDesc = /[A-Za-z0-9]{1,230}/;
    if(descripcionEvento.match(regExDesc))
        return true;
    else return false;
}
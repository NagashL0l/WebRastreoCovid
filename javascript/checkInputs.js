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
    regExUser = /[A-Za-z0-9]{6,15}/;
    if(user.match(regExUser) && user.length <= 40)
        return true;
    else return false;

}

function checkMovil(movilCaso){
    regExPhone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    if(user.match(regExPhone) && user.length <= 12)
        return true;
    else return false;
}

function checkEmail(emailCaso){
    regExEmail = /[a-zA-Z0-9\-\_\.]*\@[a-zA-Z0-9\-\_\.]*\.[a-zA-Z0-9\-\_\.]*/;
    if(email.match(regExEmail))
        return true;
    else return false;
}
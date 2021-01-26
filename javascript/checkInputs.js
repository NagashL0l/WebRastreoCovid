function checkPassword(pass){
    regExPass = /.{2,20}/;
    if(pass.match(regExPass) && pass.length <= 20)
        return true;
    else return false;
}

function checkDNI(dniUser){
    regExUser = /[A-Za-z0-9]/;
    if(dniUser.match(regExUser) && dniUser.length == 9)   
        return true;
    else return false;
}
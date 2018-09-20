function formhash(form, password, cpassword) {
    
    var p = document.createElement("input");
    var cp = document.createElement("input");
 

    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);
    
    form.appendChild(cp);
    cp.name = "cp";
    cp.type = "hidden";
    cp.value = hex_sha512(cpassword.value);
 

    password.value = "";
    cpassword.value = "";
    
}
 
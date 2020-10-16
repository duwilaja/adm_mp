// let ip = 'http://localhost/adm_mp/';
let ip = 'http://172.20.1.34/adm_mp/';

$(document).ready(function () {
    
});

$('#form_login').submit(function (e) { 
    e.preventDefault();
    login();
});

$('#form_register').submit(function (e) { 
    e.preventDefault();
    daftar();
});

function daftar() { 
    $.ajax({
        type: "POST",
        url: ip+"adm/Login/daftar",
        data: $('#form_register').serialize(),
        dataType: "json",
        success: function (r) {
            if (r.status) {
                location.assign(r.redi);
            }else{
                alert(r.msg);
            }
        }
    });
}

function login() { 
    $.ajax({
        type: "POST",
        url: ip+"adm/Login/login",
        data: $('#form_login').serialize(),
        dataType: "json",
        success: function (r) {
            if (r.status) {
                location.assign(r.redi);
            }else{
                alert(r.msg);
            }
        }
    });
}
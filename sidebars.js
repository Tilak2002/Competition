/* global bootstrap: false */
(() => {
    'use strict'
    const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(tooltipTriggerEl => {
        new bootstrap.Tooltip(tooltipTriggerEl)
    })
})()


$('#yes').click(function() {

    $.ajax({
        method: "post",
        url: "http://localhost/Competition/sign_out.php",

    }).done(function() {
        // window.location.assign("http://localhost/Invoice/login.php");
        window.location.assign("http://localhost/Competition/index.php");

    });
});



var header = document.getElementById("nav");  //$('#nav');
var btns = header.getElementsByClassName("nav-link"); //$('.nsv-link').each({})

let current_url = window.location.href;

for (var i = 0; i < btns.length; i++) {
    if(btns[i].href == current_url) {
        btns[i].className += " active";
    }
}
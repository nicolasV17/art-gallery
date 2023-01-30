document.addEventListener("DOMContentLoaded", () => {

    //cambiar color del footer
    document.querySelector("#contenedor-footer").classList.add("footer-location");

    // cambiar iconos redes sociales

    document.querySelector("#icon-facebook").setAttribute("src","images/icon/facebook.png");
    document.querySelector("#icon-instagram").setAttribute("src", "images/icon/instagram.png");
    document.querySelector("#icon-twitter").setAttribute("src", "images/icon/twitter.png");
});
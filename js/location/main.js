document.addEventListener("DOMContentLoaded", () => {

    //cambiar color del footer
    document.querySelector("#contenedor-footer").classList.add("footer-location");

    // cambiar iconos redes sociales

    document.querySelector("#icon-facebook").setAttribute("src","images/icon/facebook.png");
    document.querySelector("#icon-instagram").setAttribute("src", "images/icon/instagram.png");
    document.querySelector("#icon-twitter").setAttribute("src", "images/icon/twitter.png");


    var map = L.map('map').setView([41.483, -71.39], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);


    const markerIcon = L.icon({
        iconSize: [66, 88],
        iconAnchor: [10, 41],
        // specify the path here
        iconUrl: "images/icon/icon-location.svg",
        // shadowUrl: "https://unpkg.com/leaflet@1.5.1/dist/images/marker-shadow.png"
    });

    var marker = L.marker([41.483, -71.39],

        {
            draggable: true, // Make the icon dragable
            title: "Hover Text", // Add a title
            opacity: 1,
            icon: markerIcon // here assign the markerIcon var
        } // Adjust the opacity

    ).addTo(map);
});
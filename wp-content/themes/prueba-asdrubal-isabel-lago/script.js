document.addEventListener("DOMContentLoaded", function() {
    // Cambiar el título en el h1 de otra sección
    const h1 = document.getElementById("main-title");
    if (h1) {
        h1.textContent = "Este Título lo hemos modificado con JS";
    }

    // Cambiar el texto del párrafo según la hora
    var horaActual = new Date().getHours();
    var parrafo = document.getElementById("hora-parrafo");

    if (parrafo) {
        if (horaActual < 16) {
            parrafo.textContent = "Aún no son las 16:00 h, estás en horario de oficina, puedes llamarnos o si lo prefieres visita nuestra web";
        } else {
            parrafo.textContent = "Estamos fuera de horario de oficina, nuestro horario es hasta las 16:00 h, visita nuestra web!";
        }
    }
});
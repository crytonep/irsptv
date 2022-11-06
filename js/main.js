// Alerta
setTimeout(() => {
    const alerta = document.getElementById('alertaDesarrollo');
    //alerta.style.display = 'none';
    $(alerta).slideUp();
}, 5000);

// Fake Player

$("#playerFake").click(function () {
    console.log("Click en player fake");
    $("#playerContainer").removeClass('hidden');
    $(this).slideUp();
})
// /Fake Player
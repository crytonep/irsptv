(function ($) {
    //On Window load & Resize
    $(window)
        .on('load', function () { //Load
            // Animation on Page Loading
            $(".preloader").fadeOut(800, "linear");
            animateLayout();
        })
        .on('hashchange', function (event) {
            if (location.hash) {
                ajaxLoader();
            }
        });
    setTimeout(() => {
        const alerta = document.getElementById('alertaDesarrollo');
        //alerta.style.display = 'none';
        $(alerta).slideUp();
    }, 5000);
})(jQuery);
// UserAgent
function detectPC() {
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        return false;
    } else {
        return true;
    }
}

if (detectPC()) {
    console.log('Es un PC');
} else {
    var promoApp = document.getElementById('promo-app');
    alertContent = "<a href='//eduveel19.github.io/app/assets/irsp2.1.apk'><div id='alertaPromo' onclick='redirApp' class='alert alert-secondary alert-dismissible fade show' role='alert'> <i class='fas fa-mobile faa-tada animated'></i> ¡Descarga nuestra app para tener una mejor experiencia! </div> </a>";
    promoApp.innerHTML = alertContent;
    promoApp.onclick = function() { promoApp.remove() };
    //let redir = "//".location.hostname + "/iraffle/device.html"
    //console.log('sucio dominio: ' + redir);
    //location.href = redir;
}

// Alerta

setTimeout(() => {
    const alerta = document.getElementById('alertaDesarrollo');
    //alerta.style.display = 'none';
    $(alerta).slideUp();
}, 5000);

(function ($) {
    "use strict";
    var body = $('body');

    function imageCarousel() {
        $('.portfolio-page-carousel').each(function () {
            $(this).imagesLoaded(function () {
                $('.portfolio-page-carousel').owlCarousel({
                    smartSpeed: 1200,
                    items: 1,
                    loop: true,
                    dots: true,
                    nav: true,
                    navText: false,
                    autoHeight: true,
                    margin: 10
                });
            });
        });
    }

    // Fake Player

    $("#playerFake").click(function () {
        console.log("Click en player fake");
        $("#playerContainer").removeClass('hidden');
        $(this).slideUp();
    })
    // /Fake Player

    // Canales filters
    function portfolio_init() {
        $('.canales-content').each(function () {
            var portfolio_grid_container = $(this),
                portfolio_grid_container_id = $(this).attr('id'),
                portfolio_grid = $('#' + portfolio_grid_container_id + ' .lista-canales'),
                portfolio_filter = $('#' + portfolio_grid_container_id + ' .canales-filters'),
                portfolio_filter_item = $('#' + portfolio_grid_container_id + ' .canales-filters .filter');

            if (portfolio_grid) {

                portfolio_grid.shuffle({
                    speed: 450,
                    itemSelector: 'div'
                });

                $('.site-auto-menu').on("click", "a", function (e) {
                    portfolio_grid.shuffle('update');
                });

                portfolio_filter.on("click", ".filter", function (e) {
                    portfolio_grid.shuffle('update');
                    e.preventDefault();
                    portfolio_filter_item.parent().removeClass('active');
                    $(this).parent().addClass('active');
                    portfolio_grid.shuffle('shuffle', $(this).attr('data-group'));
                });

            }
        })
    }
    // /Canales filters

    function scrollTop() {
        if ($(body).scrollTop() > 150) {
            $('.lmpixels-scroll-to-top').removeClass('hidden-btn');
        } else {
            $('.lmpixels-scroll-to-top').addClass('hidden-btn');
        }
    }

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


    // On Document Load
    $(document).ready(function () {
        var movementStrength = 15;
        var height = movementStrength / $(document).height();
        var width = movementStrength / $(document).width();
        $("body").on('mousemove', function (e) {
            var pageX = e.pageX - ($(document).width() / 2),
                pageY = e.pageY - ($(document).height() / 2),
                newvalueX = width * pageX * -1,
                newvalueY = height * pageY * -1;
            if ($('.page-container').hasClass('bg-move-effect')) {
                var elements = $('.home-photo .hp-inner:not(.without-move), .lm-animated-bg');
            } else {
                var elements = $('.home-photo .hp-inner:not(.without-move)');
            }
            elements.addClass('transition');
            elements.css({
                "background-position": "calc( 50% + " + newvalueX + "px ) calc( 50% + " + newvalueY + "px )",
            });

            setTimeout(function () {
                elements.removeClass('transition');
            }, 300);
        })
            .scroll(function () {
                scrollTop();
            });

        // Initialize Portfolio grid
        var $portfolio_container = $(".portfolio-grid"),
            $gallery_container = $("#portfolio-gallery-grid");

        $gallery_container.imagesLoaded(function () {
            $gallery_container.masonry();
        });

        $portfolio_container.imagesLoaded(function () {
            portfolio_init(this);
        });

        imageCarousel();

        // Blog grid init
        var $container = $(".blog-masonry");
        $container.imagesLoaded(function () {
            $container.masonry({
                itemSelector: '.item',
                resize: false
            });
        });

        // Mobile menu
        $('.menu-toggle').on("click", function () {
            $('.site-nav').addClass('animate');
            $('.site-nav').toggleClass('mobile-menu-hide');
        });

        // Text rotation
        $('.text-rotation').owlCarousel({
            loop: true,
            dots: false,
            nav: false,
            margin: 10,
            items: 1,
            autoplay: true,
            autoplayHoverPause: false,
            autoplayTimeout: 3800,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn'
        });

        // Testimonials Slider
        $(".testimonials.owl-carousel").owlCarousel({
            nav: false, // Show next/prev buttons.
            items: 3, // The number of items you want to see on the screen.
            loop: false, // Infinity loop. Duplicate last and first items to get loop illusion.
            navText: false,
            margin: 25,
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: 1,
                },
                // breakpoint from 480 up
                480: {
                    items: 1,
                },
                // breakpoint from 768 up
                768: {
                    items: 2,
                },
                1200: {
                    items: 2,
                }
            }
        });

        // Clients Slider
        $(".clients.owl-carousel").imagesLoaded().owlCarousel({
            nav: false, // Show next/prev buttons.
            items: 2, // The number of items you want to see on the screen.
            loop: false, // Infinity loop. Duplicate last and first items to get loop illusion.
            navText: false,
            margin: 10,
            autoHeight: false,
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: 1,
                },
                // breakpoint from 480 up
                480: {
                    items: 2,
                },
                // breakpoint from 768 up
                768: {
                    items: 4,
                },
                1200: {
                    items: 6,
                }
            }
        });

        $('.ajax-page-load-link').magnificPopup({
            type: 'ajax',
            removalDelay: 300,
            mainClass: 'mfp-fade',
            gallery: {
                enabled: true
            },
        });

        $('.portfolio-page-wrapper .portfolio-grid').each(function () {
            $(this).magnificPopup({
                delegate: 'a.gallery-lightbox',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });

        $('.form-control').val('');

        $(".form-control").on("focusin", function () {
            $(this).parent('.form-group').addClass('form-group-focus');
        });

        $(".form-control").on("focusout", function () {
            if ($(this).val().length === 0) {
                $(this).parent('.form-group').removeClass('form-group-focus');
            }
        });

        $('body').append('<div id="page-ajax-loaded" class="page-portfolio-loaded animated fadeInLeft" style="display: none"><div class="preloader-portfolio"><div class="preloader-animation"><div class="preloader-spinner"></div></div></div></div>');

        ajaxLoader();

        // Sidebar toggle
        $('.sidebar-toggle').on("click", function () {
            $('#blog-sidebar').toggleClass('open');
            $(this).toggleClass('open');
        });

        $('.lmpixels-scroll-to-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 400);
            return false;
        });

        scrollTop();
    });

})(jQuery);
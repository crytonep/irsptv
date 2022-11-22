<?php if ($_GET['c'] == "golm" || $_GET['c'] == "golmsd") {
?>
<style>
    body {
        background: #000!important;
        margin: 0!important;
        padding: 0!important;
    }
    .contenedor {
        height: 89vh!important;
        width: 100%!important;
    }
    #player {
        height: 100%!important;
        width: 100%!important;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://ssl.p.jwpcdn.com/player/v/8.24.0/jwplayer.js"></script>
<script>let source = btoa("http://213.239.217.94:8080/live/promo/mundial/3.m3u8");</script>
<div class="alert alert-warning text-center" role="alert">
    ¡Estás mirando un canal Premium!
</div>
<div class="text-center">
    <a href="https://t.me/+yy9yaHG40RU0ODlh" type="button" class="btn btn-large btn-outline-info text-center" target="_blank">¡Contáctanos para obtener acceso!</a>
</div>
<div class="contenedor">
    <div id="player"></div>
</div>
<script src="../js/playerm.js"></script>
<?php
} else {
?>

    <script>
        //location.href = "https://www.profitablegatetocontent.com/mkd1fhhe?key=81193c57b7f58377107604b71a3e49aa";
        location.href = "premium";
    </script>
<?php } ?>
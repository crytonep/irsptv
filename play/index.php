<?php if ($_GET['c'] == "golm" || $_GET['c'] == "golmsd") {
?>
<style>
    body {
        background: #000;
        margin: 0;
        padding: 0;
    }
    .container {
        height: 100vh!important;
    }
    #player {
        height: 100%!important;
        width: 100%!important;
    }
</style>
<script src="https://ssl.p.jwpcdn.com/player/v/8.24.0/jwplayer.js"></script>
<script>let source = btoa("http://213.239.217.94:8080/live/promo/mundial/3.m3u8");</script>
<div class="container">
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
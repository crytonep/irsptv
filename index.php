<?php include('conn.php'); include('inc/header.php');
?>
<center>
    <div id="alertaDesarrollo" class="alert alert-primary alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-triangle"></i>
        El sitio web se encuentra en desarrollo
    </div>
</center>
<div id="proximos">
    <?php include('inc/proximos.php'); ?>
</div>

<div id="shows">
    <?php //include('inc/shows.php'); ?>
</div>

<center>
    <div id="promo-app"></div>
</center>

<div id="canales">
    <?php include('inc/canales.php'); ?>
</div>

<?php
include('inc/footer.php');
?>
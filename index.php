<?php include('conn.php'); include('inc/header.php');
?>
<center>
    <div id="alertaDesarrollo" class="alert alert-primary alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-triangle"></i>
        El sitio web se encuentra en desarrollo
    </div>
</center>
<div id="mundial">
    <div class="">
        <div id="proximos-title" class="block-title">
            <h2>¡Ha comenzado el Mundial!</h2>
        </div>
        <div class="row">
            <div class="col-12">
            <?php $mundi = mysqli_query($conn, "select * from agenda where id=1145");
            $result = mysqli_fetch_array($mundi);
            include('inc/cntdwn.php');
            $local = $result['local'];
            $visita = $result['visita'];
            include('futbol/liga/teams.php');
            ?>
                <a href="futbol/liga?id=38&juego=<?=$result['id'];?>">
                    <div class="card product-card lm-info-block gray-default">
                        <div class="main-event">
                            <div class="league">
                                <img src="img/ligas/mundial.png" alt="League" />
                                <h5 class="cntdwn cntdwn-<?= $index ?>">Contador</h5>
                            </div>
                            <div class="match">
                                <div class="team">
                                    <img width="60px" src="img/equipos/mundial/<?=$result['local'];?>.png" alt="" />
                                    <h4><?=$local?></h4>
                                </div>
                                <div class="vs">
                                    <h6>vs</h6>
                                </div>
                                <div class="team">
                                    <img width="60px" src="img/equipos/mundial/<?=$result['visita'];?>.png" alt="" />
                                    <h4><?=$visita?></h4>
                                </div>
                            </div>
                            <div class="channel">
                                <img src="img/canales/golm.png" alt="" />
                            </div>
                        </div>
                    </div>
                </a>
                <div class="page-subtitle text-center">
                    <h4><a class="button btn-primary" href="play/?mundial"><i class="fa fa-crown text-warning"></i> ¡Hazte Premium y disfruta de canales exclusivos!</a></h4>
                </div>
            </div>
        </div>
    </div>
</div>
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
<?php include('../../conn.php');
include('../../inc/header.php');
include('../../inc/primos.php');
$getLiga = $_GET['id'];
$ligas = mysqli_query($conn, "select * from ligas
where ligaId = 23");
$result = mysqli_fetch_array($ligas);
?>

<div class="container">
    <div class="block-title">
        <h2><img width="38px" src="<?= $app ?>img/ligas/<?= $result['ligaImg'] ?>.png" alt=""><?= $result['ligaName'] ?></h2>
    </div>
</div>

<div id="juegos" class="container">
    <div class="row">
        <?php
        $ligas = mysqli_query($conn, "select * from agenda
        INNER JOIN ligas ON agenda.liga = ligas.ligaId
        where liga = 23
        ORDER BY fecha asc");
        while ($result = mysqli_fetch_array($ligas)) {
            // Teams
            $local = $result['local'];
            $visita = $result['visita'];
            $index = $result['id'];
            // Channels
            include('stream.php');
            include('../../inc/channels.php');
            include('../../inc/cntdwn.php');
            include('../../inc/show.php');
            include('teams.php');
            $i++;
            $numero = $i;
            if (esPrimo($numero)) {
                //echo 'Es primo';
                include('../../inc/ads/banner-card.php');
            } else {
                // echo 'No es primo';
            }
        ?>
            <!-- Elemento -->
            <div class="col-12">
                <a data-toggle="collapse" href="#juego<?= $result['id'] ?>" role="button" aria-expanded="<?= $aria ?>" aria-controls="juego<?= $result['id'] ?>">
                    <div class="card product-card lm-info-block gray-default">
                        <div class="main-event">
                            <div class="league">
                                <img src="<?= $app ?>img/ligas/<?= $result['ligaImg'] ?>.png" alt="League" />
                                <h5 class="cntdwn cntdwn-<?= $index ?>"></h5>
                            </div>
                            <div class="match">
                                <div class="team">
                                    <img width="60px" src="<?= $app ?>img/equipos/<?= strtolower($result['ligaImg']) ?>/<?= str_replace(' ', '', strtolower($local)); ?>.png" alt="" />
                                    <h4><?= ucfirst($local) ?></h4>
                                </div>
                                <div <?= $isEventoHidden ?> class="vs">
                                    <h6>vs</h6>
                                </div>
                                <div <?= $isEventoHidden ?> class="team">
                                    <img width="60px" src="<?= $app ?>img/equipos/<?= strtolower($result['ligaImg']) ?>/<?= str_replace(' ', '', strtolower($visita)); ?>.png" alt="" />
                                    <h4><?= ucfirst($visita) ?></h4>
                                </div>
                            </div>
                            <div class="channel">
                                <img src="<?= $app ?>img/canales/<?= ($canalImg === null) ? "nbalp" : $canalImg ?>.png" alt="" />
                            </div>
                        </div>
                    </div>
                </a>
                <div class="collapse <?= $collapse ?>" id="juego<?= $result['id'] ?>">
                    <div class="card card-body lm-info-block gray-default">
                        <ul class="sub-menu">
                            <div>
                                <a class="btn btn-lg btn-primary" href="?g=<?=$local?>&id=<?=$index?>">
                                    <i class="flag us"></i>
                                    League Pass | <?=ucfirst($local)?>
                                </a>
                            </div>
                            <div>
                                <a class="btn btn-lg btn-primary" href="?g=<?=$local?>&id=<?=$index?>">
                                    <i class="flag us"></i>
                                    League Pass | <?=ucfirst($visita)?>
                                </a>
                            </div>
                            <?php
                            // Canal 2
                            echo $canalop2;
                            //echo $canal2;
                            // Canal 3
                            echo $canalop3;
                            // Canal 4
                            echo $canalop4;
                            // Custom Channels
                            echo $custom1;
                            echo $custom2;
                            echo $custom3;
                            // Canal 4
                            $canal4 = $result['canal4'];
                            $c4 = mysqli_query($conn, "select * from channels
                                INNER JOIN countries ON channels.country = countries.countryId
                                where channelId = '$canal4'");
                            $row = mysqli_fetch_array($c4);
                            if ($canal4 === null || $canal4 === "") {
                                // No mostramos nada
                            } else {
                            ?>
                                <div>
                                    <a class="btn btn-lg btn-primary" href="../../tv/?basket&id=<?= $index ?>&c=<?= $row['channelId'] ?>">
                                        <i class="flag <?= $row['countryImg'] ?>"></i>
                                        <?= $row['channelName'] ?>
                                    </a>
                                </div>
                            <?php } ?>

                            <?php
                            // Canal 5
                            $canal5 = $result['canal5'];
                            $c5 = mysqli_query($conn, "select * from channels
                                INNER JOIN countries ON channels.country = countries.countryId
                                where channelId = '$canal5'");
                            $row = mysqli_fetch_array($c5);
                            if ($canal5 === null || $canal5 === "") {
                                // No mostramos nada
                            } else {
                            ?>
                                <div>
                                    <a class="btn btn-lg btn-primary" href="../../tv/?basket&id=<?= $index ?>&c=<?= $row['channelId'] ?>">
                                        <i class="flag <?= $row['countryImg'] ?>"></i>
                                        <?= $row['channelName'] ?>
                                    </a>
                                </div>
                            <?php } ?>

                            <?php
                            // Canal 6
                            $canal6 = $result['canal6'];
                            $c6 = mysqli_query($conn, "select * from channels
                                INNER JOIN countries ON channels.country = countries.countryId
                                where channelId = '$canal6'");
                            $row = mysqli_fetch_array($c6);
                            if ($canal6 === null || $canal6 === "") {
                                // No mostramos nada
                            } else {
                            ?>
                                <div>
                                    <a class="btn btn-lg btn-primary" href="../../tv/?basket&id=<?= $index ?>&c=<?= $row['channelId'] ?>">
                                        <i class="flag <?= $row['countryImg'] ?>"></i>
                                        <?= $row['channelName'] ?>
                                    </a>
                                </div>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Elemento -->
        <? } ?>
    </div>
</div>

<?php include('../../inc/footer.php'); ?>
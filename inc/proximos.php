<!-- Futbol Slider -->
<div id="proximos-title" class="block-title">
    <h2>Próximos Eventos</h2>
</div>

<div id="clients_1" class="clients owl-carousel" data-mobile-items="1" data-tablet-items="3" data-items="6">
    <?php
    // Fecha Actual
    date_default_timezone_set('America/Tegucigalpa');
    $date = date('Y/m/d H:i:s');
    $mm_0 = substr($date, 5, 2);
    $dd_0 = substr($date, 8, 2);
    $hh_0 = substr($date, 11, 2);
    $m_0 = substr($date, 14, 2);
    //echo "actual: " . "mm: " . $mm_0 . " dd: " . $dd_0 . " hh: " . $hh_0 . " m: " . $m_0 . "<br>";
    $ligas = mysqli_query($conn, "select * from agenda
    INNER JOIN ligas ON agenda.liga = ligas.ligaId
    where status=1
    ORDER BY
    CASE WHEN cast(fecha as time)='00:00:00' THEN 1 ELSE 0 END,
    cast(fecha as time) asc");
    $tGames = mysqli_num_rows($ligas);
    if ($tGames < 1){
        echo "
        <script>
        let proxTitle = document.getElementById('proximos-title');
        proxTitle.className = 'hidden';
        </script>
        ";
    } else {}
    while ($result = mysqli_fetch_array($ligas)) {
        $index = $result['id'];
        // Teams
        $local = $result['local'];
        $localImg = strtolower($local);
        $localImg = str_replace(" ", "", $localImg);
        $visita = $result['visita'];
        $visitaImg = strtolower($visita);
        $visitaImg = str_replace(" ", "", $visitaImg);
        $index = $result['id'];
        $liga = $result['liga'];
        $ligaName = $result['ligaName'];
        $ligaImg = strtolower($result['ligaImg']);
        $ligaImg = str_replace(" ", "", $ligaImg);
        $fecha = $result['fecha'];
        $mm_1 = substr($fecha, 5, 2);
        $dd_1 = substr($fecha, 8, 2);
        $hh_1 = substr($fecha, 11, 2);
        $m_1 = substr($fecha, 14, 2);
        //echo "mm: " . $mm_1 . " dd: " . $dd_1 . " hh: " . $hh_1 . " m: " . $m_1 . "<br>";
        // Validación:
        if ($mm_0 === $mm_1) {
            if ($dd_0 === $dd_1) {
                if ($liga == "23") {
                    $link = "basket/nba?ir&juego=".$index;
                    include('basket/nba/teams.php');
                    $localImg = $local;
                    $visitaImg = $visita;
                    $isMotor = "";
                } elseif ($liga == "12" || $liga == 13) {
                    $link = "basket/liga?id=" . $liga . "&juego=" . $index;
                    include('basket/liga/teams.php');
                    $localImg = str_replace(" ", "", $result['local']);
                    $visitaImg = str_replace(" ", "", $result['visita']);
                    $isMotor = "";
                } elseif ($liga == "22") {
                    $link = "mlb?ir&juego=" . $index;
                    include('mlb/teams.php');
                    $localImg = strtolower($local);
                    $visitaImg = strtolower($visita);
                    $isMotor = "";
                } elseif ($liga == "25") {
                    $link = "balonmano?ir&juego=" . $index;
                    include('balonmano/teams.php');
                    $localImg = str_replace(" ", "", $result['local']);
                    $visitaImg = str_replace(" ", "", $result['visita']);
                    $isMotor = "";
                } elseif ($liga == "14") {
                    $link = "nfl?ir&juego=" . $index;
                    include('nfl/teams.php');
                } elseif ($liga == "28") {
                    $link = "f1?ir";
                    $isMotor = 'style="display: none;"';
                    $motorText = '<h4 style="position: absolute; margin-top: 94px;">' . $local . '</h4>';
                    $localImg = $result['logoL'];
                    //include('agenda/nfl/teams.php');
                } elseif ($liga == "29") {
                    $link = "motogp?ir&juego=" . $index;
                    $isMotor = 'style="display: none;"';
                    $motorText = '<h4 style="position: absolute; margin-top: 94px;">' . $local . '</h4>';
                    $localImg = $result['logoL'];
                    //include('agenda/nfl/teams.php');
                } elseif ($liga == "32") {
                    $link = "futbol/liga?id=" . $liga . "&juego=" . $index;
                    $isMotor = 'style="display: none;"';
                    $motorText = '<h4 style="position: absolute; margin-top: 94px;">' . $local . '</h4>';
                } elseif ($liga == "35") {
                    $link = "ufc/?ir";
                } else {
                    $link = "futbol/liga?id=" . $liga . "&juego=" . $index;
                    include('futbol/liga/teams.php');
                    $isMotor = "";
                    $motorText = "";
                }
    ?>
                <div class="eventito">
                    <a href="<?=$link?>" title="<?=ucfirst($ligaName)?>: <?=ucfirst($local)?> vs <?=ucfirst($visita)?> en Directo por iRaffle TV">
                        <div class="lm-info-block gray-default">
                            <div class="mini-league">
                                <img width="5px" src="<?=$app?>img/ligas/<?=$ligaImg?>.png" alt="">
                                <h5><?=$ligaName?></h5>
                            </div>
                            <div class="main-event">
                                <div class="match">
                                    <div class="team">
                                        <img class="image" src="<?=$app?>img/equipos/<?=$ligaImg?>/<?=$localImg?>.png" alt="" srcset="">
                                    </div>
                                    <h6 <?=$isMotor?> class="vs">vs</h6>
                                    <div <?=$isMotor?> class="team">
                                        <img <?=$isMotor?> class="image" src="<?=$app?>img/equipos/<?=$ligaImg?>/<?=$visitaImg?>.png" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                            <h4 class="counter cntdwn-<?=$index?>">Contador</h4>
                            <?php include('slider-countdown.php'); ?>
                            <span class="lm-info-block-text"></span>
                        </div>
                    </a>
                </div>
    <?php }
        }
    }
    ?>
</div>
<!-- /Futbol Slider -->
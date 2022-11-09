<?php
$id = $_GET['id'];
$juego = mysqli_query($conn, "select * from agenda
    INNER JOIN ligas ON agenda.liga = ligas.ligaId
    where id='" . $id . "'");
$ress = mysqli_fetch_assoc($juego);
$local = $ress['local'];
$visita = $ress['visita'];
$liga = $ress['ligaImg'];
if ($liga == "nba") {
    include('../basket/nba/teams.php');
    $localImg = $local;
    $visitaImg = $visita;
} elseif ($liga == "acb" || $liga == "euroliga") {
    include('../basket/liga/teams.php');
    $localImg = $local;
    $visitaImg = $visita;
} elseif ($liga == "mlb") {
    include('../mlb/teams.php');
    $localImg = $local;
    $visitaImg = $visita;
} elseif ($liga == "nfl") {
    $localImg = $ress['local'];
    $visitaImg = $ress['visita'];
    include('../nfl/teams.php');
} elseif ($liga == "balonmano") {
    $localImg = $ress['local'];
    $visitaImg = $ress['visita'];
    include('../balonmano/teams.php');
} elseif ($liga == "eventos") {
    $localImg = $ress['local'];
    $isEventoHidden = 'style="display:none"';
} elseif ($liga == "motogp" || $liga == "f1") {
    $localImg = $ress['logoL'];
    $isEventoHidden = 'style="display:none"';
} else {
    $localImg = $ress['local'];
    $visitaImg = $ress['visita'];
    $isEventoHidden = "";
    include('../futbol/liga/teams.php');
}
include('cntdwn.php');
?>
<div class="card product-card lm-info-block gray-default">
    <div class="main-event">
        <div class="league">
            <img src="../img/ligas/<?= $ress['ligaImg'] ?>.png" alt="League" />
            <h5 class="cntdwn cntdwn-<?= $index ?>"></h5>
        </div>
        <div class="match">
            <div class="team">
                <img width="60px" src="../img/equipos/<?= strtolower($ress['ligaImg']) ?>/<?= str_replace(' ', '', strtolower($localImg)); ?>.png" alt="" />
                <h4><?= ucfirst($local) ?></h4>
            </div>
            <div <?= $isEventoHidden ?> class="vs">
                <h6>vs</h6>
            </div>
            <div <?= $isEventoHidden ?> class="team">
                <img width="60px" src="<?= $app ?>img/equipos/<?= strtolower($ress['ligaImg']) ?>/<?= str_replace(' ', '', strtolower($visitaImg)); ?>.png" alt="" />
                <h4><?= ucfirst($visita) ?></h4>
            </div>
        </div>
        <div class="channel">
            <img src="../img/canales/<?= (isset($_GET['nba']) && isset($_GET['ifr'])) ? "nbalp" : $result['channelImg'] ?>.png" alt="" />
        </div>
    </div>
</div>
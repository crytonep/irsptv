<?php
$c = ucfirst($_GET['c']);
$g = $_GET['g'];
$c2 = ucfirst($_GET['c2']);
$g2 = $_GET['g2'];

// Opcion Adicional
if ($result['canal3'] === "star+") {
    $canalImg = "starplus";
    $r = "../../star.php";
    $custom2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $r . '">
        <i class="flag ar"></i>
        Star +
        </a>
    </div>';
} elseif (strpos($result['canal3'], "/")) {
    $r = base64_encode($result['canal3']);
    $custom2 = '
        <div>
            <a class="btn btn-lg btn-primary" href="../../tv?nba&hls&c=' . $r . '">
            <i class="flag us"></i>
            League Pass | HD
            </a>
        </div>';
} else {
    $custom2 = "";
}

if (isset($_GET['g'])) {
    $base = "http://givemenbastreams.com/nba.php?g=";
    $m3u8 = $base . $g;
    $m3u8 = base64_encode($m3u8);
    echo '<script>window.location.href = "../../tv/?basket&nba&ifr=' . $m3u8 . '&id=' . $index . '";</script>';
} elseif (isset($_GET['g2'])) {
    $base = "http://givemenbastreams.com/nba.php?g=";
    $m3u8 = $base . $g2;
    $m3u8 = base64_encode($m3u8);
    echo '<script>window.location.href = "../../tv/?basket&nba&ifr=' . $m3u8 . '&id=' . $index . '";</script>';
}
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

if (isset($_GET['c'])) {
    $base = "http://acsuajjska.azureedge.net/streams/";
    $file = $base . $c . "/chunks.m3u8";
    // Getting page header data
    $array = @get_headers($file);
    // Storing value at 1st position because
    // that is only what we need to check
    $string = $array[0];
    // 404 for error, 200 for no error
    if (strpos($string, "200")) {
        $m3u8 = base64_encode($file);
        echo '<script>window.location.href = "../../tv/epg?nba&plyr=jw&c=' . $m3u8 . '&id=' . $index . '";</script>';
    } else {
        $base = "http://acsuajjska.azureedge.net/streams/";
        $file = $base . $c2 . "/chunks.m3u8";
        // Getting page header data
        $array = @get_headers($file);
        // Storing value at 1st position because
        // that is only what we need to check
        $string = $array[0];
        // 404 for error, 200 for no error
        if (strpos($string, "200")) {
            $m3u8 = base64_encode($file);
            echo '<script>window.location.href = "../../tv/epg?nba&plyr=jw&c=' . $m3u8 . '&id=' . $index . '";</script>';
        } else {
            $_SESSION['message'] = "No se ha podido cargar la retransmisión del juego.";
            echo $m3u8;
        }
    }
}

if (isset($_GET['g'])) {
    $base = "http://givemenbastreams.com/nba.php?g=";
    $m3u8 = $base . $g;
    $m3u8 = base64_encode($m3u8);
    echo '<script>window.location.href = "../../../tv/epg?nba&plyr=ifr&i=' . $m3u8 . '&id=' . $index . '";</script>';
} elseif (isset($_GET['g2'])) {
    $base = "http://givemenbastreams.com/nba.php?g=";
    $m3u8 = $base . $g2;
    $m3u8 = base64_encode($m3u8);
    echo '<script>window.location.href = "../../../tv/epg?nba&plyr=ifr&i=' . $m3u8 . '&id=' . $index . '";</script>';
}

// if(isset($_GET['g'])){
//     $base ="http://givemenbastreams.com/nba.php?g=";
//     $file = $base.$g;
//     $site= file_get_contents($file);
//     preg_match("(source\:\s'(.*?)')", $site, $stream);

//     if ($stream[1] == null){
//         $base ="http://givemenbastreams.com/nba.php?g=";
//         $file = $base.$g2;
//         $site= file_get_contents($file);
//         preg_match("(source\:\s'(.*?)')", $site, $stream);
//             if ($stream[1] == null){
//                 $_SESSION['message'] = "No se ha podido cargar la retransmisión del juego.";
//             } else{
//                 $m3u8 = base64_encode($stream[1]);
//                 echo '<script>window.location.href = "../../tv/epg?nba&plyr=vid&c='.$m3u8.'&id='.$index.'";</script>';
//             }

//     } else{
//         $m3u8 = base64_encode($stream[1]);
//         // header ("location: ../../play?nfl&plyr=vid&c=$m3u8");
//         //echo '<script>window.location.href = "../play?nba&plyr=vid&c='.$m3u8.'";</script>';
//         echo '<script>window.location.href = "../../tv/epg?nba&plyr=vid&c='.$m3u8.'&id='.$index.'";</script>';
//     }
// }
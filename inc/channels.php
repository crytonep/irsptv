<?php
$canal = $result['canal'];
$canal2 = $result['canal2'];
$canal3 = $result['canal3'];
$canal4 = $result['canal4'];
$canal5 = $result['canal5'];
$canal6 = $result['canal6'];

// Logos
if ($canal6 !== "") {
    $query = mysqli_query($conn, "select * from channels where channelId = '$canal6'");
    $row = mysqli_fetch_array($query);
    $canalImg = $row['channelImg'];
}
if ($canal5 !== "") {
    $query = mysqli_query($conn, "select * from channels where channelId = '$canal5'");
    $row = mysqli_fetch_array($query);
    $canalImg = $row['channelImg'];
}
if ($canal4 !== "") {
    $query = mysqli_query($conn, "select * from channels where channelId = '$canal4'");
    $row = mysqli_fetch_array($query);
    $canalImg = $row['channelImg'];
}

// Opcion Adicional
if ($result['canal3'] === "star+") {
    $canalImg = "starplus";
    $r = "../../star.php";
    $vacio = '
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
            <a class="btn btn-lg btn-primary" href="../../tv?futbol&hls&id=' . $index . '&c=' . $r . '">
            <i class="flag us"></i>
            Diferido | HD
            </a>
        </div>';
} else {
    $custom2 = "";
}

// if ($result['canal3'] === "star+") {
//     $canalImg = "starplus";
//     $r = $app . "star.php";
//     $custom2 = '
//     <div>
//         <a
//         href="'.$r.'"
//         class="hidden btn btn-lg btn-primary">
//         <i class="flag ar"></i>
//             Star +
//         </a>
//     </div>
//     ';
// } else {
//     $custom2 = "";
// }
if ($canal === "Gol Mundial" || $canal === "Gol Mundial" || $canal === "Gol Mundial" || $canal === "golm") {
    $canalImg = "movistar";
    $canalop2 = '
    <div>
        <a
        href="' . $app . 'play?futbol&id=' . $index . '&c=golmsd"
        class="btn btn-lg btn-primary">
            Gol Mundial | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=golmsd">
        <i class="flag es"></i>
        Gol Mundial | VIP SD
        </a>
    </div>';
} elseif ($canal2 === "Gol Mundial" || $canal2 === "Gol Mundial" || $canal2 === "Gol Mundial" || $canal2 === "golm") {
    $canalImg = "movistar";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=golm">
        <i class="flag es"></i>
        Gol Mundial | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=golmsd">
        <i class="flag es"></i>
        Gol Mundial | VIP SD
        </a>
    </div>';
}

if ($canal === "M+ Liga de Campeones" || $canal === "M+ Liga de Campeones UHD (M441 O115)" || $canal === "M+ Liga de Campeones (M56 O114)" || $canal === "mlcamp") {
    $canalImg = "campeones";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=mlcamp">
        <i class="flag es"></i>
        Movistar Liga de Campeones | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=mlcampsd">
        <i class="flag es"></i>
        Movistar Liga de Campeones | VIP SD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=721">
        <i class="flag es"></i>
        Movistar Liga de Campeones | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ Liga de Campeones" || $canal2 === "M+ Liga de Campeones UHD (M441 O115)" || $canal2 === "M+ Liga de Campeones (M56 O114)" || $canal2 === "mlcamp") {
    $canalImg = "campeones";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=mlcamp">
        <i class="flag es"></i>
        Movistar Liga de Campeones | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=mlcampsd">
        <i class="flag es"></i>
        Movistar Liga de Campeones | VIP SD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=721">
        <i class="flag es"></i>
        Movistar Liga de Campeones | HD
        </a>
    </div>';
}

if ($canal === "M+ Liga de Campeones 2" || $canal === "mlcamp2") {
    $canalImg = "campeones";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?c=mlcamp2">
        <i class="flag es"></i>
        Movistar Liga de Campeones 2 | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=723">
        <i class="flag es"></i>
        Movistar Liga de Campeones 2 | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ Liga de Campeones 2" || $canal2 === "mlcamp2") {
    $canalImg = "campeones";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?c=mlcamp2">
        <i class="flag es"></i>
        Movistar Liga de Campeones 2 | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=723">
        <i class="flag es"></i>
        Movistar Liga de Campeones 2 | HD
        </a>
    </div>';
}

if ($canal === "M+ Liga de Campeones 3" || $canal === "mlcamp3") {
    $canalImg = "campeones";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?c=mlcamp3">
        <i class="flag es"></i>
        Movistar Liga de Campeones 3 | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href=""' . $app . 'tv/?futbol&id=' . $index . '&c=778">
        <i class="flag es"></i>
        Movistar Liga de Campeones 3 | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ Liga de Campeones 3" || $canal2 === "mlcamp3") {
    $canalImg = "campeones";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?c=mlcamp3">
        <i class="flag es"></i>
        Movistar Liga de Campeones 3 | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=778">
        <i class="flag es"></i>
        Movistar Liga de Campeones 3 | HD
        </a>
    </div>';
}


if ($canal === "M+ Liga de Campeones 4" || $canal === "mlcamp4") {
    $canalImg = "campeones";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?c=mlcamp4">
        <i class="flag es"></i>
        Movistar Liga de Campeones 4 | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=779">
        <i class="flag es"></i>
        Movistar Liga de Campeones 4 | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ Liga de Campeones 4" || $canal2 === "mlcamp4") {
    $canalImg = "campeones";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?c=mlcamp4">
        <i class="flag es"></i>
        Movistar Liga de Campeones 4 | HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=779">
        <i class="flag es"></i>
        Movistar Liga de Campeones 4 | HD
        </a>
    </div>';
}

if ($canal === "M+ Liga de Campeones 5" || $canal === "mlcamp5") {
    $canalImg = "campeones";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?c=mlcamp5">
        <i class="flag es"></i>
        Movistar Liga de Campeones 5 | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=780">
        <i class="flag es"></i>
        Movistar Liga de Campeones 5 | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ Liga de Campeones 5" || $canal2 === "mlcamp5") {
    $canalImg = "campeones";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?c=mlcamp5">
        <i class="flag es"></i>
        Movistar Liga de Campeones 5 | HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=780">
        <i class="flag es"></i>
        Movistar Liga de Campeones 5 | HD
        </a>
    </div>';
}

if ($canal === "M+ Liga de Campeones 6" || $canal === "mlcamp6") {
    $canalImg = "campeones";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=781">
        <i class="flag es"></i>
        Movistar Liga de Campeones 6 | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ Liga de Campeones 6" || $canal2 === "mlcamp6") {
    $canalImg = "campeones";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=781">
        <i class="flag es"></i>
        Movistar Liga de Campeones 6 | HD
        </a>
    </div>';
}

if ($canal === "M+ Liga de Campeones 7" || $canal === "mlcamp7") {
    $canalImg = "campeones";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=782">
        <i class="flag es"></i>
        Movistar Liga de Campeones 7 | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ Liga de Campeones 7" || $canal2 === "mlcamp7") {
    $canalImg = "campeones";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=782">
        <i class="flag es"></i>
        Movistar Liga de Campeones 7 | HD
        </a>
    </div>';
}

if ($canal === "M+ Liga de Campeones 8" || $canal === "mlcamp8") {
    $canalImg = "campeones";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=783">
        <i class="flag es"></i>
        Movistar Liga de Campeones 8 | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ Liga de Campeones 8" || $canal2 === "mlcamp8") {
    $canalImg = "campeones";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=783">
        <i class="flag es"></i>
        Movistar Liga de Campeones 8 | HD
        </a>
    </div>';
}

if ($canal === "M+ Liga de Campeones 9" || $canal === "mlcamp9") {
    $canalImg = "campeones";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=784">
        <i class="flag es"></i>
        Movistar Liga de Campeones 9 | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ Liga de Campeones 9" || $canal2 === "mlcamp9") {
    $canalImg = "campeones";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=784">
        <i class="flag es"></i>
        Movistar Liga de Campeones 9 | HD
        </a>
    </div>';
}

if ($canal === "M+ Liga de Campeones 10" || $canal === "mlcamp10") {
    $canalImg = "campeones";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=785">
        <i class="flag es"></i>
        Movistar Liga de Campeones 10 | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ Liga de Campeones 10" || $canal2 === "mlcamp10") {
    $canalImg = "campeones";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=785">
        <i class="flag es"></i>
        Movistar Liga de Campeones 10 | HD
        </a>
    </div>';
}

if ($canal === "M+ Liga de Campeones 11" || $canal === "mlcamp11") {
    $canalImg = "campeones";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=786">
        <i class="flag es"></i>
        Movistar Liga de Campeones 11 | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ Liga de Campeones 11" || $canal2 === "mlcamp11") {
    $canalImg = "campeones";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=786">
        <i class="flag es"></i>
        Movistar Liga de Campeones 11 | HD
        </a>
    </div>';
}

if ($canal === "M+ Liga de Campeones 12" || $canal === "mlcamp12") {
    $canalImg = "campeones";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=787">
        <i class="flag es"></i>
        Movistar Liga de Campeones 12 | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ Liga de Campeones 12" || $canal2 === "mlcamp12") {
    $canalImg = "campeones";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=787">
        <i class="flag es"></i>
        Movistar Liga de Campeones 12 | HD
        </a>
    </div>';
}

if ($canal === "M+ Liga de Campeones 13" || $canal === "mlcamp13") {
    $canalImg = "campeones";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="https://irpc.ga/mg/play/sandbox.php?get=https://megatelevisionhd.com/embed/repro/?r=Ly9ncmVnb3JzYW1zYS5saWZlL2VtYmVkL2VzL21saWdhZGVjYW1wZW9uZXMxMy5waHA=">
        <i class="flag es"></i>
        Movistar Liga de Campeones 13 | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ Liga de Campeones 13" || $canal2 === "mlcamp13") {
    $canalImg = "campeones";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="https://irpc.ga/mg/play/sandbox.php?get=https://megatelevisionhd.com/embed/repro/?r=Ly9ncmVnb3JzYW1zYS5saWZlL2VtYmVkL2VzL21saWdhZGVjYW1wZW9uZXMxMy5waHA=">
        <i class="flag es"></i>
        Movistar Liga de Campeones 13 | HD
        </a>
    </div>';
}

if ($canal === "M+ LaLiga" || $canal === "M+ LaLigaTV" || $canal === "bar") {
    $canalImg = "mlaliga";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=bar">
        <i class="flag es"></i>
        Movistar LaLiga | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=barsd">
        <i class="flag es"></i>
        Movistar LaLiga | VIP SD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=717">
        <i class="flag es"></i>
        Movistar LaLiga | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ LaLiga" || $canal2 === "M+ LaLigaTV" || $canal2 === "bar") {
    $canalImg = "mlaliga";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=bar">
        <i class="flag es"></i>
        Movistar LaLiga | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=barsd">
        <i class="flag es"></i>
        Movistar LaLiga | VIP SD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=717">
        <i class="flag es"></i>
        Movistar LaLiga | HD
        </a>
    </div>';
}

if ($canal === "M+ LaLiga 1" || $canal === "mlaliga1") {
    $canalImg = "mlaliga";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=mlaliga1">
        <i class="flag es"></i>
        Movistar LaLiga 1 | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=718">
        <i class="flag es"></i>
        Movistar LaLiga 1 | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ LaLiga 1" || $canal2 === "mlaliga1") {
    $canalImg = "mlaliga";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=mlaliga1">
        <i class="flag es"></i>
        Movistar LaLiga 1 | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=718">
        <i class="flag es"></i>
        Movistar LaLiga 1 | HD
        </a>
    </div>';
}

if ($canal === "M+ LaLiga 2" || $canal === "mlaliga2") {
    $canalImg = "mlaliga";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=mlaliga2">
        <i class="flag es"></i>
        Movistar LaLiga 2 | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=719">
        <i class="flag es"></i>
        Movistar LaLiga 2 | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ LaLiga 2" || $canal2 === "mlaliga2") {
    $canalImg = "mlaliga";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=mlaliga2">
        <i class="flag es"></i>
        Movistar LaLiga 2 | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=719">
        <i class="flag es"></i>
        Movistar LaLiga 2 | HD
        </a>
    </div>';
}

if ($canal === "M+ LaLiga 3" || $canal === "mlaliga3") {
    $canalImg = "mlaliga";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=mlaliga3">
        <i class="flag es"></i>
        Movistar LaLiga 3 | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=720">
        <i class="flag es"></i>
        Movistar LaLiga 3 | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ LaLiga 3" || $canal2 === "mlaliga3") {
    $canalImg = "mlaliga";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=mlaliga3">
        <i class="flag es"></i>
        Movistar LaLiga 3 | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=720">
        <i class="flag es"></i>
        Movistar LaLiga 3 | HD
        </a>
    </div>';
}

if ($canal === "M+ LaLiga 4" || $canal === "mlaliga4") {
    $canalImg = "mlaliga";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=774">
        <i class="flag es"></i>
        Movistar LaLiga 4 | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ LaLiga 4" || $canal2 === "mlaliga4") {
    $canalImg = "mlaliga";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=774">
        <i class="flag es"></i>
        Movistar LaLiga 4 | HD
        </a>
    </div>';
}

if ($canal === "M+ LaLiga 5" || $canal === "mlaliga5") {
    $canalImg = "mlaliga";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=775">
        <i class="flag es"></i>
        Movistar LaLiga 5 | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ LaLiga 5" || $canal2 === "mlaliga5") {
    $canalImg = "mlaliga";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=775">
        <i class="flag es"></i>
        Movistar LaLiga 5 | HD
        </a>
    </div>';
}

if ($canal === "M+ LaLiga 7" || $canal === "mlaliga7") {
    $canalImg = "mlaliga";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=mlaliga7">
        <i class="flag es"></i>
        Movistar LaLiga 7 | VIP HD
        </a>
    </div>';
} elseif ($canal2 === "M+ LaLiga 7" || $canal2 === "mlaliga7") {
    $canalImg = "mlaliga";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=mlaliga7">
        <i class="flag es"></i>
        Movistar LaLiga 7 | VIP HD
        </a>
    </div>';
}

if ($canal === "M+ Deportes" || $canal === "mdep") {
    $canalImg = "movistar";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=mdep">
        <i class="flag es"></i>
        Movistar Deportes | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=724">
        <i class="flag es"></i>
        Movistar Deportes | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ Deportes" || $canal2 === "mdep") {
    $canalImg = "movistar";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=mdep">
        <i class="flag es"></i>
        Movistar Deportes | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=724">
        <i class="flag es"></i>
        Movistar Deportes | HD
        </a>
    </div>';
}

if ($canal === "M+ Deportes 2" || $canal === "mdep2") {
    $canalImg = "movistar";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=mdep">
        <i class="flag es"></i>
        Movistar Deportes 2 | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=726">
        <i class="flag es"></i>
        Movistar Deportes 2 | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ Deportes 2" || $canal2 === "mdep2") {
    $canalImg = "movistar";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=mdep">
        <i class="flag es"></i>
        Movistar Deportes 2 | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=726">
        <i class="flag es"></i>
        Movistar Deportes 2 | HD
        </a>
    </div>';
}

if ($canal === "M+ #Vamos" || $canal === "M+ #Vamos Bar 2 (305)" || $canal === "mvamos") {
    $canalImg = "mvamos";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=mvamos">
        <i class="flag es"></i>
        Movistar #Vamos | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=680">
        <i class="flag es"></i>
        Movistar #Vamos | HD
        </a>
    </div>';
} elseif ($canal2 === "M+ #Vamos" || $canal2 === "M+ #Vamos Bar 2 (305)" || $canal2 === "mvamos") {
    $canalImg = "mvamos";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=mvamos">
        <i class="flag es"></i>
        Movistar #Vamos | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=680">
        <i class="flag es"></i>
        Movistar #Vamos | HD
        </a>
    </div>';
}

if ($canal === "GOL" || $canal === "GOL (Síguelo en directo)" || $canal === "goles") {
    $canalImg = "goles";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=goles">
        <i class="flag es"></i>
        GOL | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=734">
        <i class="flag es"></i>
        GOL | HD
        </a>
    </div>';
} elseif ($canal2 === "GOL" || $canal2 === "goles") {
    $canalImg = "goles";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=goles">
        <i class="flag es"></i>
        GOL | VIP HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=734">
        <i class="flag es"></i>
        GOL | HD
        </a>
    </div>';
}

if ($canal === "DAZN" || $canal === "DAZN" || $canal === "dazn1" || $canal === "DAZN 1 (Movistar 64)") {
    $canalImg = "dazn";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?futbol&id=' . $index . '&c=dazn1">
        <i class="flag es"></i>
        DAZN 1 | HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=560">
        <i class="flag es"></i>
        DAZN 1 | VIP HD
        </a>
    </div>';
} elseif ($canal2 === "DAZN" || $canal2 === "DAZN" || $canal2 === "dazn1" || $canal2 === "DAZN 1 (Movistar 64)") {
    $canalImg = "dazn";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?c=dazn1">
        <i class="flag es"></i>
        DAZN 1 | HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=560">
        <i class="flag es"></i>
        DAZN 1 | VIP HD
        </a>
    </div>';
}

if ($canal === "DAZN2" || $canal === "DAZN 2 (Movistar 65)" || $canal === "dazn2") {
    $canalImg = "dazn";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=569">
        <i class="flag es"></i>
        DAZN 2 | HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=dazn2">
        <i class="flag es"></i>
        DAZN 2 | VIP HD
        </a>
    </div>';
} elseif ($canal2 === "DAZN2" || $canal2 === "DAZN 2 (Movistar 65)" || $canal2 === "dazn2") {
    $canalImg = "dazn";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=569">
        <i class="flag es"></i>
        DAZN 2
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=dazn2">
        <i class="flag es"></i>
        DAZN 2 | VIP HD
        </a>
    </div>';
}

if ($canal === "DAZN3" || $canal === "DAZN3" || $canal === "dazn3") {
    $canalImg = "dazn";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=dazn3">
        <i class="flag es"></i>
        DAZN 3 | VIP HD
        </a>
    </div>';
} elseif ($canal2 === "DAZN3" || $canal2 === "DAZN3" || $canal2 === "dazn3") {
    $canalImg = "dazn";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=dazn3">
        <i class="flag es"></i>
        DAZN 3 | VIP HD
        </a>
    </div>';
}

if ($canal === "DAZN LaLiga" || $canal === "DAZN LaLiga" || $canal === "daznlaliga") {
    $canalImg = "daznlaliga";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=559">
        <i class="flag es"></i>
        DAZN LaLiga | HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=daznlaliga">
        <i class="flag es"></i>
        DAZN LaLiga | VIP HD
        </a>
    </div>';
} elseif ($canal2 === "DAZN LaLiga" || $canal2 === "DAZN LaLiga" || $canal2 === "daznlaliga") {
    $canalImg = "daznlaliga";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=559">
        <i class="flag es"></i>
        DAZN LaLiga | HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=daznlaliga2">
        <i class="flag es"></i>
        DAZN LaLiga | VIP HD
        </a>
    </div>';
}
if ($canal === "DAZN LaLiga 2" || $canal === "DAZN LaLiga 2" || $canal === "daznlaliga2") {
    $canalImg = "daznlaliga";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=daznlaliga2">
        <i class="flag es"></i>
        DAZN LaLiga 2 | HD
        </a>
    </div>';
} elseif ($canal2 === "DAZN LaLiga 2" || $canal2 === "DAZN LaLiga 2" || $canal2 === "daznlaliga2") {
    $canalImg = "daznlaliga";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=daznlaliga2">
        <i class="flag es"></i>
        DAZN LaLiga 2 | HD
        </a>
    </div>';
}

if ($canal === "DAZN (Regístrate)" || $canal === "DAZN | (Movistar 59)") {
    $canalImg = "dazn";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=560">
        <i class="flag es"></i>
        DAZN 1 | HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=dazn1">
        <i class="flag es"></i>
        DAZN 1 | VIP HD
        </a>
    </div>';
} elseif ($canal2 === "DAZN (Regístrate)" || $canal2 === "DAZN | (Movistar 59)") {
    $canalImg = "dazn";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=560">
        <i class="flag es"></i>
        DAZN 1 | HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=dazn1">
        <i class="flag es"></i>
        DAZN 1 | VIP HD
        </a>
    </div>';
}

if ($canal === "LaLiga SmartbankTV" || $canal === "LaLiga SmartbankTV" || $canal === "smartbank") {
    $canalImg = "smartbank";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="https://irpc.ga/mg/play/sandbox.php?get=https://megatelevisionhd.com/embed/repro/?r=aHR0cHM6Ly9ncmVnb3JzYW1zYS5saWZlL2VtYmVkLy9lcy9sYWxpZ2FzbWFydGJhbmt0di5waHA=">
        <i class="flag es"></i>
        LaLiga Smartbank | HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=smartbank">
        <i class="flag es"></i>
        LaLiga Smartbank | HD (VIP)
        </a>
    </div>';
} elseif ($canal2 === "LaLiga SmartbankTV" || $canal2 === "LaLiga SmartbankTV" || $canal2 === "smartbank") {
    $canalImg = "smartbank";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=smartbank">
        <i class="flag es"></i>
        LaLiga Smartbank | HD (VIP)
        </a>
    </div>';
}

if ($canal === "LaLiga SmartbankTV 1" || $canal === "LaLiga SmartbankTV 1" || $canal === "smartbank1") {
    $canalImg = "smartbank";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=smartbank1">
        <i class="flag es"></i>
        LaLiga Smartbank 1 | HD (VIP)
        </a>
    </div>';
} elseif ($canal2 === "LaLiga SmartbankTV 1" || $canal2 === "LaLiga SmartbankTV 1" || $canal2 === "smartbank1") {
    $canalImg = "smartbank";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=smartbank1">
        <i class="flag es"></i>
        LaLiga Smartbank 1 | HD (VIP)
        </a>
    </div>';
}

if ($canal === "LaLiga SmartbankTV 2" || $canal === "LaLiga SmartbankTV 2" || $canal === "smartbank2") {
    $canalImg = "smartbank";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="https://irpc.ga/mg/play/sandbox.php?get=https://megadeportes.live/embed/repro/?r=Ly9ncmVnb3JzYW1zYS5saWZlL2VtYmVkL2VzL2xhbGlnYXNtYXJ0YmFua3R2Mi5waHA=">
        <i class="flag es"></i>
        LaLiga Smartbank 2 | HD (VIP)
        </a>
    </div>';
} elseif ($canal2 === "LaLiga SmartbankTV 2" || $canal2 === "LaLiga SmartbankTV 2" || $canal2 === "smartbank2") {
    $canalImg = "smartbank";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="https://irpc.ga/mg/play/sandbox.php?get=https://megadeportes.live/embed/repro/?r=Ly9ncmVnb3JzYW1zYS5saWZlL2VtYmVkL2VzL2xhbGlnYXNtYXJ0YmFua3R2Mi5waHA=">
        <i class="flag es"></i>
        LaLiga Smartbank 2 | HD (VIP)
        </a>
    </div>';
}

if ($canal === "directv1" || $canal === "directv1") {
    $canalImg = "directv";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=561">
        <i class="flag ar"></i>
        DirecTV Sports | HD
        </a>
    </div>';
} elseif ($canal2 === "directv1" || $canal2 === "directv1") {
    $canalImg = "directv";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=561">
        <i class="flag ar"></i>
        DirecTV Sports | HD
        </a>
    </div>';
}

if ($canal === "directv2" || $canal === "directv2") {
    $canalImg = "directv";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=562">
        <i class="flag ar"></i>
        DirecTV Sports 2 | HD
        </a>
    </div>';
} elseif ($canal2 === "directv2" || $canal2 === "directv2") {
    $canalImg = "directv";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=562">
        <i class="flag ar"></i>
        DirecTV Sports 2 | HD
        </a>
    </div>';
}

if ($canal === "directvfight" || $canal === "directvfight") {
    $canalImg = "directv";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly9kdHZvdHQtYWJjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzEyNTkvbWFuaWZlc3QubXBk&key=MzZiMmM2Yjc3MzZhNTkwMWJmNDA4OTE2YTQ1NGFiZjk=&key2=ZjBkMjI1NGY4NWI3MzcxN2Y0YzJjZDgxYmRhNzE4ODk=">
        <i class="flag ar"></i>
        DirecTV Sports Fight | HD
        </a>
    </div>';
} elseif ($canal2 === "directvfight" || $canal2 === "directvfight") {
    $canalImg = "directv";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly9kdHZvdHQtYWJjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzEyNTkvbWFuaWZlc3QubXBk&key=MzZiMmM2Yjc3MzZhNTkwMWJmNDA4OTE2YTQ1NGFiZjk=&key2=ZjBkMjI1NGY4NWI3MzcxN2Y0YzJjZDgxYmRhNzE4ODk=">
        <i class="flag ar"></i>
        DirecTV Sports Fight | HD
        </a>
    </div>';
}

if ($canal === "La 1 TVE" || $canal === "La 1 TVE") {
    $canalImg = "la1";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=93">
        <i class="flag es"></i>
        La 1 | HD
        </a>
    </div>';
} elseif ($canal2 === "La 1 TVE" || $canal2 === "La 1 TVE") {
    $canalImg = "la1";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=93">
        <i class="flag es"></i>
        La 1 [OP1] | HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=310">
        <i class="flag es"></i>
        La 1 [OP2] | HD
        </a>
    </div>';
}

if ($canal === "espnsur" || $canal === "espnsur") {
    $canalImg = "espn";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=1">
        <i class="flag ar"></i>
        ESPN Sur | HD
        </a>
    </div>';
} elseif ($canal2 === "espnsur" || $canal2 === "espnsur") {
    $canalImg = "espn";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=1">
        <i class="flag ar"></i>
        ESPN Sur | HD
        </a>
    </div>';
}

if ($canal === "espn2sur" || $canal === "espn2sur") {
    $canalImg = "espn";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=2">
        <i class="flag ar"></i>
        ESPN 2 Sur | HD
        </a>
    </div>';
} elseif ($canal2 === "espn2sur" || $canal2 === "espn2sur") {
    $canalImg = "espn";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=2">
        <i class="flag ar"></i>
        ESPN 2 Sur | HD
        </a>
    </div>';
}

if ($canal === "espn3sur" || $canal === "espn3sur") {
    $canalImg = "espn";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=3">
        <i class="flag ar"></i>
        ESPN 3 Sur | HD
        </a>
    </div>';
} elseif ($canal2 === "espn3sur" || $canal2 === "espn3sur") {
    $canalImg = "espn";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=3">
        <i class="flag ar"></i>
        ESPN 3 Sur | HD
        </a>
    </div>';
}

if ($canal === "espn4sur" || $canal === "espn4sur") {
    $canalImg = "espn";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="https://irpc.ga/mg/?url=espn-4-en-vivo&play">
        <i class="flag ar"></i>
        ESPN 4 Sur | HD
        </a>
    </div>';
} elseif ($canal2 === "espn4sur" || $canal2 === "espn4sur") {
    $canalImg = "espn";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="https://irpc.ga/mg/?url=espn-4-en-vivo&play">
        <i class="flag ar"></i>
        ESPN 4 Sur | HD
        </a>
    </div>';
}

if ($canal === "espnextra" || $canal === "espnextra") {
    $canalImg = "espn";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=4">
        <i class="flag ar"></i>
        ESPN Extra | HD
        </a>
    </div>';
} elseif ($canal2 === "espnextra" || $canal2 === "espnextra") {
    $canalImg = "espn";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=4">
        <i class="flag ar"></i>
        ESPN Extra | HD
        </a>
    </div>';
}

if ($canal === "espnmx" || $canal === "espnmx") {
    $canalImg = "espn";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=564">
        <i class="flag mx"></i>
        ESPN | HD
        </a>
    </div>';
} elseif ($canal2 === "espnmx" || $canal2 === "espnmx") {
    $canalImg = "espn";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=564">
        <i class="flag mx"></i>
        ESPN | HD
        </a>
    </div>';
}

if ($canal === "espn2mx" || $canal === "espn2mx") {
    $canalImg = "espn";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=583">
        <i class="flag mx"></i>
        ESPN 2 | HD
        </a>
    </div>';
} elseif ($canal2 === "espn2mx" || $canal2 === "espn2mx") {
    $canalImg = "espn";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=583">
        <i class="flag mx"></i>
        ESPN 2 | HD
        </a>
    </div>';
}

if ($canal === "espndep" || $canal === "espndep") {
    $canalImg = "espn";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=609">
        <i class="flag mx"></i>
        ESPN Deportes | HD
        </a>
    </div>';
} elseif ($canal2 === "espndep" || $canal2 === "espndep") {
    $canalImg = "espn";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=609">
        <i class="flag mx"></i>
        ESPN Deportes | HD
        </a>
    </div>';
}

if ($canal === "foxsportssur" || $canal === "foxsportssur") {
    $canalImg = "foxsports";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=5">
        <i class="flag ar"></i>
        FOX Sports | HD
        </a>
    </div>';
} elseif ($canal2 === "foxsportssur" || $canal2 === "foxsportssur") {
    $canalImg = "foxsports";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=5">
        <i class="flag ar"></i>
        FOX Sports | HD
        </a>
    </div>';
}

if ($canal === "foxsports2sur" || $canal === "foxsports2sur") {
    $canalImg = "foxsports";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=6">
        <i class="flag ar"></i>
        FOX Sports 2 | HD
        </a>
    </div>';
} elseif ($canal2 === "foxsports2sur" || $canal2 === "foxsports2sur") {
    $canalImg = "foxsports";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=6">
        <i class="flag ar"></i>
        FOX Sports 2 | HD
        </a>
    </div>';
}

if ($canal === "foxsports3sur" || $canal === "foxsports3sur") {
    $canalImg = "foxsports";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=7">
        <i class="flag ar"></i>
        FOX Sports 3 | HD
        </a>
    </div>';
} elseif ($canal2 === "foxsports3sur" || $canal2 === "foxsports3sur") {
    $canalImg = "foxsports";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=7">
        <i class="flag ar"></i>
        FOX Sports 3 | HD
        </a>
    </div>';
}

if ($canal === "foxsportsmx" || $canal === "foxsportsmx") {
    $canalImg = "foxsports";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=565">
        <i class="flag mx"></i>
        Fox Sports | HD
        </a>
    </div>';
} elseif ($canal2 === "foxsportsmx" || $canal2 === "foxsportsmx") {
    $canalImg = "foxsports";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=564">
        <i class="flag mx"></i>
        Fox Sports | HD
        </a>
    </div>';
}

if ($canal === "foxsport3smx" || $canal === "foxsports3mx") {
    $canalImg = "foxsports";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=566">
        <i class="flag mx"></i>
        Fox Sports 3 | HD
        </a>
    </div>';
} elseif ($canal2 === "foxsports3mx" || $canal2 === "foxsports3mx") {
    $canalImg = "foxsports";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'tv/?futbol&id=' . $index . '&c=566">
        <i class="flag mx"></i>
        Fox Sports 3 | HD
        </a>
    </div>';
}

if ($canal === "goltvec" || $canal === "goltvec") {
    $canalImg = "goltv";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly8xMTM0LXZvcy5kdHZvdHQuY29tL0RBU0gvbWFuaWZlc3QubXBk&key=MzMwM2I0YzY5ODJmMzgxZWE5ZTMwOTAwOWZiYjNmMjc=&key2=YTdmZDQ5ODA4Zjg5MGMyNTAwYmYyMTgwYWFmNDIzMDc=">
        <i class="flag ec"></i>
        Gol TV | HD
        </a>
    </div>';
} elseif ($canal2 === "goltvec" || $canal2 === "goltvec") {
    $canalImg = "goltv";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly8xMTM0LXZvcy5kdHZvdHQuY29tL0RBU0gvbWFuaWZlc3QubXBk&key=MzMwM2I0YzY5ODJmMzgxZWE5ZTMwOTAwOWZiYjNmMjc=&key2=YTdmZDQ5ODA4Zjg5MGMyNTAwYmYyMTgwYWFmNDIzMDc=">
        <i class="flag ec"></i>
        Gol TV | HD
        </a>
    </div>';
}

if ($canal === "GolTV Play" || $canal === "GolTV Play") {
    $canalImg = "goltv";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly8xMTM0LXZvcy5kdHZvdHQuY29tL0RBU0gvbWFuaWZlc3QubXBk&key=MzMwM2I0YzY5ODJmMzgxZWE5ZTMwOTAwOWZiYjNmMjc=&key2=YTdmZDQ5ODA4Zjg5MGMyNTAwYmYyMTgwYWFmNDIzMDc=">
        <i class="flag ec"></i>
        Gol TV | HD
        </a>
    </div>';
} elseif ($canal2 === "GolTV Play" || $canal2 === "GolTV Play") {
    $canalImg = "goltv";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly8xMTM0LXZvcy5kdHZvdHQuY29tL0RBU0gvbWFuaWZlc3QubXBk&key=MzMwM2I0YzY5ODJmMzgxZWE5ZTMwOTAwOWZiYjNmMjc=&key2=YTdmZDQ5ODA4Zjg5MGMyNTAwYmYyMTgwYWFmNDIzMDc=">
        <i class="flag ec"></i>
        Gol TV | HD
        </a>
    </div>';
}

if ($canal === "tyc" || $canal === "tyc") {
    $canalImg = "tycsports";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=257">
        <i class="flag ar"></i>
        TyC Sports | HD
        </a>
    </div>';
} elseif ($canal2 === "tyc" || $canal2 === "tyc") {
    $canalImg = "tycsports";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=257">
        <i class="flag ar"></i>
        TyC Sports | HD
        </a>
    </div>';
}

if ($canal === "winplus" || $canal === "winplus") {
    $canalImg = "winsports";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=279">
        <i class="flag co"></i>
        Win Sports + | HD
        </a>
    </div>';
} elseif ($canal2 === "winplus" || $canal2 === "winplus") {
    $canalImg = "winsports";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=279">
        <i class="flag co"></i>
        Win Sports + | HD
        </a>
    </div>';
}

if ($canal === "Teledeporte" || $canal === "tdp") {
    $canalImg = "tdp";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=279">
        <i class="flag es"></i>
        Teledeporte | HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=735">
        <i class="flag es"></i>
        Teledeporte | HD
        </a>
    </div>';
} elseif ($canal2 === "Teledeporte" || $canal2 === "tdp") {
    $canalImg = "tdp";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=279">
        <i class="flag es"></i>
        Teledeporte | HD
        </a>
    </div>
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=735">
        <i class="flag es"></i>
        Teledeporte | HD
        </a>
    </div>';
}

if ($canal === "Esport3" || $canal === "Esport3 (Cataluña)") {
    $canalImg = "e3";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=253">
        <i class="flag es"></i>
        Esport3 | HD
        </a>
    </div>';
} elseif ($canal2 === "Esport3" || $canal2 === "Esport3 (Cataluña)") {
    $canalImg = "e3";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=253">
        <i class="flag es"></i>
        Esport3 | HD
        </a>
    </div>';
}

if ($canal === "Aragón Deporte" || $canal === "AragÃ³n Deporte") {
    $canalImg = "aragontv";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=118">
        <i class="flag es"></i>
        Aragón Deporte | HD
        </a>
    </div>';
} elseif ($canal2 === "Aragón Deporte" || $canal2 === "AragÃ³n Deporte") {
    $canalImg = "aragontv";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=119">
        <i class="flag es"></i>
        CMM Play (Castilla - LM) | HD
        </a>
    </div>';
}

if ($canal === "CMMPlay (Castilla-LM)" || $canal === "CMMPlay (Castilla-LM)") {
    $canalImg = "cmm";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=119">
        <i class="flag es"></i>
        CMM Play (Castilla - LM) | HD
        </a>
    </div>';
} elseif ($canal2 === "CMMPlay (Castilla-LM)" || $canal2 === "CMMPlay (Castilla-LM)") {
    $canalImg = "cmm";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=119">
        <i class="flag es"></i>
        CMM Play (Castilla - LM) | HD
        </a>
    </div>';
}

if ($canal === "ZDF (M+ Astra)" || $canal === "ZDF (M+ Astra)") {
    $canalImg = "zdf";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=232">
        <i class="flag de"></i>
        ZDF | HD
        </a>
    </div>';
} elseif ($canal2 === "ZDF (M+ Astra)" || $canal2 === "ZDF (M+ Astra)") {
    $canalImg = "zdf";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play/?epg&futbol&id=' . $index . '&c=232">
        <i class="flag de"></i>
        ZDF | HD
        </a>
    </div>';
}

if ($canal === "tudnusa" || $canal === "tudnusa") {
    $canalImg = "tudn";
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=tudnusa">
        <i class="flag mx"></i>
        TUDN | VIP HD
        </a>
    </div>';
} elseif ($canal2 === "tudnusa" || $canal2 === "tudnusa") {
    $canalImg = "tudn";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="' . $app . 'play?futbol&id=' . $index . '&c=tudnusa">
        <i class="flag mx"></i>
        TUDN | VIP HD
        </a>
    </div>';
}

if ($canal === "Canal por confirmar" || $canal === "Canal por confirmar") {
    $canalop2 = '
    <div>
        <a class="btn btn-lg btn-primary" href="javascript:void(0)">
        <ion-icon name="alert-circle-outline"></ion-icon>
        Sin información de TV
        </a>
    </div>';
} elseif ($canal2 === "DAZN (Regístrate)" || $canal2 === "DAZN | (Movistar 59)") {
    $canalImg = "dazn";
    $canalop4 = '
    <div>
        <a class="btn btn-lg btn-primary" href="javascript:void(0)">
        <ion-icon name="alert-circle-outline"></ion-icon>
        Sin información de TV
        </a>
    </div>';
}

// Repetidos
if ($canalop2 == $canalop3) {
    $canalop3 = "";
}
if ($canalop2 == $canalop4) {
    $canalop4 = "";
}
if ($canalop3 == $canalop4) {
    $canalop4 = "";
} else {
    if ($canal === null || $canal === "") {
        $canal = "";
        $canalop2 = "";
    }
    if ($canal2 === null || $canal2 === "") {
        $canal2 = "";
        $canalop4 = "";
    }
}

<?php
// Betcris Honduras - Tigo Sports
if ($result['liga'] == 21 && $result['canal3'] !== ""){
    $r = base64_encode($result['canal3']);
    $custom1 = '
    <div>
        <a class="btn btn-lg btn-primary" href="../../../tv/epg/?nba&c='.$r.'&plyr=jw">
        <i class="flag hidden hn"></i>
        Tigo Sports | HD
        </a>
    </div>
    ';
}

// Star
if ($result['local'] === "team"){
    $canalImg = "starplus";
    // LINK:
    $r= "";

    if ($r === ""){
        $r = "../../../tv/epg?r=" . $r;
    } else {
        $r = "javascript:void(0)";
    }
    $custom1 = '
    <div>
        <a class="btn btn-lg btn-primary" href="'.$r.'">
        <i class="flag hidden ar"></i>
        Star + | HD
        </a>
    </div>
    ';
}

//HBO
if ($result['visita'] === "team"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmFrbS5sYXRhbS5oYm9tYXhjZG4uY29tL2NtYWYvbGl2ZS8yMDMxNjExL2Rhc2gvY2VuYy8yODIxNS9tYXN0ZXIubXBk&key=MDEwMTdhZDI0YTZmY2M3MmZjMGQwY2ZkNWM4ZDVjZmE=&key2=Y2JlMGQzNWVkOGZhOWI4MDZlYTM4N2ViOTFjYjBhYmQ=";
    $custom1 = '
    <div>
        <a class="btn btn-lg btn-primary" href="../../../tv/epg?s='.$s.'">
        <i class="flag hidden ar"></i>
        HBO Max | HD
        </a>
    </div>
    ';
}
<?php
// Betcris Honduras - Tigo Sports
if ($result['liga'] == 21 && $result['canal3'] !== ""){
    $r = base64_encode($result['canal3']);
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg/?nba&c='.$r.'&plyr=jw">
        <i class="flag hn"></i>
        Tigo Sports | HD
        </a>
    </li>
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
    <li>
        <a class="justify-content-center" href="'.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}

//HBO
if ($result['visita'] === "team"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmFrbS5sYXRhbS5oYm9tYXhjZG4uY29tL2NtYWYvbGl2ZS8yMDMxNjExL2Rhc2gvY2VuYy8yODIxNS9tYXN0ZXIubXBk&key=MDEwMTdhZDI0YTZmY2M3MmZjMGQwY2ZkNWM4ZDVjZmE=&key2=Y2JlMGQzNWVkOGZhOWI4MDZlYTM4N2ViOTFjYjBhYmQ=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "inter"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmNmLmxhdGFtLmhib21heGNkbi5jb20vY21hZi9saXZlLzIwMzE2MTAvZGFzaC9jZW5jLzI4MjIzL21hc3Rlci5tcGQ=&key=MDEwMTZjNTIzZGQwYmU1NTQyZTU1MjBlNTc3YTRmODU=&key2=ZjE0ZWE1Mjg2OTQwYWJmYTlmMTI5ZmY2MTNmODVkOTk=";
    ////if ($s === ""){ $s= "javascript:void(0)"; } else {$s = "../../../tv/epg?s='.$s.'";}
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "brujas"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmZseS5sYXRhbS5oYm9tYXhjZG4uY29tL2NtYWYvbGl2ZS8yMDMxNjExL2Rhc2gvY2VuYy8yODIzOS9tYXN0ZXIubXBk&key=MDEwMTUyMzczNmY1NGM3NjJiMDkzMzYzZGFlZjU3Y2Y=&key2=YzE3MTZjMTg1NTQzNmM4YjBlMmI5MWY3MDg1ZGQ3N2M=";
    ////if ($s === ""){ $s= "javascript:void(0)"; } else {$s = "../../../tv/epg?s='.$s.'";}
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "barcelona"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmFrbS5sYXRhbS5oYm9tYXhjZG4uY29tL2NtYWYvbGl2ZS8yMDMxNjE1L2Rhc2gvY2VuYy8yODI1MC9tYXN0ZXIubXBk&key=MDEwMWU2NmE0MDM4NzNlMDgyYjg2MzFmMjc4ZjBiYTg=&key2=ZTljMWQ2ZGRjM2U5NGNjMjQ2YzkwY2ExYTBkZjRiYjI=";
    //if ($s === ""){ $s= "javascript:void(0)"; } else {$s = "../../../tv/epg?s='.$s.'";}
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "at.madrid"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmFrbS5sYXRhbS5oYm9tYXhjZG4uY29tL2NtYWYvbGl2ZS8yMDMxNjgyL2Rhc2gvY2VuYy8yODI1OS9tYXN0ZXIubXBk&key=MDEwMWFkMmE2N2ZiNmJhN2VhYjRhMWZkMGE2YzRjYzU=&key2=ODM5NGEzYjk2NjRhZWNjM2NmMmE0OGRmNDE3N2IxMmI=";
    //if ($s === ""){ $s= "javascript:void(0)"; } else {$s = "../../../tv/epg?s='.$s.'";}
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "ajax"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmFrbS5sYXRhbS5oYm9tYXhjZG4uY29tL2NtYWYvbGl2ZS8yMDMxNjEyL2Rhc2gvY2VuYy8yODI2MC9tYXN0ZXIubXBk&key=MDEwMTM0NDkzMzE1ZTVhYTY4Zjc1MmI4OWZjOWIyNzM=&key2=NDdlYzVkYWQxMDQyNTczYTVjY2IzMmQxZGRhMDlhOTY=";
    //if ($s === ""){ $s= "javascript:void(0)"; } else {$s = "../../../tv/epg?s='.$s.'";}
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "tottenham"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmFrbS5sYXRhbS5oYm9tYXhjZG4uY29tL2NtYWYvbGl2ZS8yMDMxNjE3L2Rhc2gvY2VuYy8yODI1OC9tYXN0ZXIubXBk&key=MDEwMWI1YmY0OWU2ZmE5ZmFlNDA1NDMyZWQzZTYyZGM=&key2=YjczMWU4ZDNlYTUzMGFiMDE5YTlkOWQwM2Y2YWQ4ODc=";
    //if ($s === ""){ $s= "javascript:void(0)"; } else {$s = "../../../tv/epg?s='.$s.'";}
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "eintracht"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmxsbi5sYXRhbS5oYm9tYXhjZG4uY29tL2NtYWYvbGl2ZS8yMDMxNjgzL2Rhc2gvY2VuYy8yODI0Mi9tYXN0ZXIubXBk&key=MDEwMTg1YTJkZGI2MzIxNmI3YjJiMjZiZjE4YTBmNTQ=&key2=YzZmMDlmZDBkMGI3MDBkMDNiM2ViNzEyYjA3MjIwYTY=";
    //if ($s === ""){ $s= "javascript:void(0)"; } else {$s = "../../../tv/epg?s='.$s.'";}
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "napoli"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmZseS5sYXRhbS5oYm9tYXhjZG4uY29tL2NtYWYvbGl2ZS8yMDMxNjE2L2Rhc2gvY2VuYy8yODI0MS9tYXN0ZXIubXBk&key=MDEwMWIzNzE1NTllNjEwZTUzOGQzZjM3YzY3MDQ4Zjk=&key2=MDdiOWI1ZmY0YjI5MjhlMzZiNTllOGMzYjJiZWZiMjQ=";
    //if ($s === ""){ $s= "javascript:void(0)"; } else {$s = "../../../tv/epg?s='.$s.'";}
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}
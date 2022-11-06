<?php

if ($result['canal3'] === "star+"){
    $canalImg = "starplus";
    $r = "../../star.php";
    $custom2 = '
    <li>
        <a class="justify-content-center" href="'.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}


$c = ucfirst($_GET['c']); $g = $_GET['g'];
$c2 = ucfirst($_GET['c2']); $g2 = $_GET['g2'];
$index = $_GET['id'];

if(isset($_GET['c'])){
    $base ="http://cacssaj2.azureedge.net/streams//";
    $file = $base.$c."/playlist.m3u8";
    //echo $file;
    $url = $file;

	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$headers = array(
        "Host: cacssaj2.azureedge.net",
        "Origin: http://crackstreams.biz",
        "Referer: http://crackstreams.biz/",
        "Sec-GPC: 1",
        "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36",
        "Cookie: __cf_bm=0EbroPsk5WgtIPHHk09VpXHUpvbyWKFERcBED6AVzd4-1647564571-0-AaTu0qYjuVT4KzoaiTdY27hRz1ExlkrEcjXLtp/3lcZ21/dYItDSarAhGoMleNTm27nC/9xky8PqKOQmULL15+8K1BZisnmnyuSxTRALVnAb6jmbwke+0RVUBHqQ0r5Htg==",
    );
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	//for debug only!
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

	$resp = curl_exec($curl);
	curl_close($curl);
    // Getting page header data
    $array = @get_headers($file);
    // Storing value at 1st position because
    // that is only what we need to check
    $string = $array[0];
    // 404 for error, 200 for no error
    // if(strpos($string, "200")) {
        if(!strpos($string, "404")) {
            //echo $string;
            $m3u8 = base64_encode($file);
            echo '<script>window.location.href = "../../tv/epg?nba&plyr=jw&c='.$m3u8.'&id='.$index.'";</script>';
        }
        else {
            $base ="http://cacssaj2.azureedge.net/streams//";
            $file = $base.$c2."/chunks.m3u8";
            // Getting page header data
            $array = @get_headers($file);
            // Storing value at 1st position because
            // that is only what we need to check
            $string = $array[0];
            // 404 for error, 200 for no error
            // if(strpos($string, "200")) {
                if(!strpos($string, "404")) {
                $m3u8 = base64_encode($file);
                echo '<script>window.location.href = "../../tv/epg?nba&plyr=jw&c='.$m3u8.'&id='.$index.'";</script>';
            } else{
                //echo $string;
                $_SESSION['message'] = "No se ha podido cargar la retransmisión del juego.";
                echo $m3u8;
            }
        }
}

if(isset($_GET['g'])){
    $base ="http://givemenbastreams.com/nfl.php?g=";
    $file = $base.$g;
    $site= file_get_contents($file);
    preg_match("(source\:\s'(.*?)')", $site, $stream);

    if ($stream[1] == null){
        $base ="http://givemenbastreams.com/nfl.php?g=";
        $file = $base.$g2;
        $site= file_get_contents($file);
        preg_match("(source\:\s'(.*?)')", $site, $stream);
            if ($stream[1] == null){
                $_SESSION['message'] = "No se ha podido cargar la retransmisión del juego.";
            } else{
                $m3u8 = base64_encode($stream[1]);
                echo '<script>window.location.href = "../../tv/epg?nba&plyr=jw&c='.$m3u8.'&id='.$index.'";</script>';
            }

    } else{
        $m3u8 = base64_encode($stream[1]);
        // header ("location: ../../play?nfl&plyr=vid&c=$m3u8");
        //echo '<script>window.location.href = "../play?nba&plyr=vid&c='.$m3u8.'";</script>';
        echo '<script>window.location.href = "../../tv/epg?nba&plyr=jw&c='.$m3u8.'&id='.$index.'";</script>';
    }
}

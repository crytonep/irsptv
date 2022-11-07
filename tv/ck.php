<script src="https://ssl.p.jwpcdn.com/player/v/8.24.0/jwplayer.js"></script>
<script>jwplayer.key = 'XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';</script>
<div id="player"></div>
<?php
include('../conn.php');
$canal = $_GET['c'];
$query = mysqli_query($conn, "select * from channels
where channelId='" . $canal . "'");
$result = mysqli_fetch_assoc($query);
// M+
if ($result['type'] == 12) {
    $main = "htt"."ps:"."//c"."ryt"."one"."p.h"."ero"."kua"."pp."."com."."/ht"."tps"."://";
    $str = "-dash-"."mov"."ist"."arp"."lus".".em"."isi"."ond"."of6".".com"."/da"."sh/";
    $ext = ".is"."ml/"."man"."ife"."st."."m"."p"."d";
    $src = $result['channelUrl'];
    $source = $main . $src . $str . $src . $ext;
    $source = base64_encode($source);
    $key = base64_encode($result['key1']);
    $key2 = base64_encode($result['key2']);
} else {
    $source = base64_encode($result['channelUrl']);
    $key = $result['key1'];
    $key2 = $result['key2'];
}
echo '
    <script>
    let source = "' . $source . '";
    var playerInstance = jwplayer("player");

playerInstance.setup({
    file: atob(source),
    height: "100vh",
    width: "100%",
    aspectratio: "16:9",
    stretching: "bestfit",
    mediaid: "player",
    mute: false,
    autostart: true,
    language: "es",
    cast: {
        appid: "player",
        logo: "https://eduveel1.github.io/baleada/img/iRTVW_PLAYER.png",
    },
    logo: {
        file: "https://eduveel1.github.io/baleada/img/iRTVW_PLAYER.png",
        hide: "false",
        position: "top-left",
    }
});
// Preview Hack
setTimeout(function() {
    jwplayer().setMute(false);
    jwplayer().setControls(true);
    },1000);
    jwplayer().onTime(function(object) {
        if (object.position > object.duration - 1) {
            jwplayer().pause();
        }
    });
    </script>
    ';

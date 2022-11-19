<?php
$canal = $_GET['c'];
$query = mysqli_query($conn, "select * from channels
INNER JOIN channeltype ON channels.type = channeltype.typeId
INNER JOIN categories ON channels.category = categories.categoryId
INNER JOIN countries ON channels.country = countries.countryId
where channelId='" . $canal . "'");
$result = mysqli_fetch_assoc($query);
$type = $result['type'];
if (isset($_GET['ifr'])) {
    if (isset($_GET['nba'])) {
        $chnImg = "nbalp";
        $chnTxt = "NBA League Pass";
    } elseif (isset($_GET['nfl'])) {
        $chnImg = "nfl";
        $chnTxt = "NFL TV";
    } elseif (isset($_GET['mlb'])) {
        $chnImg = "mlb";
        $chnTxt = "MLB TV";
    }
} else {
    if (isset($_GET['r']) && isset($_GET['key'])) {
        $chnImg = "starplus";
        $chnTxt = "Star+";
    } else {
        $chnImg = $result['channelImg'];
        $chnTxt = $result['channelName'];
    }
}
?>
<div class="block-title">
    <h2><img width="38px" src="../img/canales/<?= $chnImg ?>.png" alt=""><?= $chnTxt ?></h2>
</div>
<div id="adBanner" class="row">
    <div class="col-12 text-center">
        <?php //include('../inc/ads/banner.php');?>
    </div>
    <div class="col-12">
        <?php if (isset($_GET['id'])) {
            include('../inc/evento-tv.php');
            } ?>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-sm-12">
        <a id="playerFake" href="https://abolishmentglum.com/mkd1fhhe?key=81193c57b7f58377107604b71a3e49aa" target="_blank">
            <img class="img-fluid" src="<?= $app ?>img/player_img.png" alt="">
        </a>
        <div class="hidden embed-responsive embed-responsive-16by9" id="playerContainer">
            <?php if (isset($_GET['r'])){ ?>
                <iframe class="embed-responsive-item" width="100%" height="100%" src="star.php?r=<?=$_GET['r']?>&key=<?=$_GET['key']?>&key2=<?=$_GET['key2']?>&img=<?=$_GET['img']?>" frameborder="0" scrolling="no" allowfullscreen allow-encrypted-media></iframe>
            <?php } elseif ($type == 11) { ?>
                <iframe class="embed-responsive-item" width="100%" height="100%" src="ckm.php?c=<?= $result['channelId'] ?>" frameborder="0" scrolling="no" allowfullscreen allow-encrypted-media></iframe>
            <?php } elseif ($type == 6) { ?>
                <iframe class="embed-responsive-item" width="100%" height="100%" src="bm.php?c=<?= $result['channelId'] ?>" frameborder="0" scrolling="no" allowfullscreen allow-encrypted-media></iframe>
            <?php } elseif (isset($_GET['hls'])) { ?>
                <iframe class="embed-responsive-item" width="100%" height="100%" src="hls.php?c=<?= $_GET['c'] ?>" frameborder="0" scrolling="no" allowfullscreen allow-encrypted-media></iframe>
            <?php } elseif (isset($_GET['nba']) || isset($_GET['nfl']) || isset($_GET['mlb'])) { ?>
                <iframe sandbox="allow-scripts allow-same-origin" class="embed-responsive-item" width="100%" height="100%" src="<?= base64_decode($_GET['ifr']) ?>" frameborder="0" scrolling="no" allowfullscreen allow-encrypted-media></iframe>
            <?php } else { ?>
                <iframe class="embed-responsive-item" width="100%" height="100%" src="ck.php?c=<?= $result['channelId'] ?>" frameborder="0" scrolling="no" allowfullscreen allow-encrypted-media></iframe>
            <?php } ?>
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <iframe class="hidden" id="twitch-chat-embed" src="https://www.twitch.tv/embed/iraffelive/chat?darkpopout&parent=iraffle.live" height="100%" width="100%">
        </iframe>
    </div>
</div>
<hr>
<div id="relacionados">
    <?php (!$_GET['r']) ? include('../inc/canales.php') : ""; ?>
</div>
<div id="adBanner2">
    <?php include('../inc/ads/popunder.php'); //include('../inc/ads/banner2.php');
    ?>
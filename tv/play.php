<?php
$canal = $_GET['c'];
$query = mysqli_query($conn, "select * from channels
INNER JOIN channeltype ON channels.type = channeltype.typeId
INNER JOIN categories ON channels.category = categories.categoryId
INNER JOIN countries ON channels.country = countries.countryId
where channelId='" . $canal . "'");
$result = mysqli_fetch_assoc($query);
$canal = base64_encode($result['channelUrl']);
$key1 = $result['key1'];
$key2 = $result['key2'];
echo '
<script>
let source = "' . $canal . '";
let key = "' . $key1 . '";
let key2 = "' . $key2 . '";
</script>
';
?>
<div class="container">
    <div class="block-title">
        <h2><img width="38px" src="<?= $app ?>img/canales/<?= $result['channelImg'] ?>.png" alt=""><?= $result['channelName'] ?></h2>
    </div>
</div>
<script src="https://ssl.p.jwpcdn.com/player/v/8.24.0/jwplayer.js"></script>
<div class="container" id="adBanner">
    <div class="row">
        <div class="col-6">
            <?php include('../inc/ads/banner.php'); ?>
        </div>
        <div class="col-6">
            <?php include('../inc/ads/banner.php'); ?>
        </div>
    </div>
</div>
<div class="container">
    <a id="playerFake" href="https://abolishmentglum.com/mkd1fhhe?key=81193c57b7f58377107604b71a3e49aa" target="_blank">
        <img src="<?=$app?>/img/player_img.png" alt="">
    </a>
    <div class="hidden" id="playerContainer">
        <?php if($result['type'] == 11) {?>
            <iframe width="100%" height="800px" src="ckm.php?c=<?=$result['channelId']?>" frameborder="0" scrolling="no" allowfullscreen></iframe>
            <?php } else {?>
                <iframe width="100%" height="800px" src="ck.php?c=<?=$result['channelId']?>" frameborder="0" scrolling="no" allowfullscreen></iframe>
        <?php }?>
    </div>
    <div class="container" id="adBanner2">
        <?php include('../inc/ads/banner2.php'); include('../inc/ads/popunder.php'); ?>
    </div>
</div>
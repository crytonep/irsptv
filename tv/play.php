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
    <div id="player"></div>
    <script src="<?= $app ?>js/player.js"></script>
    <div class="container" id="adBanner2">
        <?php include('../inc/ads/banner2.php'); include('../inc/ads/popunder.php'); ?>
    </div>
</div>
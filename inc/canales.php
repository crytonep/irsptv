<!-- Canales -->
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="block-title">
            <?php
            if ($type) {
                $channels = mysqli_query($conn, "select * from channels
                INNER JOIN categories ON channels.category = categories.categoryId
                INNER JOIN countries ON channels.country = countries.countryId
                where type = '$type'
                ORDER BY RAND()
                DESC LIMIT 12");
            ?>
            <h2>Canales Relacionados</h2>
            <?php
            } else {
                $channels = mysqli_query($conn, "select * from channels
                INNER JOIN categories ON channels.category = categories.categoryId
                INNER JOIN countries ON channels.country = countries.countryId
                where category = 11 AND type IN ('9','11')
                ORDER BY RAND()
                DESC LIMIT 12");
            ?>
            <h2>Canales Deportivos</h2>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<div class="row">
    <?php
    while ($result = mysqli_fetch_assoc($channels)) {
    ?>
    <div class="col-xs-6 col-sm-6 col-md-3">
        <a href="tv/?c=<?=$result['channelId']?>">
            <div class="lm-canal lm-info-block gray-default">
                <img src="<?=$app?>img/canales/<?=$result['channelImg']?>.png" alt="" srcset="">
                <h4><?=$result['channelName']?></h4>
                <span class="lm-info-block-text"></span>
            </div>
        </a>
    </div>
    <?php } ?>
</div>
<!-- *Canales -->
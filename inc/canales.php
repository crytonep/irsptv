<!-- Canales -->
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="block-title">
            <h2>Canales Deportivos</h2>
        </div>
    </div>
</div>

<div class="row">
    <?php
    $channels = mysqli_query($conn, "select * from channels
    INNER JOIN categories ON channels.category = categories.categoryId
    INNER JOIN countries ON channels.country = countries.countryId
    where category = 11 AND type IN ('9')
    ORDER BY RAND()
    DESC LIMIT 12");
    while ($result = mysqli_fetch_assoc($channels)) {
    ?>
    <div class="col-xs-6 col-sm-6 col-md-3">
        <a href="tv/?c=<?=$result['channelId']?>">
            <div class="client-block lm-info-block gray-default">
                <img src="<?=$app?>img/canales/<?=$result['channelImg']?>.png" alt="" srcset="">
                <h4><?=$result['channelName']?></h4>
                <span class="lm-info-block-text"></span>
            </div>
        </a>
    </div>
    <?php } ?>
</div>
<!-- *Canales -->
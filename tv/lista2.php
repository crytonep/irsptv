<div class="container">
    <div class="block-title">
        <h2>TV en Vivo</h2>
    </div>
</div>
<div class="lista-canales row">
    <?php
    $channels = mysqli_query($conn, "select * from channels
    INNER JOIN categories ON channels.category = categories.categoryId
    INNER JOIN countries ON channels.country = countries.countryId
    AND type IN ('9')
    ORDER BY RAND()");
    while ($result = mysqli_fetch_assoc($channels)) {
    ?>
    <div class="card-canal col-6 col-xs-6 col-sm-6 col-md-3">
        <a href="?c=<?=$result['channelId']?>">
            <div class="client-block lm-info-block gray-default">
                <div class="container-image">
                    <img src="<?=$app?>img/canales/<?=$result['channelImg']?>.png" alt="" srcset="">
                </div>
                <h4><?=$result['channelName']?></h4>
                <span class="lm-info-block-text"></span>
            </div>
        </a>
    </div>
    <?php } ?>
</div>
<!-- *Canales -->
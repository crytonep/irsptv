<div class="container">
    <div class="block-title">
        <h2>TV en Vivo</h2>
    </div>
    <!-- <input type="text" name="searchbox" id="searchbox" class="filterinput form-control" placeholder="Buscar canales por nombre" onkeyup="buscarCanales()"> -->
</div>
<div id="canales_content_q" class="canales-content container">
    <!-- Categorías -->
    <ul class="portfolio-filters canales-filters ">
        <li class="active">
            <a class="filter btn btn-sm btn-link" data-group="category_all">Todo</a>
        </li>
        <?php
        $categories = mysqli_query($conn, "select * from categories");
        while ($result = mysqli_fetch_assoc($categories)) {
            $index = $result['categoryId'];
            $queryQty = mysqli_query($conn, "select * from channels
            where category = $index
            AND type IN ('9', '11', '12')");
            $totalChannels = mysqli_num_rows($queryQty);
            if ($totalChannels < 6) {
                $categoryStatus = "hidden";
            } else {
                $categoryStatus = "show";
            }
        ?>
            <li>
                <a class="<?= $categoryStatus ?> filter btn btn-sm btn-link" data-group="category_<?= $result['categoryId'] ?>"><?= $result['categoryName'] ?></a>
            </li>
        <?php } ?>
    </ul>
    <!-- *Categorías -->
    <div id="canales" class="lista-canales row">
        <?php
        $channels = mysqli_query($conn, "select * from channels
        INNER JOIN categories ON channels.category = categories.categoryId
        INNER JOIN countries ON channels.country = countries.countryId
        AND type IN ('9', '11','12')
        ORDER BY channelId");
        while ($result = mysqli_fetch_assoc($channels)) {
            //Ocultar los chn tipo 12
            if ($result['type'] == 12){
                switch($result['channelId']){
                    case 718: $channelStatus = "hidden";
                    break;
                    case 719: $channelStatus = "hidden";
                    break;
                    case 720: $channelStatus = "hidden";
                    break;
                    case 722: $channelStatus = "hidden";
                    break;
                    case 723: $channelStatus = "hidden";
                    break;
                    case 725: $channelStatus = "hidden";
                    break;
                    case 726: $channelStatus = "hidden";
                    break;
                    case 727: $channelStatus = "hidden";
                    break;
                    case 733: $channelStatus = "hidden";
                    break;
                    case 774: $channelStatus = "hidden";
                    break;
                    case 775: $channelStatus = "hidden";
                    break;
                    case 776: $channelStatus = "hidden";
                    break;
                    case 777: $channelStatus = "hidden";
                    break;
                    case 778: $channelStatus = "hidden";
                    break;
                    case 779: $channelStatus = "hidden";
                    break;
                    case 780: $channelStatus = "hidden";
                    break;
                    case 781: $channelStatus = "hidden";
                    break;
                    case 782: $channelStatus = "hidden";
                    break;
                    case 783: $channelStatus = "hidden";
                    break;
                    case 784: $channelStatus = "hidden";
                    break;
                    case 785: $channelStatus = "hidden";
                    break;
                    case 786: $channelStatus = "hidden";
                    break;
                    case 787: $channelStatus = "hidden";
                    break;
                    case 788: $channelStatus = "hidden";
                    break;
                    case 789: $channelStatus = "hidden";
                    break;
                    case 790: $channelStatus = "hidden";
                    break;
                    default: $channelStatus = "";
                    break;
                }
            } else {}
        ?>
            <div class="<?=$channelStatus?> canal-item col-6 col-xs-6 col-sm-6 col-md-3" data-groups='["category_all", "category_<?= $result['categoryId'] ?>"]'>
                <a href="?c=<?= $result['channelId'] ?>">
                    <div class="lm-canal lm-info-block gray-default">
                        <div class="container-image">
                            <img src="<?= $app ?>img/canales/<?= $result['channelImg'] ?>.png" alt="" srcset="">
                        </div>
                        <h4>
                            <?= $result['channelName'] ?>
                            <span class="hidden lm-info-block-text"><?= $result['categoryName'] ?></span>
                        </h4>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
    <!-- *Canales -->
</div>
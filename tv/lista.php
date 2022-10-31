<div class="container">
    <div class="block-title">
        <h2>TV en Vivo</h2>
    </div>
</div>
<div id="content" class="page-content site-content single-post" role="main">
    <div class="row">
        <div class=" col-xs-12 col-sm-12 ">
            <!-- Portfolio Content -->
            <div id="portfolio_content_q" class="portfolio-content">

                <ul class="portfolio-filters">
                    <li class="active">
                        <a class="filter btn btn-sm btn-link" data-group="category_all">Todo</a>
                    </li>
                    <?php
                    $categories = mysqli_query($conn, "select * from categories");
                    while ($result = mysqli_fetch_assoc($categories)) {
                        $index = $result['categoryId'];
                        $queryQty = mysqli_query($conn, "select * from channels
                        where category = $index
                        AND type IN ('9')");
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


                <!-- Portfolio Grid -->
                <div class="portfolio-grid">
                    <?php
                    include('ficticios.php');
                    $channels = mysqli_query($conn, "select * from channels
                    INNER JOIN categories ON channels.category = categories.categoryId
                    INNER JOIN countries ON channels.country = countries.countryId
                    AND type IN ('9')");
                    while ($result = mysqli_fetch_assoc($channels)) {
                    ?>
                        <!-- Elemento -->
                        <figure class="item standard" data-groups='["category_all", "category_<?= $result['categoryId'] ?>"]'>
                            <div class="col-12">
                                <div class="client-block lm-info-block gray-default">
                                    <center>
                                        <div style="min-height: 48px; max-height: 48px;">
                                            <img src="<?= $app ?>/img/canales/<?= $result['channelImg'] ?>.png" alt="" srcset="">
                                        </div>
                                    </center>
                                    <hr>
                                    <span class="lm-info-block-text"></span>
                                </div>
                                <a href="?c=<?= $result['channelId'] ?>#player" class="ajax-page-load"></a>
                            </div>

                            <i class="fa fa-tv"></i>
                            <h4 class="name"><?= $result['channelName'] ?></h4>
                            <span class="category"><?= $result['categoryName'] ?></span>
                        </figure>
                        <!-- /Elemento -->
                    <? } ?>
                </div>
                <!-- /Portfolio Content -->
            </div>
        </div>
    </div>
</div>
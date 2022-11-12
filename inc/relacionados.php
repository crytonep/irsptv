<?php if (!isset($_GET['c'])) {} else { ?>
<!-- Relacionados Slider -->
<div id="relacionados-title" class="block-title">
    <h2>Canales Relacionados</h2>
</div>

<div id="clients_1" class="clients owl-carousel" data-mobile-items="1" data-tablet-items="3" data-items="6">
    <?php
    $actualC = $_GET['c'];
    $actual = mysqli_query($conn, "select * from channels
    where channelId='$actualC'");
    $res = mysqli_fetch_array($actual);
    $category = $res['category'];
        $list = mysqli_query($conn, "select * from channels
        INNER JOIN categories ON channels.category = categories.categoryId
        where category='$category'
        ORDER BY RAND()
        LIMIT 10");
        $tList = mysqli_num_rows($list);
        if ($tList < 1) {
            echo "
            <script>
            let relatedTitle = document.getElementById('relacionados-title');
            relatedTitle.className = 'hidden';
            </script>
            ";
        } else {
        }
        while ($result = mysqli_fetch_array($list)) {
            $index = $result['channelId'];
            $name = $result['channelName'];
            $img = $result['channelImg'];
        ?>
            <div class="eventito">
                <a href="?c=<?= $index ?>" title="Ver en vivo: <?= ucfirst($name) ?> en iRaffle TV">
                    <div class="lm-info-block gray-default">
                        <div class="main-event">
                            <div class="match">
                                <div class="team">
                                    <img class="image" src="<?= $app ?>img/canales/<?= $img ?>.png" alt="<?=$name?>" srcset="">
                                </div>
                                <h6 class="vs"><?= $name ?></h6>
                            </div>
                        </div>
                        <span class="lm-info-block-text text-light"><?= $result['categoryName'] ?></span>
                    </div>
                </a>
            </div>
        <?php }
        ?>
    </div>
    <!-- /Relacionados Slider -->
<?php }?>
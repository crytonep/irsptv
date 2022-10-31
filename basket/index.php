<?php include('../inc/header.php'); ?>

<div class="container">
    <div class="block-title">
        <h2>Basketball</h2>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php
        $ligas = mysqli_query($conn, "select * from ligas
        where ligaId IN('12','13','23')");
        while ($result = mysqli_fetch_array($ligas)) {
            // Cantidad de Juegos
            $index = $result['ligaId'];
            $queryQty = mysqli_query($conn, "select * from agenda where liga = $index");
            $totalGames = mysqli_num_rows($queryQty);
            if ($totalGames == 0) {
                $ligaStatus = "hidden";
            } elseif ($totalGames >= 1) {
                $ligaStatus = "show";
            }
            switch ($index) {
                case 23 :
                    $link = "nba/?id=".$index;
                break;
                default : $link = "liga/id=".$index;
            }
        ?>
            <div class="<?=$ligaStatus?> col-xs-6 col-sm-6 col-md-3">
                <a href="<?= $link ?>">
                    <div class="client-block lm-info-block gray-default">
                        <img src="<?= $app ?>img/ligas/<?= $result['ligaImg'] ?>.png" alt="" srcset="">
                        <h4><?= $result['ligaName'] ?></h4>
                        <span class="lm-info-block-text"></span>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>

<?php include('../inc/footer.php'); ?>
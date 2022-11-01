<?php include('../inc/header.php'); ?>

<div class="container">
    <div class="block-title">
        <h2>Fútbol</h2>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php
        $ligas = mysqli_query($conn, "select * from ligas");
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
            if ($index == 12 || $index == 13 || $index == 14 || $index == 22 || $index == 23 || $index == 25 || $index == 28 || $index == 29 || $index == 32 || $index == 35) {
                $ligaStatus = "hidden";
            }
        ?>
            <div class="<?=$ligaStatus?> col-6 col-xs-12 col-sm-6 col-md-4">
                <a href="liga/?id=<?= $result['ligaId'] ?>">
                    <div class="lm-info-block gray-default">
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
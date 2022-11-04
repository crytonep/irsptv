<!-- Shows Slider -->
<div class="block-title">
    <h2>Ahora en TV</h2>
</div>

<div id="clients_1" class="clients owl-carousel" data-mobile-items="1" data-tablet-items="3" data-items="6">
    <?php
    include('scraper.php');
    // CALL URL CUSTOMIZED
    $chf = "MLIGA";
    include('swmplus.php');
    $base = "https://www.movistarplus.es/guiamovil/" . $chf;
    // get DOM from URL or file
    $html = file_get_html($base);
    // MAIN ELEMENT
    $canales = $html->find('div.box');
    // INDEX
    $i = 0;
    $i2 = 0;

    foreach ($canales as $canal) {
        // CONDITIONS
        $genre = $canal->find('ul li.program ul li', 0)->plaintext;
        $title = $canal->find('ul li.program ul li', 1)->plaintext;
        $hh = $canal->find('ul li.time', 0)->plaintext;
        $hh = str_replace(' ', '', $hh);
        $hh = substr($hh, 0, 2);
        //$hh = intval($hh);
        $i++;
    ?>
        <div class="eventito eventito-<?= $i ?>">
            <a href="<?= $link ?>" title="<?= $title ?>: en Directo por iRaffle TV">
                <div class="lm-info-block gray-default">
                    <div class="mini-league">
                        <h5><?= $genre ?></h5>
                    </div>
                    <div class="main-event">
                        <div class="match">
                            <div class="team">
                                <img class="image" src="img/canales/mlaliga.png" alt="" srcset="">
                                <p><?= $title ?></p>
                            </div>
                        </div>
                    </div>
                    <h4 class="counter cntdwn-<?= $i ?>"></h4>
                    <?php include('show-countdown.php'); ?>
                    <span class="lm-info-block-text"></span>
                </div>
            </a>
        </div>
    <?php } ?>
</div>
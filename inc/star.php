<div id="main" class="site-main">
    <div id="main-content" class="single-page-content">
        <div id="primary" class="content-area">
            <div id="content" class="page-content site-content single-post" role="main">
                <div class="row">
                    <form method="post">
                        <div class=" col-xs-12 col-sm-12 ">
                            <!-- Portfolio Content -->
                            <div id="portfolio_content_q" class="portfolio-content">
                                <!-- Portfolio Grid -->
                                <div class="portfolio-grid three-columns">
                                    <?php
                                    $baseUrl = "https://megadeportes.live/star-plus/";
                                    $html = file_get_html($baseUrl);
                                    // MAIN ELEMENT
                                    $juego = $html->find('div.section');
                                    // INDEX
                                    $i = 1;
                                    $i2 = 1;

                                    foreach ($juego as $nombre) {
                                        $logo = $nombre->find('a img', 0)->src;
                                        $evento = $nombre->find('a div h3', 0)->plaintext;
                                        $liga = $nombre->find('a div h5', 0)->plaintext;
                                        $link = $nombre->find('a', 0)->href;
                                        if ($link === "#") {
                                            $link = "javascript:void(0)";
                                        } else {
                                            $link = str_replace("/embed/star/?r=", "", $link);
                                            $link = base64_decode($link);
                                            $link = str_replace("//vercomofutbol.xyz/s/star_jwp.html?get=", "", $link);
                                            $link = "../tv?r=" . $link;
                                        }
                                    ?>
                                        <!-- Portfolio Item 1 -->
                                        <figure class="item standard">
                                            <div class="portfolio-item-img">
                                                <img src="<?= $logo ?>" alt="<?= $evento ?>" title="" />
                                                <a href="<?= $link ?>"></a>
                                            </div>

                                            <i class="far fa-star"></i>
                                            <h4 class="name"><?= $evento ?></h4>
                                            <span class="category"><?= $liga ?></span>
                                        </figure>
                                        <!-- /Portfolio Item 1 -->
                                    <?php } ?>
                                </div>
                                <!-- /Portfolio Content -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
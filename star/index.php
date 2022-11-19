<?php include('../inc/header.php');
include('../inc/scraper.php'); ?>
<div class="container">
    <div class="block-title">
        <h2>Eventos Star+</h2>
    </div>
    <?php include('../inc/star.php');
    include('../inc/footer.php'); ?>
    <script>
        function eventos() {
            var x = Math.random().toString(36).substring(7);

            $.ajax({
                url: "https://api.codetabs.com/v1/proxy?quest=https://librefutbol.com/star-plus/eventos.json?" + x,
                type: "get",
                success: function(arr) {
                    var content = '';
                    for (var i = 0; i < arr.length; i++) {
                        var obj = arr[i];
                        url = obj['url'];
                        let nurl = url.replace("/embed/eventos/?r=", "bp.php?r=");
                        //console.log(nurl)
                        status = obj['status'];
                        if (status == "EN VIVO")
                            icon = "fa fa-circle text-danger faa-flash animated";
                        else
                            icon = "far fa-star";
                        content += '<figure class="item standard"><div class="portfolio-item-img"><img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/star/' +obj['img']+ '/scale?width=500&aspectRatio=1.78&format=jpeg" alt="'+obj['title']+'" title="'+obj['title']+'" /><a href="'+nurl+'"></a></div><i class="'+icon+'"></i><h4 class="name">'+obj['title']+'</h4><span class="category">'+obj['league']+'</span></figure>';
                    }
                    $("#eventos").html(content);
                }
            })
        }

        eventos();

        window.setInterval(function() {
            eventos();
        }, 60000);
    </script>
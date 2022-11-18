function eventos() {
    var x = Math.random().toString(36).substring(7);

    $.ajax({
        url: "https://api.codetabs.com/v1/proxy?quest=https://librefutbol.com/star-plus/eventos.json?" + x,
        type: "get",
        success: function (arr) {
            var content = '';
            for (var i = 0; i < arr.length; i++) {
                var obj = arr[i];

                if (obj['status'] == "FINALIZADO" || obj['status'] == "EN VIVO")
                    status = obj['status'];
                else
                    status = 'HOY | <span class="t">' + obj['status'] + '</span> hs';

                if (status == "EN VIVO")
                    color = "danger";
                else
                    color = "dark";

                content += '<div class="w3-quarter"><a href="' + obj['url'] + '"><img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/star/' + obj['img'] + '/scale?width=500&aspectRatio=1.78&format=jpeg" alt="Star+" style="width:100%" class="w3-hover-opacity"></a><a class="btn btn-block btn-' + color + '" href="' + obj['url'] + '">' + status + '</a> <div class="w3-card-4"><p><b>' + obj['league'] + '</b></p><p>' + obj['title'] + '</p></div></div>';

                if (i == arr.length - 1)
                    content += '</div>';
            }

            $("#eventos").html(content);
        }
    })
}

eventos();

window.setInterval(function () {
    eventos();
}, 60000);
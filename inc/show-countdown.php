<?php
date_default_timezone_set("America/Tegucigalpa");
?>
<script>
    var yyyy = 2022;
    var mm = '<?= $mm_1 - 1 ?>';
    var dd = '<?=gmdate("d")?>';
    var hh = '<?= $hh ?>';
    var m = '<?= $m_1 ?>';

    var textLive = "<span class='live-text text-danger faa-flash animated'> En Vivo</span>";
    var textEnd = "Finalizó";



    // Set the date we're counting down to
    // Year, Month ( 0 for January ), Day, Hour, Minute, Second, , Milliseconds
    //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    //::::::::::::                                       ::::::::::::
    //::::::::::::              12:00 AM                  ::::::::::::
    //::::::::::::                                       ::::::::::::
    //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    //                                              (AAAA, MM, DD, HH, MM, SS));
    var countDownDate<?= $i ?> = new Date(Date.UTC(yyyy, mm, dd, hh, m, 00));

    // Update the count down every 1 second
    var x<?= $i ?> = setInterval(function() {

            // Get todays date and time
            var now<?= $i ?> = new Date().getTime();

            // Find the distance between now an the count down date
            // GMT/UTC Adjustment at the end of the function. 0 = GMT/UTC+0; 1 = GMT/UTC+1.
            var distance<?= $i ?> = countDownDate<?= $i ?> - now<?= $i ?> - (3600000 * 1);

            // Time calculations for days, hours, minutes and seconds
            var days<?= $i ?> = Math.floor(distance<?= $i ?> / (1000 * 60 * 60 * 24));
            var hours<?= $i ?> = Math.floor((distance<?= $i ?> % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes<?= $i ?> = Math.floor((distance<?= $i ?> % (1000 * 60 * 60)) / (1000 * 60));
            var seconds<?= $i ?> = Math.floor((distance<?= $i ?> % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            if (days<?= $i ?> > 0) {
                for (const ele of document.getElementsByClassName("cntdwn-<?= $i ?>")) {
                    ele.innerHTML = (days<?= $i ?> + "d " + hours<?= $i ?> + "h " +
                        minutes<?= $i ?> + "m " + seconds<?= $i ?> + "s")
                }
            } else {
                for (const ele of document.getElementsByClassName("cntdwn-<?= $i ?>")) {
                    ele.innerHTML = (hours<?= $i ?> + "h " +
                        minutes<?= $i ?> + "m " + seconds<?= $i ?> + "s")
                }
            }
            // If the count down is over, write some text
            if (distance<?= $i ?> < 0) {
                for (const ele of document.getElementsByClassName("cntdwn-<?= $i ?>")) {
                    ele.innerHTML = textLive;
                }
                if (distance<?= $i ?> + 10800000 < 0) {
                    for (const allEllements of document.getElementsByClassName("cntdwn-<?= $i ?>")) {
                        allEllements.innerHTML = textEnd;
                    }
                }
            }
        }, //1000
        1000);
</script>
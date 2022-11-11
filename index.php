<?php include('conn.php'); include('inc/header.php');
?>
<center>
    <div id="alertaDesarrollo" class="alert alert-primary alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-triangle"></i>
        El sitio web se encuentra en desarrollo
    </div>
</center>
<div id="mundial">
    <div class="">
        <div id="proximos-title" class="block-title">
            <h2>¡Ya comienza el Mundial!</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="futbol/liga?id=38&juego=1143">
                    <div class="card product-card lm-info-block gray-default">
                        <div class="main-event">
                            <div class="league">
                                <img src="//iraffle.live/img/ligas/mundial.png" alt="League" />
                                <h5 class="cntdwn qatarEcuador">Contador</h5>
                            </div>
                            <div class="match">
                                <div class="team">
                                    <img width="60px" src="//iraffle.live/img/equipos/mundial/qatar.png" alt="" />
                                    <h4>Qatar</h4>
                                </div>
                                <div class="vs">
                                    <h6>vs</h6>
                                </div>
                                <div class="team">
                                    <img width="60px" src="//iraffle.live/img/equipos/mundial/ecuador.png" alt="" />
                                    <h4>Ecuador</h4>
                                </div>
                            </div>
                            <div class="channel">
                                <img src="//iraffle.live/img/canales/la1.png" alt="" />
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Timer -->
<script>
    var yyyy = 2022; var mm = 10; var dd = 20;

    var myTime = yyyy+mm+dd;
    var textLive = "<p class='live-text'>En Vivo <ion-icon class='faa-flash animated' name='ellipse'></ion-icon></p>";
    var textEnd = "Finalizó";


    function qatarEcuador() {
        // Set the date we're counting down to
        // Year, Month ( 0 for January ), Day, Hour, Minute, Second, , Milliseconds
        //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
        //::::::::::::                                       ::::::::::::
        //::::::::::::              12:00 AM                  ::::::::::::
        //::::::::::::                                       ::::::::::::
        //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
        //                                   (AAAA, MM, DD, HH, MM, SS));
        var countDownDate = new Date(Date.UTC(yyyy, mm, dd, 10, 00, 00));

        // Update the count down every 1 second
        var x = setInterval(function () {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        // GMT/UTC Adjustment at the end of the function. 0 = GMT/UTC+0; 1 = GMT/UTC+1.
        var distance = countDownDate - now - (3600000 * -6);

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        if (days > 0){
        for (const ele of document.getElementsByClassName("qatarEcuador")){
            ele.innerHTML = (days + "d " + hours + "h")
        }} else {
            for (const ele of document.getElementsByClassName("qatarEcuador")){
                ele.innerHTML = (hours + "<span>h</span> "
                + minutes + "<span>m</span> " + seconds + "<span>s</span><br />")
            }}
        //console.log(distance);
        // If the count down is over, write some text
        if (distance < 0) {
            for (const ele of document.getElementsByClassName("qatarEcuador")) {
                ele.innerHTML = textLive;
            }
            if (distance + 10800000 < 0) {
                countDownDate = new Date(countDownDate.getTime() + 86400000)
            } else if (distance + 7200000 < 0) {
                for (const allEllements of document.getElementsByClassName("qatarEcuador")) {
                    allEllements.innerHTML = textEnd;
                }
            }
        }
    }, 1000);
}
qatarEcuador()
</script>
<!-- *Timer -->
<div id="proximos">
    <?php include('inc/proximos.php'); ?>
</div>

<div id="shows">
    <?php //include('inc/shows.php'); ?>
</div>

<center>
    <div id="promo-app"></div>
</center>

<div id="canales">
    <?php include('inc/canales.php'); ?>
</div>

<?php
include('inc/footer.php');
?>
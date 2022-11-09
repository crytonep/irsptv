<?php include('../inc/header.php');
include('../inc/primos.php');

if (isset($_GET['c']) || isset($_GET['nba']) || isset($_GET['r'])) {
    include('play.php');
} else {
    include('lista2.php');
}
?>
<?php include('../inc/footer.php'); ?>
<?php include('../inc/header.php');

if (isset($_GET['c'])) {
    include('play.php');
} else {
    include('lista2.php');
}
?>
<?php include('../inc/footer.php'); ?>
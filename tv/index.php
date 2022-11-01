<?php include('../inc/header.php');

if (isset($_GET['c'])) {
    include('play.php');
} else {
    include('lista.php');
}
?>
<?php include('../inc/footer.php'); ?>
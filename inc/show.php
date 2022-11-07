<?php
if (isset($_GET['juego'])) {
    if ($_GET['juego'] !== "") {
        if ($_GET['juego'] == $index) {
            $aria = "true";
            $collapse = "show";
        } else {
            $collapse = "";
            $aria = "false";
        }
    }
}
<?php
    session_start();
    if(empty($_SESSION['globalUser']) && empty($_SESSION['globalPswd'])){
        die("")
    }
?>

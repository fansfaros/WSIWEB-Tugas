<?php
    session_start(); //inisialisasi session
    if(session_destroy()) {
        header("Location:  home.php");
    }
?> 
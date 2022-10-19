<?php include("acara7.php"); ?>
<?php
    $farros = new person();
    $rio = new person;

    $farros->set_name("Fans Farros");
    $rio->set_name("Rio Javier");

    echo "Farros's full name: ".$farros->get_name();
    echo "<br>";
    echo "Rio's full name: ".$rio->get_name();
?>
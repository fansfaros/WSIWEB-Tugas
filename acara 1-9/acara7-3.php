<?php include("acara7-4.php"); ?>
<?php
    $farros = new person("Fans Farros");
    $rio = new person("Rio Javier");
    // $farros->set_name("fans farros");
    // $rio->set_name("rio javier");

    echo "nama lengkap Farros : ".$farros->get_name();
    echo "<br>";
    echo "nama lengkap Rio : ".$rio->name;
?>
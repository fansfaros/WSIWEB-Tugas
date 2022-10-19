<?php include("acara7-4.php"); ?>
<?php
$farros = new person("Farros");
$rio = new person("Rio Javier");
// $farros->set_name("Fans Farros");
// $rio->set_name("Rio Javier");

echo "nama lengkap Farros : ".$farros->get_name();
echo "<br>";
echo "nama lengkap Rio : ".$rio->name;
?>
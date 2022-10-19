<?php
$films = [
    "kkn desa penari",
    "hantu suram",
    "superman",
    "mister tukul"
];

echo "<h5>Judul film PHP:</h5>";
echo "<ul>";
foreach($films as $film){
    echo "<li>$film</li>";
}
echo "</ul>";

?>
<?php
echo "Tabel Perkalian";
echo "<br>===========";

$max_value = 45;
for($i = 15; $i <= $max_value; $i++) {
    if ($i % 2 == 0 ) continue;
    echo "<br>12 * ". $i ." = ". 12*$i;
}
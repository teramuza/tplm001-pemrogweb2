<?php
$i = 0;
do {
    // akan dijalankan terlebih dahulu
    $i++;
    echo "looping ke-" . $i . "<br>";
} while($i < 0);
// pengecekan dilakukan setelah kode blok do dijalankan
// sehingga jika kondisinya false,
// kode blok do tetap dieksekusi terlebih dahulu
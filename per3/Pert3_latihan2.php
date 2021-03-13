<html>
<head>
<title>contoh Penggunaan IF</title></head>
<body>
<form method="post" action="">
    Besar Pembelian :
    <input type=text name=total_beli><br><br>
    <input type=submit value="Tentukan Diskon">
</form>
<?php
if (isset($_POST['total_beli'])) {
    $total_beli = $_POST['total_beli'];
    $diskon = 0;

    if($total_beli>=200000) $diskon = 0.1;
    else if ($total_beli>=100000) $diskon = 0.05;
    else $diskon = 0.01;

    $diskon = $diskon * $total_beli;
    $bayar = $total_beli-$diskon;

    echo "Diskon = $diskon <br>\n";
    echo "Pembayaran = $bayar <br>\n";
}
?>
</body>
</html>
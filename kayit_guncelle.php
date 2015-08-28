<?php include("baglan.php"); ?>


<?php


$sonuc = mysql_query("UPDATE `uyeler` SET `sifre`='1234?' WHERE `id`='2';");

echo $sonuc . "<br>";


?>
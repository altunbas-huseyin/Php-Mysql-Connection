<?php include("baglan.php"); ?>


<?php




echo "post ile geldi : " . $_POST["email"] . "<br>";
echo "post ile geldi : " . $_POST["sifre"] . "<br>";


echo "get ile geldi : " . $_GET["email"] . "<br>";
echo "get ile geldi : " . $_GET["sifre"] . "<br><br><br><br><br><br><br><br><br><br><br>";


$email = $_POST["email"];
$sifre = $_POST["sifre"];

$sonuc = mysql_query("INSERT INTO `demo`.`uyeler` (`email`, `sifre`) VALUES ('$email', '$sifre');");

echo $sonuc . "<br>";


?>
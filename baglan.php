<?php
$host = "localhost";
$kullanici = "root";
$sifre = "root";
$veritabani = "demo";

$mysqlbaglantisi = mysql_connect($host, $kullanici, $sifre);

//Baðlantýnýn yapýlýp yapýlmadýðýný if() ile kontrol ediyoruz.
if(! $mysqlbaglantisi) die("MySQL’e baðlanýlamýyor");

mysql_select_db($veritabani, $mysqlbaglantisi) or die ("Veritabanýna baðlanýlamýyor");

?>
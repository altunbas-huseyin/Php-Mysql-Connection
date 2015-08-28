<?php include("baglan.php"); ?>


<?php


$sonuc = mysql_query("SELECT * FROM uyeler where id=2 or id=1");
if (!$sonuc) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}


 

if(mysql_num_rows($sonuc)!=0)
{
    $i=0;
    while($oku = mysql_fetch_assoc($sonuc))
    {
        echo "Satir : ".$i." " . "id : " . $oku["id"] . " email " .$oku["email"] . " <br> ";
        $i++;
    }
}else{
    echo "Hic kayit yok!";
}



?>


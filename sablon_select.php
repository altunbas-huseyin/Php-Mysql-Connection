<?php include("baglan.php"); ?>
<?php


$sonuc = mysql_query("SELECT * FROM uyeler where id=2 or id=1");
if (!$sonuc) {
    echo 'sql sorgusunda hata var :  ' . mysql_error();
    exit;
}

?>


<?php
    while($oku = mysql_fetch_assoc($sonuc))
   { ?>

<div> <?php echo $oku["id"] ; ?> </div> 


<?php }?>

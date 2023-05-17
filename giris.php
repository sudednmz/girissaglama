<?php

$a=$_POST["ad"];
$adii=221210581;
$adiii="@sakarya.edu.tr";

$adi="b";

if($a==$adi.$adii.$adiii)
{
    $merhaba="Hoşgeldiniz";
}
else
{
    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
    header("Location: ".$url);
    
}

$b=$_POST["sifre"];
$sifre="b";
$sifree=221210581;
 if($b==$sifre.$sifree)
 {
  //  Yönlendirme yapılacak URL'yi belirleyin
 
  
  // Yönlendirme işlemini gerçekleştirin
  header("Location: anasayfa.php");
  exit;
 
 }
 else
 {
    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
    header("Location: ".$url);
 }







?>





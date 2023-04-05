<?php 
try{
    $VeritabaniBaglantisi     =     new PDO("mysql:host=localhost;dbname=banners;charset=UTF8","root","");
}
catch(PDOException $Hata){
    $Hata->getMessage();
    die();
}
?>
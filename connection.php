<?php 
try{
    $VeritabaniBaglantisi     =     new PDO("mysql:host=localhost;dbname=crud_db;charset=UTF8","root","");
}
catch(PDOException $Hata){
    $Hata->getMessage();
    die();
}
?>
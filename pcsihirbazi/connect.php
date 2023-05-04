<?php
$sunucu = "localhost";
$kullanici = "root";
$sifre = "";
try {
    $conn = new PDO("mysql:host=$sunucu;dbname=pcsihirbazi;charset=utf8", $kullanici, $sifre);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Bağlantı Başarılı"; 
    }
catch(PDOException $e)
    {
    echo "Bağlantı Hatası Oluştu: " . $e->getMessage();
    }
?>
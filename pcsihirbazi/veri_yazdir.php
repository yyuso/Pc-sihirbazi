<?php
// Veritabanına bağlantı oluşturma
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pcsihirbazi";
$conn = new mysqli($servername, $username, $password, $dbname);

// Seçilen seçenekleri veritabanına kaydetme
if(isset($_POST['islemci']) && isset($_POST['anakart']) && isset($_POST['ram']) && isset($_POST['harddisk']) && isset($_POST['ssd']) && isset($_POST['ekrankarti']) && isset($_POST['kasa']) && isset($_POST['psu']) && isset($_POST['sogutucu'])) {
    $islemci = $_POST['islemci'];
    $anakart = $_POST['anakart'];
    $ram = $_POST['ram'];
    $harddisk = $_POST['harddisk'];
    $ssd = $_POST['ssd'];
    $ekrankarti = $_POST['ekrankarti'];
    $kasa = $_POST['kasa'];
    $psu = $_POST['psu'];
    $sogutucu = $_POST['sogutucu'];

    $sql = "INSERT INTO secimler (islemci, anakart, ram, harddisk, ssd, ekrankarti, kasa, psu, sogutucu) VALUES ('$islemci', '$anakart', '$ram','$harddisk','$ssd','$ekrankarti','$kasa','$psu','$sogutucu')";
    $conn->query($sql);
    header("location:index.php");
}

// Veritabanı bağlantısını kapatma
$conn->close();
?>
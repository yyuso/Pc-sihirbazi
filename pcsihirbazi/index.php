<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/49b40112f4.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="admin/css/style.css">
  <title></title>
</head>
<style type="text/css">
  .sayfaaa{
    width: 50%;
    height: auto;
    margin-left: 25%;
    
  }
  .altalan{
  width: 100%;
  height: 100px;
  background-color: #0d6efd;
  display: flex;
  align-items: center;
  justify-content:center;
}
.bosdiv{
  clear: left;
}
</style>
<body>
<div class="ustalan">
<a href="index.php"><div class="alan3"><i></i></div></a>
<div class="alan"><i class="fa-solid fa-bullhorn"></i><i>Hafta içi Saat 14:00'a siparişlerde aynı gün Kargo Ücretsiz!*</i></div>
<div class="alan2"><i class="fa-solid fa-star"></i><i>Sık Sorular</i></div>
<div class="alan3"></div>  
</div>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid bg-primary">
    <a class="navbar-brand" href="hazirsistemler.php">Hazır Sistemler</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="masaustu.php">Pc toplama</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Bilgisayar Bileşenleri
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="anakart.php">Anakart</a></li>
            <li><a class="dropdown-item" href="islemci.php">İşlemci</a></li>
            <li><a class="dropdown-item" href="ekrankartı.php">Ekran Kartı</a></li>
            <li><a class="dropdown-item" href="ram.php">Ram Bellek</a></li>
            <li><a class="dropdown-item" href="ssd.php">SSD</a></li>
            <li><a class="dropdown-item" href="harddisk.php">Hard Disk</a></li>
            <li><a class="dropdown-item" href="kasa.php">Kasa</a></li>
            <li><a class="dropdown-item" href="psu.php">Güç Kaynağı-PSU</a></li>
            <li><a class="dropdown-item" href="sogutma.php">Soğutma Sistemi</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="iletisim.php">İletişim</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-danger text-white" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  
<div class="sayfaaa">
 <form action="veri_yazdir.php" method="POST" onsubmit="return confirmSubmit()">
    <label for="secim1" id="secim1">İşlemçi Seçiniz:</label>
    <select id="select1" name="islemci" onchange="gosterGizle()" class="form-select" aria-label="Default select example" >
      <option value=""></option>
      <option value="AMD Ryzen™ 9 7950X3D Soket AM5 4.2GHz 128MB 120W 5nm İşlemci 
">AMD Ryzen™ 9 7950X3D Soket AM5 4.2GHz 128MB 120W 5nm İşlemci  
</option>
      <option value="Intel Core i9 13900KS Soket 1700 13.Nesil 3.2GHz 36MB Önbellek 10nm İşlemci">Intel Core i9 13900KS Soket 1700 13.Nesil 3.2GHz 36MB Önbellek 10nm İşlemci</option>
      <option value=" AMD Ryzen™ 9 7900X3D Soket AM5 4.4GHz 128MB 120W 5nm İşlemci">  AMD Ryzen™ 9 7900X3D Soket AM5 4.4GHz 128MB 120W 5nm İşlemci</option>
      <option value="   AMD Ryzen™9 7950X Soket AM5 4.5GHz 64MB 170W 5nm İşlemci">    AMD Ryzen™9 7950X Soket AM5 4.5GHz 64MB 170W 5nm İşlemci</option>
      <option value="   Intel Core i9 13900 Soket 1700 13.Nesil 2GHz 32MB Önbellek 10nm İşlemci">  Intel Core i9 13900 Soket 1700 13.Nesil 2GHz 32MB Önbellek 10nm İşlemci</option>
      <option value=" Intel Core i9 12900F Soket 1700 12. Nesil 2.40GHz 30MB Önbellek 10nm İşlemci"> Intel Core i9 12900F Soket 1700 12. Nesil 2.40GHz 30MB Önbellek 10nm İşlemci</option>
      <option value="Intel Core i9 13900F Soket 1700 13.Nesil 2GHz 32MB Önbellek 10nm İşlemci">Intel Core i9 13900F Soket 1700 13.Nesil 2GHz 32MB Önbellek 10nm İşlemci</option>
      <option value=" Intel Core i9 12900K Soket 1700 12. Nesil 3.20GHz 30MB Önbellek 10nm İşlemci"> Intel Core i9 12900K Soket 1700 12. Nesil 3.20GHz 30MB Önbellek 10nm İşlemci</option>
      <option value="Intel Core i9 12900KF Soket 1700 12. Nesil 3.20GHz 30MB Önbellek 10nm İşlemci">Intel Core i9 12900KF Soket 1700 12. Nesil 3.20GHz 30MB Önbellek 10nm İşlemci</option>
      <option value=" AMD Ryzen™7 7800X 3D Soket AM5 4.2GHz 96MB 20W 7nm İşlemci"> AMD Ryzen™7 7800X 3D Soket AM5 4.2GHz 96MB 20W 7nm İşlemci</option>
    </select><br>

    <label for="secim2" id="secim2">Anakart Seçiniz:</label>
    <select id="select2" name="anakart" class="form-select" aria-label="Default select example"  onchange="enableSubcategory()">
      <option value=""></option>
      <option value="MSI MEG X670E GODLIKE AMD X670 Soket AM5 DDR5 6600MHz(OC) M.2 Anakart">MSI MEG X670E GODLIKE AMD X670 Soket AM5 DDR5 6600MHz(OC) M.2 Anakart</option>
      <option value="ASUS ROG CROSSHAIR X670E EXTREME AMD X670 Soket AM5 DDR5 6400MHz(OC) M.2 Anakart">ASUS ROG CROSSHAIR X670E EXTREME AMD X670 Soket AM5 DDR5 6400MHz(OC) M.2 Anakart</option>
      <option value="ASUS PRO WS WRX80E-SAGE SE 3200mhz (OC) M.2 Wi-Fi WRX80 e-ATX Anakart">ASUS PRO WS WRX80E-SAGE SE 3200mhz (OC) M.2 Wi-Fi WRX80 e-ATX Anakart</option>
      <option value=" MSI MEG X670E ACE AMD X670 Soket AM5 DDR5 6666MHz (OC) M.2 Anakart">  MSI MEG X670E ACE AMD X670 Soket AM5 DDR5 6666MHz (OC) M.2 Anakart</option>
      <option value="ASUS ROG MAXIMUS XIII EXTREME Intel Z590 Soket 1200 DDR4 5333MHz(OC) Anakart">ASUS ROG MAXIMUS XIII EXTREME Intel Z590 Soket 1200 DDR4 5333MHz(OC) Anakart</option>
      <option value="ASUS ROG CROSSHAIR X670E GENE AMD X670 Soket AM5 DDR5 6400MHz (OC) M.2 Anakart">ASUS ROG CROSSHAIR X670E GENE AMD X670 Soket AM5 DDR5 6400MHz (OC) M.2 Anakart</option>
      <option value=" MSI MEG Z690 UNIFY Intel Z690 Soket 1700 DDR5 6666MHz (OC) M.2 Anakart">  MSI MEG Z690 UNIFY Intel Z690 Soket 1700 DDR5 6666MHz (OC) M.2 Anakart</option>
      <option value="MSI MPG X670E CARBON WIFI AMD X670 Soket AM5 DDR5 6600MHz (OC) M.2 Anakart">MSI MPG X670E CARBON WIFI AMD X670 Soket AM5 DDR5 6600MHz (OC) M.2 Anakart</option>
      <option value=" MSI MEG Z590 ACE GOLD EDITION Intel Z590 Soket 1200 DDR4 5600MHz (OC) Anakart">  MSI MEG Z590 ACE GOLD EDITION Intel Z590 Soket 1200 DDR4 5600MHz (OC) Anakart</option>
      <option value=" ASUS ROG STRIX X670E-E GAMING WIFI AMD X670 Soket AM5 DDR5 6400MHz(OC) Anakart">  ASUS ROG STRIX X670E-E GAMING WIFI AMD X670 Soket AM5 DDR5 6400MHz(OC) Anakart</option>

    </select><br>

    <label for="secim3">Bellek-Ram Seçiniz:</label>
    <select id="select3" name="ram" class="form-select" aria-label="Default select example">
      <option value=""></option>
      <option value=" GSKILL 256GB (8x32GB) RipjawsV Siyah DDR4 3600MHz CL16 1.35V 2xQuad Kit PC Ram"> GSKILL 256GB (8x32GB) RipjawsV Siyah DDR4 3600MHz CL16 1.35V 2xQuad Kit PC Ram</option>
      <option value=" GSKILL 256GB (8x32GB) RipjawsV Siyah DDR4 3600MHz CL18 1.45V 2xQuad Kit PC Ram"> GSKILL 256GB (8x32GB) RipjawsV Siyah DDR4 3600MHz CL18 1.45V 2xQuad Kit PC Ram</option>
      <option value=" Micron 128GB DDR4 3200MHz 4Rx4 LRDIMM CL22 Server Ram"> Micron 128GB DDR4 3200MHz 4Rx4 LRDIMM CL22 Server Ram</option>
      <option value="CORSAIR 32GB (2x16GB) DDR5 6000mhz C36 Dominator Platinum RGB Ram">CORSAIR 32GB (2x16GB) DDR5 6000mhz C36 Dominator Platinum RGB Ram</option>
      <option value="CORSAIR 32GB (2X16GB) Vengeance LPX Siyah DDR5 5600MHz CL36 Dual Kit Ram">CORSAIR 32GB (2X16GB) Vengeance LPX Siyah DDR5 5600MHz CL36 Dual Kit Ram</option>
      <option value=" GSKILL 32GB (2x16GB) TRIDENT Z ROYAL ELITE GOLD DDR4 3600MHz CL14 1.45V RGB Ram"> GSKILL 32GB (2x16GB) TRIDENT Z ROYAL ELITE GOLD DDR4 3600MHz CL14 1.45V RGB Ram</option>
      <option value="GSKILL 32GB (2x16GB) TRIDENT Z ROYAL ELITE SILVER DDR4 3600MHz CL14 RGB Ram">GSKILL 32GB (2x16GB) TRIDENT Z ROYAL ELITE SILVER DDR4 3600MHz CL14 RGB Ram</option>
      <option value=" XPG 64GB (2x32GB) Lancer Siyah DDR5 6000MHz CL30 1.35V RGB PC Ram"> XPG 64GB (2x32GB) Lancer Siyah DDR5 6000MHz CL30 1.35V RGB PC Ram</option>
      <option value="GSKILL 32GB (2x16GB) TRIDENT Z ROYAL GOLD DDR4 3600MHz CL14 1.45V RGB Ram">GSKILL 32GB (2x16GB) TRIDENT Z ROYAL GOLD DDR4 3600MHz CL14 1.45V RGB Ram</option>
      <option value=" GSKILL 64GB (2x32GB) TRIDENT Z DDR4 4400MHz CL19 1.5V Dual Kit RGB LED PC Ram"> GSKILL 64GB (2x32GB) TRIDENT Z DDR4 4400MHz CL19 1.5V Dual Kit RGB LED PC Ram</option>
    </select><br>

    <label for="secim4">Hard Disk Seçiniz:</label>
    <select id="select4" name="harddisk" class="form-select" aria-label="Default select example">
      <option value=""></option>
      <option value="TOSHIBA 3.5 8TB N300 7200RPM SAT3 256MB (NAS) Harddisk">TOSHIBA 3.5" 8TB N300 7200RPM SAT3 256MB (NAS) Harddisk</option>
      <option value=" Toshiba 3.5 6TB N300 SATA 3.0 128MB Önbellek 7200Rpm NAS Harddisk">  Toshiba 3.5" 6TB N300 SATA 3.0 128MB Önbellek 7200Rpm NAS Harddisk</option>
      <option value="Toshiba 3.5 6TB S300 SATA 3.0Gb 256MB Önbellek 5400Rpm 7/24 Güvenlik Diski  
">Toshiba 3.5" 6TB S300 SATA 3.0Gb 256MB Önbellek 5400Rpm 7/24 Güvenlik Diski 
</option> 4TB N300 SATA 3.0 128MB Önbellek 7200Rpm NAS Harddisk 
">Toshiba 3.5" 4TB N300 SATA 3.0 128MB Önbellek 7200Rpm NAS Harddisk 
</option>
      <option value="Toshiba 3,5'' 4TB S300 SATA 3.0 256MB Önbellek 5400Rpm 7/24 Güvenlik Diski 
">Toshiba 3,5'' 4TB S300 SATA 3.0 256MB Önbellek 5400Rpm 7/24 Güvenlik Diski 
</option>
      <option value="Toshiba 2,5'' 2TB L200 SATA 3.0 128MB Önbellek 5400Rpm 7mm Harddisk  
">Toshiba 2,5'' 2TB L200 SATA 3.0 128MB Önbellek 5400Rpm 7mm Harddisk  
</option>
      <option value="Toshiba 3,5'' 2TB S300 SATA 3.0 128MB Önbellek 5400Rpm 7/24 Güvenlik Diski 
">Toshiba 3,5'' 2TB S300 SATA 3.0 128MB Önbellek 5400Rpm 7/24 Güvenlik Diski 
</option>
      <option value="Toshıba 3.5 2TB P300 7200RPM SATA-3 6.0Gb/s 256MB Harddisk  
">Toshıba 3.5" 2TB P300 7200RPM SATA-3 6.0Gb/s 256MB Harddisk  
</option>
      <option value="Seagate 2.5 1TB Barracuda Sata 3.0 128MB Cache 5400Rpm Notebook Disk  
">Seagate 2.5" 1TB Barracuda Sata 3.0 128MB Cache 5400Rpm Notebook Disk  
</option>
      <option value="Seagate Barracuda 3.5 2TB Sata 3.0 256MB Cache 7200Rpm Harddisk 
">Seagate Barracuda 3.5" 2TB Sata 3.0 256MB Cache 7200Rpm Harddisk 
</option>
    </select><br>

    <label for="secim5">SSD Seçiniz:</label>
    <select id="select5" name="ssd" class="form-select" aria-label="Default select example">
      <option value=""></option>
      <option value="CORSAIR 2TB MP600 PRO LPX Serisi NVMe M.2 SSD (7100MB Okuma / 6800MB Yazma)  
">CORSAIR 2TB MP600 PRO LPX Serisi NVMe M.2 SSD (7100MB Okuma / 6800MB Yazma) 
</option>
      <option value="Samsung 4TB T7 Shield USB 3.2 siyah (Okuma 1050MB / Yazma 1000MB) Harici SSD 
">Samsung 4TB T7 Shield USB 3.2 siyah (Okuma 1050MB / Yazma 1000MB) Harici SSD  
</option>
      <option value="Crucial 2TB P5 Serisi NVMe M.2 SSD (Okuma 3400MB / Yazma 3000MB) 
">Crucial 2TB P5 Serisi NVMe M.2 SSD (Okuma 3400MB / Yazma 3000MB)  
</option>
      <option value="Crucial 4TB MX500 2.5 SATA 3.0(Okuma 560MB/Yazma 510MB) SSD 
">Crucial 4TB MX500 2.5" SATA 3.0(Okuma 560MB/Yazma 510MB) SSD 
</option>
      <option value="Samsung 2TB T7 Serisi Siyah Touch USB 3.2 (Okuma 1050MB/Yazma 1000MB) Harici SSD 
">Samsung 2TB T7 Serisi Siyah Touch USB 3.2 (Okuma 1050MB/Yazma 1000MB) Harici SSD 
</option>
      <option value="CORSAIR 1TB MP600 PRO NVMe M.2 SSD (7000MB Okuma /5500MB Yazma)  
">CORSAIR 1TB MP600 PRO NVMe M.2 SSD (7000MB Okuma /5500MB Yazma)  
</option>
      <option value=" MSI SPATIUM M470 PCIe 4.0 NVMe M.2 2TB SSD (5000MB Okuma / 4400MB Yazma)"> MSI SPATIUM M470 PCIe 4.0 NVMe M.2 2TB SSD (5000MB Okuma / 4400MB Yazma)</option>
      <option value=" Samsung 2TB 980 PRO NVMe M.2 SSD (Okuma Hızı 7000MB / Yazma Hızı 5100MB)"> Samsung 2TB 980 PRO NVMe M.2 SSD (Okuma Hızı 7000MB / Yazma Hızı 5100MB)</option>
      <option value=" Samsung 2TB T7 Shield USB 3.2 Bej (Okuma 1050MB / Yazma 1000MB) Harici SSD"> Samsung 2TB T7 Shield USB 3.2 Bej (Okuma 1050MB / Yazma 1000MB) Harici SSD</option>
      <option value=" WD 2TB Elements SE Harici SDD (Okuma 400MB/s)"> WD 2TB Elements SE Harici SDD (Okuma 400MB/s)</option>
    </select><br>

    <label for="secim6">Ekran Kartı Seçiniz:</label>
    <select id="select6" name="ekrankarti" class="form-select" aria-label="Default select example">
      <option value=""></option>
      <option value=" MSI GeForce RTX 4070 VENTUS 3X 12GB OC GDDR6X 192Bit NVIDIA Ekran Kartı 
">  MSI GeForce RTX 4070 VENTUS 3X 12GB OC GDDR6X 192Bit NVIDIA Ekran Kartı  
</option>
      <option value="GIGABYTE GeForce RTX 3090 GAMING OC 24GB GDDR6X 384Bit Nvidia Ekran Kartı  
">GIGABYTE GeForce RTX 3090 GAMING OC 24GB GDDR6X 384Bit Nvidia Ekran Kartı 
</option>
      <option value="ZOTAC GeForce RTX 4090 TRINITY GAMING OC 24GB GDDR6X 384Bit NVIDIA Ekran Kartı 
">ZOTAC GeForce RTX 4090 TRINITY GAMING OC 24GB GDDR6X 384Bit NVIDIA Ekran Kartı  
</option>
      <option value="ZOTAC GeForce RTX 4090 TRINITY GAMING 24GB GDDR6X 384Bit NVIDIA Ekran Kartı  
">ZOTAC GeForce RTX 4090 TRINITY GAMING 24GB GDDR6X 384Bit NVIDIA Ekran Kartı  
</option>
      <option value="MSI GeForce RTX 4090 VENTUS 3X 24G OC GDDR6X 384Bit NVIDIA Ekran Kartı 
">MSI GeForce RTX 4090 VENTUS 3X 24G OC GDDR6X 384Bit NVIDIA Ekran Kartı 
</option>
      <option value="ASUS TUF GeForce RTX 4080 GAMING 16GB GDDR6X 256Bit NVIDIA Ekran Kartı 
">ASUS TUF GeForce RTX 4080 GAMING 16GB GDDR6X 256Bit NVIDIA Ekran Kartı 
</option>
      <option value="PNY QUADRO A4500 20GB GDDR6 7168 Cuda 320Bit Ekran Kartı 
">PNY QUADRO A4500 20GB GDDR6 7168 Cuda 320Bit Ekran Kartı 
</option>
      <option value="ZOTAC GeForce RTX 4070 Ti AMP EXTREME AIRO 12GB GDDR6X 192Bit NVIDIA Ekran Kartı 
">ZOTAC GeForce RTX 4070 Ti AMP EXTREME AIRO 12GB GDDR6X 192Bit NVIDIA Ekran Kartı 
</option>
      <option value="PNY QUADRO RTX 4000 8GB 2304 Cuda 256Bit Ekran Kartı 
">PNY QUADRO RTX 4000 8GB 2304 Cuda 256Bit Ekran Kartı 
</option>
      <option value="ZOTAC GeForce RTX 4070 Ti TRINITY OC 12GB GDDR6X 192Bit NVIDIA Ekran Kartı 
">ZOTAC GeForce RTX 4070 Ti TRINITY OC 12GB GDDR6X 192Bit NVIDIA Ekran Kartı 
</option>
    </select><br>

    <label for="secim7">Kasa Seçiniz:</label>
    <select id="select7" name="kasa" class="form-select" aria-label="Default select example">
      <option value=""></option>
      <option value="THERMALTAKE VIEW 91 RGB EDITION XL ATX SÜPER TOWER KASA  
">THERMALTAKE VIEW 91 RGB EDITION XL ATX SÜPER TOWER KASA 
</option>
      <option value="COOLER MASTER HAF 700 EVO 3x120mm ARGB -2x200mm FANLI FULL TOWER SİYAH KASA  
">COOLER MASTER HAF 700 EVO 3x120mm ARGB -2x200mm FANLI FULL TOWER SİYAH KASA 
</option>
      <option value="ASUS ROG STRIX GX601 HELIOS 4x140mm FANLI USB3.1 MidT ATX RGB OYUNCU SİYAH KASA  
">ASUS ROG STRIX GX601 HELIOS 4x140mm FANLI USB3.1 MidT ATX RGB OYUNCU SİYAH KASA 
</option>
      <option value="COOLER MASTER HAF 700 3x120mm-2x200mm ARGB FANLI FULL TOWER SİYAH KASA 
">COOLER MASTER HAF 700 3x120mm-2x200mm ARGB FANLI FULL TOWER SİYAH KASA 
</option>
      <option value="COUGAR BLAZER TEMPER CAMLI USB3.0 MidT ATX GAMING KASA 
">COUGAR BLAZER TEMPER CAMLI USB3.0 MidT ATX GAMING KASA 
</option>
      <option value="COUGAR MX660 MESH RGB 4x120mm RGB FANLI MESH GEX 850W 80PLUS GOLD MidT ATX KASA  
">COUGAR MX660 MESH RGB 4x120mm RGB FANLI MESH GEX 850W 80PLUS GOLD MidT ATX KASA  
</option>
      <option value="COUGAR CONQUER GAMING USB3.0 MidT ATX KASA 
">COUGAR CONQUER GAMING USB3.0 MidT ATX KASA 
</option>
      <option value="RAZER Tomahawk A1 Tempered Glass Siyah MidT ATX Oyuncu Kasası  
">RAZER Tomahawk A1 Tempered Glass Siyah MidT ATX Oyuncu Kasası  
</option>
      <option value="RAZER Tomahawk M1 Tempered Glass Siyah Mini ITX Oyuncu Kasası  
">RAZER Tomahawk M1 Tempered Glass Siyah Mini ITX Oyuncu Kasası  
</option>
      <option value="THERMALTAKE 500 BEYAZ 3X TEMPERED GLASS PENCERELİ GAMING KASA  
">THERMALTAKE 500 BEYAZ 3X TEMPERED GLASS PENCERELİ GAMING KASA 
</option>
    </select><br>

    <label for="secim8">PSU Seçiniz:</label>
    <select id="select8" name="psu" class="form-select" aria-label="Default select example">
      <option value=""></option>
      <option value="THERMALTAKE TOUGHPOWER 1550W 80PLUS TITANIUM FULL MODÜLER GÜÇ KAYNAĞI  
">THERMALTAKE TOUGHPOWER 1550W 80PLUS TITANIUM FULL MODÜLER GÜÇ KAYNAĞI 
</option>
      <option value="THERMALTAKE TOUGHPOWER 1550W 80PLUS TITANIUM FULL MODÜLER GÜÇ KAYNAĞI  
">THERMALTAKE TOUGHPOWER 1550W 80PLUS TITANIUM FULL MODÜLER GÜÇ KAYNAĞI 
</option>
      <option value="THERMALTAKE TOUGHPOWER 1550W 80PLUS TITANIUM FULL MODÜLER GÜÇ KAYNAĞI  
">THERMALTAKE TOUGHPOWER 1550W 80PLUS TITANIUM FULL MODÜLER GÜÇ KAYNAĞI 
</option>
      <option value="ASUS ROG THOR 1200W 80 PLUS PLATINUM AURO SYNC & OLED EKRANLI GÜÇ KAYNAĞI  
">ASUS ROG THOR 1200W 80 PLUS PLATINUM AURO SYNC & OLED EKRANLI GÜÇ KAYNAĞI  
</option>
      <option value="ASUS ROG THOR 1200W 80 PLUS PLATINUM AURO SYNC & OLED EKRANLI GÜÇ KAYNAĞI  
">ASUS ROG THOR 1200W 80 PLUS PLATINUM AURO SYNC & OLED EKRANLI GÜÇ KAYNAĞI  
</option>
      <option value="ASUS ROG THOR 1200W 80 PLUS PLATINUM AURO SYNC & OLED EKRANLI GÜÇ KAYNAĞI  
">ASUS ROG THOR 1200W 80 PLUS PLATINUM AURO SYNC & OLED EKRANLI GÜÇ KAYNAĞI  
</option>
      <option value="RAZER Katana 850W 80Plus Platınum ARGB Full Modüler Güç Kaynağı  
">RAZER Katana 850W 80Plus Platınum ARGB Full Modüler Güç Kaynağı  
</option>
      <option value="RAZER Katana 850W 80Plus Platınum ARGB Full Modüler Güç Kaynağı  
">RAZER Katana 850W 80Plus Platınum ARGB Full Modüler Güç Kaynağı  
</option>
      <option value="THERMALTAKE TOUGHPOWER GF3 1350W GOLD 80PLUS FULL MODÜLLER GÜÇ KAYNAĞI 
">THERMALTAKE TOUGHPOWER GF3 1350W GOLD 80PLUS FULL MODÜLLER GÜÇ KAYNAĞI 
</option>
      <option value="THERMALTAKE TOUGHPOWER GF3 1350W GOLD 80PLUS FULL MODÜLLER GÜÇ KAYNAĞI 
">THERMALTAKE TOUGHPOWER GF3 1350W GOLD 80PLUS FULL MODÜLLER GÜÇ KAYNAĞI 
</option>
    </select><br>

    <label for="secim9">Soğutucu Seçiniz:</label>
    <select id="select9" name="sogutucu" class="form-select" aria-label="Default select example">
      <option value=""></option>
      <option value="MSI MPG CORELIQUID K240 2x120mm ARGB FANLI SIVI SOĞUTMA SİSTEMİ">MSI MPG CORELIQUID K240 2x120mm ARGB FANLI SIVI SOĞUTMA SİSTEMİ</option>
      <option value=" THERMALTAKE Floe Ultra 240 RGB LCD Ekranlı Pompa, 2x120mm RGB fanlı Sıvı Soğutma">  THERMALTAKE Floe Ultra 240 RGB LCD Ekranlı Pompa, 2x120mm RGB fanlı Sıvı Soğutma</option>
      <option value="ASUS ROG RYUO 120 RGB 1x120mm FANLI SIVI SOĞUTUCU">ASUS ROG RYUO 120 RGB 1x120mm FANLI SIVI SOĞUTUCU</option>
      <option value=" THERMALTAKE Toughliquid 360 3x120mm Toughfanlı ARGB Sıvı Soğutucu"> THERMALTAKE Toughliquid 360 3x120mm Toughfanlı ARGB Sıvı Soğutucu</option>
      <option value=" EVGA CLC 280mm (2x140mm FANLI) RGB LED SIVI SOĞUTMA SİSTEMİ"> EVGA CLC 280mm (2x140mm FANLI) RGB LED SIVI SOĞUTMA SİSTEMİ</option>
      <option value="COUGAR HELOR 360 3x120mm ARGB FANLI İŞLEMCİ SIVI SOĞUTUCU">COUGAR HELOR 360 3x120mm ARGB FANLI İŞLEMCİ SIVI SOĞUTUCU</option>
      <option value="THERMALTAKE TH360 ARGB Fanllı 360mm Intel/AMD4 Serisi Uyumlu Sıvı Soğutma Sistemi">THERMALTAKE TH360 ARGB Fanllı 360mm Intel/AMD4 Serisi Uyumlu Sıvı Soğutma Sistemi</option>
      <option value="MSI MAG CoreLiquid C240 ARGB 240 mm Intel(1700p)-AMD Uyumlu Sıvı Soğutucu  
">MSI MAG CoreLiquid C240 ARGB 240 mm Intel(1700p)-AMD Uyumlu Sıvı Soğutucu  
</option>
      <option value="COUGAR HELOR 240 2x120mm ARGB FANLI İŞLEMCİ SIVI SOĞUTUCU  
">COUGAR HELOR 240 2x120mm ARGB FANLI İŞLEMCİ SIVI SOĞUTUCU  
</option>
      <option value="EVGA CLC 240mm (2x120mm FANLI) RGB LED SIVI SOĞUTMA SİSTEMİ  
">EVGA CLC 240mm (2x120mm FANLI) RGB LED SIVI SOĞUTMA SİSTEMİ  
</option>
    </select><br>

    <button type="submit" class="btn btn-primary"onclick="checkSelect()" style="margin-bottom: 20px; margin-left: 40%;">Sipariş Ver</button>
    
  </form>

</div>
<div class="bosdiv"></div>

</body>
</html>
<script>
function checkSelect() {
  var selectBox = document.getElementById("mySelect");
  var selectedValue = selectBox.options[selectBox.selectedIndex].value;
  if (selectedValue == "") {
    alert("Lütfen bir seçenek belirleyin!");
  } else {
  }
}
</script>
<script>
function confirmSubmit() {
  var result = confirm("Bu işlemi gerçekleştirmek istediğinize emin misiniz?");
  if (result) {
    alert("Siparişiniz başarıyla oluşturuldu!");
    return true;
  } else {
    return false;
  }
}
</script>
<script type="text/javascript">
const select1 = document.getElementById("select1");
const select2 = document.getElementById("select2");
const select3 = document.getElementById("select3");
const select4 = document.getElementById("select4");
const select5 = document.getElementById("select5");
const select6 = document.getElementById("select6");
const select7 = document.getElementById("select7");
const select8 = document.getElementById("select8");
const select9 = document.getElementById("select9");

select2.disabled = true;
select3.disabled = true;
select4.disabled = true;
select5.disabled = true;
select6.disabled = true;
select7.disabled = true;
select8.disabled = true;
select9.disabled = true;


select1.addEventListener("change", function() {
  if (select1.value !== "") {
    select2.disabled = false;
    select3.disabled = true;
    select4.disabled = true;
    select5.disabled = true;
    select6.disabled = true;
    select7.disabled = true;
    select8.disabled = true;
    select9.disabled = true;

  } else {
    select2.disabled = true;
    select3.disabled = true;
    select4.disabled = true;
    select5.disabled = true;
    select6.disabled = true;
    select7.disabled = true;
    select8.disabled = true;
    select9.disabled = true;
    select2.selectedIndex = 0;
    select3.selectedIndex = 0;
    select4.selectedIndex = 0;
    select5.selectedIndex = 0;
    select6.selectedIndex = 0;
    select7.selectedIndex = 0;
    select8.selectedIndex = 0;
    select9.selectedIndex = 0;
  }
});

select2.addEventListener("change", function() {
  if (select2.value !== "") {
    select3.disabled = false;
    select4.disabled = true;
    select5.disabled = true;
    select6.disabled = true;
    select7.disabled = true;
    select8.disabled = true;
    select9.disabled = true;
  } else {
    select3.disabled = true;
    select4.disabled = true;
    select5.disabled = true;
    select6.disabled = true;
    select7.disabled = true;
    select8.disabled = true;
    select9.disabled = true;
    select2.selectedIndex = 0;
    select3.selectedIndex = 0;
    select4.selectedIndex = 0;
    select5.selectedIndex = 0;
    select6.selectedIndex = 0;
    select7.selectedIndex = 0;
    select8.selectedIndex = 0;
    select9.selectedIndex = 0;
  }
});

select3.addEventListener("change", function() {
  if (select3.value !== "") {
    select4.disabled = false;
    select5.disabled = true;
    select6.disabled = true;
    select7.disabled = true;
    select8.disabled = true;
    select9.disabled = true;
  } else {
    select3.disabled = true;
    select4.disabled = true;
    select5.disabled = true;
    select6.disabled = true;
    select7.disabled = true;
    select8.disabled = true;
    select9.disabled = true;
    select2.selectedIndex = 0;
    select3.selectedIndex = 0;
    select4.selectedIndex = 0;
    select5.selectedIndex = 0;
    select6.selectedIndex = 0;
    select7.selectedIndex = 0;
    select8.selectedIndex = 0;
    select9.selectedIndex = 0;
  }
});

select4.addEventListener("change", function() {
  if (select3.value !== "") {
    select5.disabled = false;
    select6.disabled = true;
    select7.disabled = true;
    select8.disabled = true;
    select9.disabled = true;
  } else {
    select3.disabled = true;
    select4.disabled = true;
    select5.disabled = true;
    select6.disabled = true;
    select7.disabled = true;
    select8.disabled = true;
    select9.disabled = true;
    select2.selectedIndex = 0;
    select3.selectedIndex = 0;
    select4.selectedIndex = 0;
    select5.selectedIndex = 0;
    select6.selectedIndex = 0;
    select7.selectedIndex = 0;
    select8.selectedIndex = 0;
    select9.selectedIndex = 0;
  }
});

select5.addEventListener("change", function() {
  if (select3.value !== "") {
    select6.disabled = false;
    select7.disabled = true;
    select8.disabled = true;
    select9.disabled = true;
  } else {
    select3.disabled = true;
    select4.disabled = true;
    select5.disabled = true;
    select6.disabled = true;
    select7.disabled = true;
    select8.disabled = true;
    select9.disabled = true;
    select2.selectedIndex = 0;
    select3.selectedIndex = 0;
    select4.selectedIndex = 0;
    select5.selectedIndex = 0;
    select6.selectedIndex = 0;
    select7.selectedIndex = 0;
    select8.selectedIndex = 0;
    select9.selectedIndex = 0;
  }
});

select6.addEventListener("change", function() {
  if (select3.value !== "") {
    select7.disabled = false;
    select8.disabled = true;
    select9.disabled = true;
  } else {
    select3.disabled = true;
    select4.disabled = true;
    select5.disabled = true;
    select6.disabled = true;
    select7.disabled = true;
    select8.disabled = true;
    select9.disabled = true;
    select2.selectedIndex = 0;
    select3.selectedIndex = 0;
    select4.selectedIndex = 0;
    select5.selectedIndex = 0;
    select6.selectedIndex = 0;
    select7.selectedIndex = 0;
    select8.selectedIndex = 0;
    select9.selectedIndex = 0;
  }
});

select7.addEventListener("change", function() {
  if (select3.value !== "") {
    select8.disabled = false;
    select9.disabled = true;
  } else {
    select3.disabled = true;
    select4.disabled = true;
    select5.disabled = true;
    select6.disabled = true;
    select7.disabled = true;
    select8.disabled = true;
    select9.disabled = true;
    select2.selectedIndex = 0;
    select3.selectedIndex = 0;
    select4.selectedIndex = 0;
    select5.selectedIndex = 0;
    select6.selectedIndex = 0;
    select7.selectedIndex = 0;
    select8.selectedIndex = 0;
    select9.selectedIndex = 0;
  }
});

select8.addEventListener("change", function() {
  if (select3.value !== "") {
    select9.disabled = false;
  } else {
    select3.disabled = true;
    select4.disabled = true;
    select5.disabled = true;
    select6.disabled = true;
    select7.disabled = true;
    select8.disabled = true;
    select9.disabled = true;
    select2.selectedIndex = 0;
    select3.selectedIndex = 0;
    select4.selectedIndex = 0;
    select5.selectedIndex = 0;
    select6.selectedIndex = 0;
    select7.selectedIndex = 0;
    select8.selectedIndex = 0;
    select9.selectedIndex = 0;
  }
});
</script>
<!DOCTYPE html>
<html>
<head>
    <title>Tugas Akhir Praktikum DKP</title>
    <link rel="stylesheet" href="styleweb.css">
<head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="http://localhost/Tugas%20Akhir%20PDKP/menu.php">Aquarium Store</a></div>
            <div class="menu">
                <ul>
                    <li><a href="http://localhost/Tugas%20Akhir%20PDKP/menu.php#home">Home</a></li>
                    <li><a href="http://localhost/Tugas%20Akhir%20PDKP/menu.php#lihatikan">Lihat ikan</a></li>
                    <li><a href="http://localhost/Tugas%20Akhir%20PDKP/menu.php#pesanan">Pesanan</a></li>
                    <li><a href="http://localhost/Tugas%20Akhir%20PDKP/menu.php#kontak">Kontak</a></li>
                </ul>
            </div>
    </nav>
    <h1>
    <?php
        class JenisIkan{
            private $ikan;
            private $harga;
            
 
            public function __construct($ikan, $harga){
                $this->ikan = $ikan;
                $this->harga = $harga;
            }
    
            public function setikan($ikan2){
                $this->ikan = $ikan2;
            }
        
            public function setharga($harga2){
                $this->harga = $harga2;
            }
        
            public function getikan(){
                return $this->ikan;
            }
        
            public function getharga(){
                return $this->harga;
            }
        }
 
    $list = new JenisIkan("Ikan Cupang", "Rp 1.000");
    echo $list->getikan() ." seharga ". $list->getharga() ."<br>";

    $list->setikan("Ikan Guppy"); 
    $list->setharga("Rp 1.500");
    echo $list->getikan() . " seharga ". $list->getharga() ."<br>";

    $list->setikan("Ikan Mas Koki"); 
    $list->setharga("Rp 10.000");
    echo $list->getikan() . " seharga ". $list->getharga() ."<br>";

    $list->setikan("Ikan Koi"); 
    $list->setharga("Rp 20.000");
    echo $list->getikan() . " seharga ". $list->getharga() ."<br>";

    $list->setikan("Ikan Discus"); 
    $list->setharga("Rp 75.000");
    echo $list->getikan() . " seharga ". $list->getharga() ."<br>";

    $list->setikan("Ikan Arwana"); 
    $list->setharga("Rp 200.000");
    echo $list->getikan() . " seharga ". $list->getharga() ."<br><br>";
    ?>
    </h1>
</body>
</html>

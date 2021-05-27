<!DOCTYPE html>
<html>
<head>
    <title>Tugas Akhir Praktikum DKP</title>
<head>

<body>
    <caption>Aquarium Store</caption><hr>
    <form action="menu.php" method="get">
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
    $list->setharga("Rp 75.500");
    echo $list->getikan() . " seharga ". $list->getharga() ."<br>";

    $list->setikan("Ikan Arwana"); 
    $list->setharga("Rp 200.000");
    echo $list->getikan() . " seharga ". $list->getharga() ."<br><br>";
    ?>
    <input type="submit" name="Kembali" value="Kembali">
    </form>
</body>
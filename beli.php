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
    <br>
    <form action="hasil.php" method="post">  
                Nama:
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama">
                <?php
                    if(isset($_GET['errnama'])) {
                        $err1 = $_GET['errnama'];
                        echo $err1;
                    }
                ?>
                    <br><br>
                Alamat:
                <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat">
                <?php
                    if(isset($_GET['erralamat'])) {
                        $err2 = $_GET['erralamat'];
                        echo $err2;
                    }
                ?>
                    <br><br>
                    <label for="saldo">Total Saldo :</label>
                    <input type="number" name="saldo" id="saldo" placeholder="Masukkan Saldo">
                    <?php
                    if(isset($_GET['errsaldo'])) {
                        $err3 = $_GET['errsaldo'];
                        echo $err3;
                    }
                ?>
                    <br><br>
                    <label for="jk">Jenis Kelamin :</label>
                        <Select name="jk" id="jk">
                        <option value='pria'>Pria</option>
                        <option value='wanita'>Wanita</option>
                        </Select><br><br>
                    <label for="pesanan">Pesanan Anda :</label>
                        <Select name="pesanan" id="pesanan">
                        <option value='Ikan Cupang'>Ikan Cupang - Rp 1.000</option>
                        <option value='Ikan Guppy'>Ikan Guppy - Rp 1.500</option>
                        <option value='Ikan Mas Koki'>Ikan Mas Koki - Rp 10.000</option>
                        <option value='Ikan Koi'>Ikan Koi - Rp 20.000</option>
                        <option value='Ikan Discus'>Ikan Discus - Rp 75.000</option>
                        <option value='Ikan Arwana'>Ikan Arwana - Rp 200.000</option>
                        </Select><br><br>
                    Jumlah :
                    <input type="number" name="jumlah" placeholder="Masukkan Jumlah">
                        <?php 
                            if(isset($_GET["errjumlah"])) {
                                $err4 = $_GET["errjumlah"];
                                echo $err4;
                            }
                        ?>
                        <br><br>
        <input type="submit" name="Pesan" value="Pesan sekarang">
        <input type="reset" value="Pesan ulang">
    </form>
</body>
</html>

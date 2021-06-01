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
        <?php 
            session_start();
            $nama=$_POST['nama']; 
            $alamat=$_POST['alamat']; 
            $jk = $_POST['jk']; 
            $saldo=$_POST['saldo'];
            $pesanan=$_POST['pesanan']; 
            $jumlah=$_POST['jumlah'];

            if (empty($nama)) {
                header("location:beli.php?errnama= * Nama belum di isi");
            }
            elseif (empty($alamat)) {
                header("location:beli.php?erralamat= * Alamat belum di isi");
            }
            elseif (empty($saldo)) {
                header("location:beli.php?errsaldo= * Saldo belum di isi");
            }
            elseif (empty($jumlah)) {
                header("location:beli.php?errjumlah= * Jumlah belum di isi");
            }
            else {

            }
        ?>

        <table border="1">
            <tr>
                <th colspan="2">Bukti pembelian</th>
            </tr>
            <tr>
                <td>Saldo Awal</td>
                <td><?php echo $saldo; ?></td>
            </tr>
            <tr>
                <td>Pesanan</td>
                <td><?php echo $pesanan; ?></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><?php echo $jumlah; ?></td>
            </tr>
            <tr>
                <td>Sisa Saldo</td>
                <td><?php
        if(empty($jumlah && $saldo)){
            echo "Mohon diisi dengan benar";
        }
        else{
            //function
            function hasil($saldo, $harga, $jumlah){
                return $saldo - $harga * $jumlah;
            }

            //harga pesanan
            if($pesanan == 'Ikan Cupang'){
                $harga = 1000;
            }
            elseif($pesanan == 'Ikan Guppy'){
                $harga = 1500;
            }
            elseif($pesanan == 'Ikan Mas Koki'){
                $harga = 10000;
            }
            elseif($pesanan == 'Ikan Koi'){
                $harga = 20000;
            }
            elseif($pesanan == 'Ikan Discus'){
                $harga = 75000;
            }
            else{
                $harga = 200000;
            }
            $hasil = hasil($saldo, $harga, $jumlah);
            echo $hasil;
        }
        ?></td>
        </table> <br>
        <?php
            if($saldo<=0){
                echo "Saldo kurang, pemesanan gagal.";
                }
                elseif($jumlah<=0){
                    echo "Maaf, Anda belum memasukkan jumlah.";
                }
                elseif($hasil<0){
                    echo "Maaf uang Anda kurang, pemesanan gagal.";
                }
                else{
                    if(empty($nama && $alamat)){
                        echo "Pengiriman gagal, mohon nama dan alamat diisi dengan lengkap.";
                    }
                    else{
                        if($jk == 'pria')
                        {
                        $welcome = 'Terima kasih telah melakukan pemesanan, mas '.$nama; 
                        }
                        else 
                        {
                        $welcome = 'Terima kasih telah melakukan pemesanan, mbak '.$nama;
                        }             
                        echo $welcome.". ";
                        echo "Pesanan akan dikirim ke ".$alamat.".";
                    }
                }
        ?>
<br><br>

<form action="beli.php">
    <input type="submit" name="Pesan" value="Pesan lagi">
</form>
</body>
</html>

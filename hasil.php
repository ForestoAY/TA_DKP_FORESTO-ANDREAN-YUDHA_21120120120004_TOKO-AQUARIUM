<!DOCTYPE html>
<html>
<head>
    <title>Tugas Akhir Praktikum DKP</title>
<head>
    
<body>
<?php $nama=$_GET['nama']; $alamat=$_GET['alamat']; ?>

<table border="1">
    <tr>
        <th colspan="2">Bukti pembelian</th>
    </tr>
    <tr>
        <td>Saldo Awal</td>
        <td><?php echo $saldo=$_GET['saldo']; ?></td>
    </tr>
    <tr>
        <td>Pesanan</td>
        <td><?php echo $pesanan=$_GET['pesanan']; ?></td>
    </tr>
    <tr>
        <td>Jumlah</td>
        <td><?php echo $jumlah=$_GET['jumlah']; ?></td>
    </tr>
    <tr>
        <td>Saldo Akhir</td>
        <td><?php
        //pengkondisian apabila kosong
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
                $jk = $_GET['jk'];
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
</br>

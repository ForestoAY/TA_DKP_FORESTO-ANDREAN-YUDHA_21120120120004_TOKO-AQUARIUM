<!DOCTYPE html>
<html>
<head>
    <title>Tugas Akhir Praktikum DKP</title>
<head>

<body>
    <caption>Aquarium Store</caption><hr>
    <form action="hasil.php" method="get">  
        <label for="nama">Nama:</label>
            <input name="nama" >
            </br></br>
            <label for="alamat">Alamat :</label>
            <input name="alamat">
            <br><br>
        <tr>
        <td>Total Saldo : </td>
        <td><input type="number" name="saldo"></td>
        <br><br>
        </tr>
        <label for="jk">Jenis Kelamin :</label></td>
            <Select name="jk" id="jk">
            <option value='pria'>Pria</option>
            <option value='wanita'>Wanita</option>
            </Select><br><br>
        <tr>
            <td><label for="pesanan">Pesanan Anda :</label>
            <Select name="pesanan" id="pesanan">
            <option value='Ikan Cupang'>Ikan Cupang - Rp 1.000</option>
            <option value='Ikan Guppy'>Ikan Guppy - Rp 1.500</option>
            <option value='Ikan Mas Koki'>Ikan Mas Koki - Rp 10.000</option>
            <option value='Ikan Koi'>Ikan Koi - Rp 20.000</option>
            <option value='Ikan Discus'>Ikan Discus - Rp 75.000</option>
            <option value='Ikan Arwana'>Ikan Arwana - Rp 200.000</option>
            </Select><br><br></td>
        </tr>
        <tr>
            <td>Jumlah : </td><input type="number" name="jumlah"></tr><br><br>
        <input type="submit" name="Pesan">
        <input type="reset" value="Pesan ulang"></tr>
    </form>
    <br>
    <form action="menu.php" method="get">
        <input type="submit" name="Kembali" value="Kembali">
    </form>
</body>

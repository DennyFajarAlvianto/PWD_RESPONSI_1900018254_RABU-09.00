<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-devide-width, initial-scale=1">
    <title>WarungSaya</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <h1><a href="dasboard.php">WarungSaya</a></h1>
            <ul>
                <li><a href="dasboard.php">Dasboard</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="data-produk.php">Data Produk</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </header>

    <div class="section">
        <div class="container">
            <h3>Edit Data Barang</h3>
<?php
    include_once("koneksi.php");

    if(isset($_POST['update']))
    { 
        $kodebarang = $_POST['kodebarang'];
        $namabarang = $_POST['namabarang'];
        $jumlah = $_POST['jumlah'];
        $harga = $_POST['harga'];

        $result = mysqli_query($con, "UPDATE barang SET namabarang='$namabarang', jumlah='$jumlah', harga='$harga WHERE kodebarang='$kodebarang'");
        header("Location: data-produk.php");
    }
?>
<?php
    $kodebarang = $_GET['kodebarang'];
    $result = mysqli_query($con, "SELECT * FROM barang WHERE kodebarang='$kodebarang'");
        while($r = mysqli_fetch_array($result)){
            $kodebarang = $r['kodebarang'];
            $namabarang = $r['namabarang'];
            $jumlah = $r['jumlah'];
            $harga = $r['harga'];
        }
?>
            <div class="box">
        <form name="update_barang" method="POST" action="edit-data.php">
        <table border="0">
        <tr> 
            <td><input class="input-control" type="text" name="namabarang" value="<?php echo $namabarang;?>"></td>
        </tr>
        <tr> 
            <td><input class="input-control" type="text" name="jumlah" value="<?php echo $jumlah;?>"></td>
        </tr>
        <tr> 
            <td><input class="input-control" type="text" name="harga" value="<?php echo $harga;?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="kodebarang" value="<?php echo $_GET['kodebarang'];?>"></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
        </table>
        </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <small>Copyright &copy; 2021 - WarungSaya</small>
        </div>
    </footer>
</body>
</html>
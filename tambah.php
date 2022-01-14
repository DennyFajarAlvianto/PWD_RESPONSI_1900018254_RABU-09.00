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
            <h3>Tambah Data Barang</h3> 
            <div class="box">
                        <a href="data-produk.php">Go to Home</a>
            <br/><br/>
        <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
        <tr> 
            <td>Kode Barang</td>
            <td><input type="text" name="kodebarang" class="input-control"></td>
        </tr>
        <tr> 
            <td>Nama Barang</td>
            <td><input type="text" name="namabarang" class="input-control"></td>
        </tr>
        <tr> 
            <td>Jumlah Barang</td>
            <td><input type="text" name="jumlah" class="input-control"></td>
        </tr>
        <tr> 
            <td>Harga Barang</td>
            <td><input type="text" name="harga" class="input-control"></td>
        </tr>
        <tr> 
            <td></td>
            <td><input type="submit" name="Submit" value="Tambah"></td>
        </tr>
        </table>
        </form>
            <?php
            if(isset($_POST['Submit'])) {
                $kodebarang = $_POST['kodebarang'];
                $namabarang = $_POST['namabarang'];
                $jumlah = $_POST['jumlah'];
                $harga = $_POST['harga'];

            include_once("koneksi.php");
            $result = mysqli_query($con, "INSERT INTO barang(kodebarang,namabarang,jumlah,harga) VALUES('$kodebarang','$namabarang', '$jumlah','$harga')");
            echo "Data berhasil disimpan. <a href='data-produk.php'>View Users</a>";
            }
            ?>
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
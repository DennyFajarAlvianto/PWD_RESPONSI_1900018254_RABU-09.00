<?php
    include_once("koneksi.php");

    $result = mysqli_query($con, "SELECT * FROM barang ");
?>
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
            <h1><a href="dasboard.php">Tokoku</a></h1>
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
            <h3>Tampilan Data</h3> 
            <div class="box"><center>
                <form action="" method="get">
                    <input type="text" name="cari" class="input-control1">
                    <input type="submit" value="Cari" class="input-control2">
                </form>
                <?php
                    if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    echo "<b>Hasil pencarian : ".$cari."</b>";
                        }
                ?></center><br>
                <button class="btn-succes"><a href="tambah.php">Tambah Data Baru</a></button>
                <button class="btn-warning"><a href="lap_toko.php">Cetak</a></button>
                <button class="btn-secondary"><a href="data_xml.php">XML</a></button>
                <button class="btn-secondary"><a href="data_json.php">JSON</a></button>
                <button class="btn-secondary"><a href="aksesdatabarang.php">Web Service</a></button><br><br>
                <table border="1" width='100%' cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Harga Barang</th>
                    <th>Aksi</th>
                </tr>

                <?php if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $sql="SELECT * FROM barang where namabarang like'%".$cari."%'";
                    $result = mysqli_query($con,$sql);
                    }else{
                    $sql="SELECT * FROM barang";
                    $result = mysqli_query($con,$sql);
                    }
                    $no = 1;
                    while($r = mysqli_fetch_array($result)){
                ?>

                <tr>
                    <center>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $r['kodebarang']; ?></td>
                    <td><?php echo $r['namabarang']; ?></td>
                    <td><?php echo $r['jumlah']; ?></td>
                    <td><?php echo $r['harga']; ?></td>
                    <td><a href='edit-data.php?kodebarang=<?php echo $r['kodebarang'];?>'>Edit</a> || <a href='hapus-data.php?kodebarang=<?php echo $r['kodebarang'];?>'>Hapus</a></td>
                    </center>
                </tr>
                <?php } ?>
                </table><br><br>
            </div>
        </div>
    </div>
     <footer>
        <div class="container">
            <small>Copyright &copy; 2021 - Tokoku</small>
        </div>
    </footer> 
</body>
</html>
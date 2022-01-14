<?php
    //untuk mengkoneksikan database pada koneksi.php yang sudah ada syntak untuk terhubung dengan sql
    include "koneksi.php";
    //memodifikasi header HTTP. Kode yang Anda posting menetapkan header Content-Type, yang penting untuk memberi tahu browser dan klien lain jenis file yang Anda layani.
    header('Content-Type: text/xml');
    $query = "SELECT * FROM barang";
    $hasil = mysqli_query($con,$query);
    $jumField = mysqli_num_fields($hasil);
    echo "<?xml version='1.0'?>";
    echo "<data>";
    while ($data = mysqli_fetch_array($hasil)){
        echo "<barang>";
        echo"<kodebarang>",$data['kodebarang'],"</kodebarang>";
        echo"<namabarang>",$data['namabarang'],"</namabarang>";
        echo"<jumlah>",$data['jumlah'],"</jumlah>";
        echo"<harga>",$data['harga'],"</harga>";
        echo "</barang>";
    }
    echo "</data>";
?>
<?php
    //untuk mengkoneksikan database pada koneksi.php yang sudah ada syntak untuk terhubung dengan sql
    include "koneksi.php";
    //membuat variabel sql untuk menampung data dari sintak sql seperti select untuk mencari data, * pengambilan semua data, pada tabel mahasiswa serta order by nim untuk mengurutkan nim
    $sql="select * from barang order by kodebarang";
    //variabel hasil yang terdapat syntak mysqli yang berisikan con dan query, disini con untuk menghubungkan database pada file koneksi.php dan sql untuk pencarian pada tabel mahasiswa
    $tampil = mysqli_query($con,$sql);
    /// Melakukan percabangan if yang di dalamnya terdapat fungsi mysqli_num_rows() untuk mengetahui berapa jumlah baris di dalam tabel database
    if (mysqli_num_rows($tampil) > 0) {
        //pemberian nomer dari angka 1
        $no=1;
        //variabel response untuk membuat array kosong
        $response = array();
        //data disini untuk memberi label sebelum array
        $response["data"] = array();
        // Melakukan perulangan while yang berisikan variabel $r dan terdapat fungsi mysqli_fetch_array() yang digunakan untuk mengambil baris dan kolom pada $tampil
        while ($r = mysqli_fetch_array($tampil)) {
            // Menampilkan data nim, nama, jenis kelamin, alamat, dan tanggal lahir dengan menggunakan variabel baru h dan r untuk menampilkan data yang sudah ditampung dari variabel tampil
            $h['kodebarang'] = $r['kodebarang'];
            $h['namabarang'] = $r['namabarang'];
            $h['harga'] = $r['harga'];
            $h['jumlah'] = $r['jumlah'];
            array_push($response["data"], $h);
        }
        echo json_encode($response);
        // Fungsi json_encode() digunakan untuk menyandikan nilai ke format JSON.
    }
    //percabangan else
    else {
        $response["message"]="tidak ada data";
        echo json_encode($response);
        // Fungsi json_encode() digunakan untuk menyandikan nilai ke format JSON
    }
?>
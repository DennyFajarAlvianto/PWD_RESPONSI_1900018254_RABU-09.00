<?php
    //variabel url yang berisi alamat web getdata_mhs
    $url = "http://localhost/UKPWD/getdatabarang.php";
    // create curl resource pada variabel url
    $client = curl_init($url);
    //mengembalikan transfer data dalam bentuk string
    curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
    //berisi string keluaran dari variabel client
    $response = curl_exec($client);
    //untuk memecahkan kode atau mengubah objek JSON menjadi objek PHP
    $result = json_decode($response);
    //untuk melakukan perulangan dari $result/menampilkan data dibawah sesuai urutan
    foreach ($result as $r) {
        echo "<p>";
        //menampilkan nim
        echo "Kode Barang : " . $r->kodebarang . "<br />";
        //menampilkan nama
        echo "Nama Barang : " . $r->namabarang . "<br />";
        //menampilkan jkel
        echo "Jumlah : " . $r->jumlah . "<br />";
        //menampilkan alamat
        echo "Harga : " . $r->harga . "<br />";
        echo "</p>";
    }
?>
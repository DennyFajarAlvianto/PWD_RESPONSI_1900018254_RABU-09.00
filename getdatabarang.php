<?php
	//untuk menyertakan sebuah file koneksi.php kedalam file PHP lainnya dan memastikan file yang disertakan tersebut hanya dieksekusi sekali saja
    require_once "koneksi.php";
    //query untuk mencari data pada tabel mahasiswa di database
    $sql = "select * from barang";
    //Untuk mengirimkan perintah query yang terdiri dari dua parameter yaitu: con yang berada pada koneksi.php yang berguna untuk menghubungkan database, dan sql untuk mencari data kita yang berada pada database
    $query = mysqli_query($con,$sql);
    //untuk menghasilkan baris data menjadi pecahan array
    while ($row = mysqli_fetch_assoc($query)) {
    	//menampilkan dari variabel row
        $data[] = $row;
    }
    //mengirimkan data yang bertipe json ke browser
    header('content-type: application/json');
    // fungsi yang mengubah format data Array menjadi JSON dari variabel data
    echo json_encode($data);
    //untuk menutup/menghentikan koneksi database 
    mysqli_close($con);
?>
<?php
    // memanggil/menyertakan file fpdf.php yang berada pada folder fpdf 
    require('fpdf/fpdf.php');
    // intance object dan memberikan pengaturan halaman PDF seperti ukuran kertas Letter, orientasi Lanscape, dan satuan ukuran kertas
    $pdf = new FPDF('l','mm','A5');
    // membuat halaman baru
    $pdf->AddPage();
    // untuk setting jenis font yang akan digunakan seperti jenis font, ukuran huruf dan blod(huruf tebal)
    $pdf->SetFont('Arial','B',16);
    // mencetak string dengan ketentuan lebar dan tinggi, serta posisi huruf di tengah/center
    $pdf->Cell(190,7,'TOKO WARUNG SAYA',0,1,'C');
    // untuk setting jenis font yang akan digunakan seperti jenis font, ukuran huruf dan blod(huruf tebal)
    $pdf->SetFont('Arial','B',12);
    // mencetak string dengan ketentuan lebar dan tinggi, serta posisi huruf di tengah/center
    $pdf->Cell(190,7,'DAFTAR BARANG-BARANG PADA WARUNG SAYA',0,1,'C');
    // Memberikan space kebawah agar tidak terlalu rapat
    $pdf->Cell(10,7,'',0,1);
    // untuk setting jenis font yang akan digunakan seperti jenis font, ukuran huruf dan blod(huruf tebal)
    $pdf->SetFont('Arial','B',10);
    // mencetak string dengan ketentuan lebar dan tinggi, serta menambahkan border
    $pdf->Cell(40,6,'KODE BARANG',1,0);
    // mencetak string dengan ketentuan lebar dan tinggi, serta menambahkan border
    $pdf->Cell(50,6,'NAMA BARANG',1,0);
    // mencetak string dengan ketentuan lebar dan tinggi, serta menambahkan border
    $pdf->Cell(35,6,'JUMLAH BARANG',1,0);
    // mencetak string dengan ketentuan lebar dan tinggi, serta menambahkan border
    $pdf->Cell(50,6,'HARGA',1,1);
    // untuk setting jenis font yang akan digunakan seperti jenis font, ukuran huruf
    $pdf->SetFont('Arial','',10);
    // memanggil/menyertakan file koneksi.php ke dalam program lap_mhs.php
    include 'koneksi.php';
    //Query dibawah digunakan untuk memanggil/mengambil data pada tabel mahasiswa, khs dan matakuliah yang berada pada database dan fungsi con untuk menghubungkan kita ke database akademikkk
    $mahasiswa = mysqli_query($con, "SELECT * FROM barang");
    // melakukan perulangan while untuk memberikan isian sesuai dengan header sebelumnya
    // urutan harus disesuaikan dengan tampilan data pada header atau tabel
    while ($row = mysqli_fetch_array($mahasiswa)){
    //memanggil atribut nim mahasiswa pada tabel mahasiswa dengan ketentuan lebar dan tinggi, serta menambahkan border
    $pdf->Cell(40,6,$row['kodebarang'],1,0);
    //memanggil atribut nama mahasiswa pada tabel mahasiswa dengan ketentuan lebar dan tinggi, serta menambahkan border
    $pdf->Cell(50,6,$row['namabarang'],1,0);
    //memanggil atribut kodemk pada tabel matkul denganketentuan lebar dan tinggi, serta menambahkan border
    $pdf->Cell(35,6,$row['jumlah'],1,0);
    //memanggil atribut nama matkul pada tabel matkul dengan ketentuan lebar dan tinggi, serta menambahkan border
    $pdf->Cell(50,6,$row['harga'],1,1);
    }
    //digunakan untuk menampilkan atau meng-generate halaman PDF, PDF akan ditampilkan saat kita mengunjungi halamannya.
    $pdf->Output();
?>
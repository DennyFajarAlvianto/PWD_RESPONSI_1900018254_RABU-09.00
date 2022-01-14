<?php
    include "koneksi.php";
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $sql = "INSERT INTO users(id_user, password, nama, alamat, email) VALUES ('$id_user', '$pass', '$nama', '$alamat', '$email')";
    $query=mysqli_query($con, $sql);
    mysqli_close($con);
    header('location:login.php');
?>
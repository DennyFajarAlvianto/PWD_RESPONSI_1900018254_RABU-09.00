<?php
    session_start(); 
    //untuk memulai eksekusi session pada server dan kemudian menyimpannya pada browser
    session_destroy();
    //session yang telah di buat dan di inisialisasi akan di destroy atau di hancurkan,
    //Nah pada tahanpan inilah yang sering digunakan untuk script logout pada web
    header('location:login.php');;
?>
<?php
    session_start();
    include 'koneksi.php';
    $query = mysqli_query($con, "SELECT * FROM users WHERE id_user = '".$_SESSION['iduser']."' ");
    $d = mysqli_fetch_object($query);
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
            <h3>PROFIL</h3> 
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $d->nama ?>" class="input-control" required>
                    <input type="text" name="id_user" placeholder="Username" value="<?php echo $d->id_user ?>" class="input-control" required>
                    <input type="text" name="alamat" placeholder="Alamat" value="<?php echo $d->alamat ?>" class="input-control" required>
                    <input type="text" name="email" placeholder="Email" value="<?php echo $d->email ?>" class="input-control" required>
<!--                     <input type="submit" name="submit" value="Ubah Profil" class="btn"> -->
                </form>
<!--                <?php 
                    if (isset($_POST['submit'])) {
                        # code...
                    }
                 ?> --> 
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
<?php
    session_start();
    include "koneksi.php";

    $id_user = $_POST['id_user'];
    $pass=md5($_POST['password']);
    $sql="SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'";

    if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {
        $login=mysqli_query($con, $sql);
        $ketemu=mysqli_num_rows($login);
        $r= mysqli_fetch_array($login);

    if ($ketemu > 0){
        $_SESSION['iduser'] = $r['id_user'];
        $_SESSION['passuser'] = $r['password'];
        header("location:dasboard.php?pesan=berhasil");
        echo "<script>
                alert('Anda Berhasil Login');
            </script>";
    }else{
    	header("location:login.php?pesan=gagal");
    }
    mysqli_close($con);
    }else {
    	header("location:login.php?pesan=gagal1");
    }
?>
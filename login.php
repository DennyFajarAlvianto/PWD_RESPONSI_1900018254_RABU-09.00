<html>
<head>
    <title>Login here</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <br/>
    <div class="signin">
    <form method="POST" action="cekdata.php">
    <table border="1px" bgcolor="white">
    <center>
    <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "Login gagal! username dan password salah!";
            }
            else if($_GET['pesan'] == "gagal1"){
                echo "Login gagal! Captcha tidak sesuai!";
            }
            else if($_GET['pesan'] == "berhasil"){
                echo "Anda telah berhasil Login";
            }
            else if($_GET['pesan'] == "logout"){
                echo "Anda telah berhasil logout";
            }

        }
    ?>
    </table>
    </center>
		<p>Username</p>
		<input type="text" name="id_user" placeholder="Enter Username">
		<p>Password</p>
		<input type="Password" name="password" placeholder="Enter Password">
        <p>Captcha<br><center><img src='captcha.php' /></center></p>
        <input name='captcha_code' type='text'>
		<br><br><input type="submit" value="LOGIN"><br><br>
        <div id="container"><center>
            Belum Punya Akun?<a href="register.php" style=" margin-right: 0px; font-size: 13px; font-family: Tahoma, Geneva, sans-serif;">&nbsp;klik disini</a><br><br>
            </center>
        </div>
    </form>
    </div>
</body>
</html>
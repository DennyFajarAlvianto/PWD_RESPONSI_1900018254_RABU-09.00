<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
	<div class="register">
	<form method=post action=input_user.php>
		<h1>REGISTER</h1>
        <table>
            <tr>
                <td>
                    Username
                </td>
                <td> : </td>
                <td> 
                    <input name='id_user' type='text' placeholder="Masukkan Username">
                </td>
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td> : </td>
                <td>
                    <input name='password' type='password' placeholder="Masukkan Password">
                </td>
            </tr>
            <tr>
                <td>
                    Nama Lengkap
                </td>
                <td> : </td>
                <td> 
                    <input name='nama' type='text' id="nama" placeholder="Masukkan Nama Lengkap">
                </td>
            </tr>
            <tr>
                <td>
                    Alamat 
                </td>
                <td> : </td>
                <td>
                    <input name='alamat' type='text' placeholder="Masukkan Alamat">
                </td>
            </tr>
            <tr>
                <td>
                    Email 
                </td>
                <td> : </td>
                <td>
                    <input name='email' type='text' placeholder="Masukkan Email">
                </td>
            </tr>
        </table><br><br>
        <center>
            <input type='submit' value='Daftar'><br><br>
            <a href="login.php">Kembali Ke Halaman Login</a>
        </center>
    </form>
    </div>
</body>
</html>
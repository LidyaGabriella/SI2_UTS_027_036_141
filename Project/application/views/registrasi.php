<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="img/icon.png" type="image/icon" >
    <title>Halaman Registrasi</title>
</head>

<style>
    .tambah{
        background: #16c79a; 
    color : white; 
    font-size :20px;
    }

    table{
        font-size: 18px;
        margin-top: 140px;
    }
    h1{
        font-size: 40px;
    }

    .tabel td{
        padding: 10px;
    }

    input,select{
        border: 1px solid rgb(163, 163, 163);
    }
    a{
        text-decoration: none;
        color: #16c79a;
        font-size: 20px;
    }
    ul{
        display: flex;
    }
    li{
        list-style: none;
        margin: 0 50px;
    }
</style>

<body>
<div class="container" style="margin-top:20px">
    <div class="col-lg-12 text-center mb-5" style="margin-top: 2%;">
		<h1>Registrasi</h1>
    </div>
</div>
<div class="container" style="margin-top: -30px;">
    <div class="row">
        <div class="col-md-6" >
            <img src="img/2.png" alt="" width="600px" height="500px">
        </div>
        <div class="col-md-6">
            <form action="daftar.php" method="POST">
                <table class="tabel" style="margin-top : 100px; margin-left:30px;">
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><input type="text" name="username" placeholder="Username" required></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" placeholder="Nama" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="email" name="email" placeholder="Email" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="password" name="pass1" placeholder="Password" required></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td>:</td>
                        <td><input type="password" name="pass2" placeholder="Confirm Password" required></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td></td>
                        <td><input type="submit" name="buatakun" value="Buat Akun" class="btn btn-primary">
                        <input type="reset" name="hapus" value="Reset" class="btn btn-warning"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <ul>
                <li><a href="daftar_admin.php">Daftar sebagai Pengurus Desa? Klik di sini ya.</a></li>
                <li><a href="login.php">Masuk sebagai Penduduk Desa? Klik di sini ya.</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" href="img/icon.png" type="image/icon" >
    <title>Form Login</title>
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
    .field{
        border: none;        
        outline: none;
        background: none;
        color: grey;
        width: 80%;
        font-size: 18px;
        float: left;
        margin: 0 10px;
        margin-left: 0;
        border-bottom: 2px solid #16c79a;
    }
    a{
        text-decoration: none;
        color: #16c79a;
    }
</style>
<body>
    <div class="container" style="margin-top:20px">
        <div class="col-lg-12 text-center mb-5" style="margin-top: 2%;">
            <h1>Login</h1>
        </div>
    </div>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-7" >
                <img src="img/3.png" alt="" width="600px" height="500px">
            </div>
            <div class="col-md-5">
                <form action="aksi_login.php" method="POST">
                    <table class="tabel" style="margin-top : 40px;">
                        <tr>  
                            <td><i class="fa fa-user"></i></td>
                            <td><input type="text" name="username" placeholder="Masukkan Username" class="field"></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-lock"></i></td>
                            <td><input type="password" name="pass" placeholder="Masukkan Password" class="field"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="masuk" value="Masuk" class="btn btn-primary">
                            <input type="reset" name="hapus" value="Reset" class="btn btn-warning"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="login_admin.php">Masuk sebagai Admin? Klik di sini.</a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="daftar.php">Belum punya akun? Daftar di sini.</a></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
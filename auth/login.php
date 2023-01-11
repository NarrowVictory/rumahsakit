<?php
require_once "../_config/proseslogin.php";

if(isset($_SESSION['user'])){
    echo "<script>window.location = '".base_url()."';</script>";
}else{
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Rumah Sakit</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('_assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url('_assets/web.png')?>">
</head>

<body>

    <div id="wrapper">
        <div class="container">
            <div align="center" style="margin-top: 200px;">
                
                <?php
                if(isset($_POST['login']) && !empty($_POST['login'])){
                $user = trim(mysqli_real_escape_string($conn, $_POST['user']));
                $pass = sha1(trim(mysqli_real_escape_string($conn, $_POST['password'])));
                $sql_query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$user' AND
                password = '$pass'") or die (mysqli_error($conn));
                
                $jumlah = mysqli_num_rows($sql_query);
                if($jumlah > 0){
                    echo "Berhasil login";
                    $_SESSION['user'] = $user;
                    echo "<script>window.location = '".base_url()."';</script>";
                }else{ ?>
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <div class="alert alert-danger alert-dismissable" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;
                            </a>
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <strong>Login Gagal</strong> Username/Password Salah
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
            ?>

                <form action="" method="POST" class="navbar-form">
                    <!-- Username -->
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="user" class="form-control" placeholder="Username" required="" autofocus="">
                    </div>
                    <!-- END Username -->

                    <!-- Password -->
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="text" name="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <!-- END Password -->

                    <!-- BTN Login -->
                    <div class="input-group">
                        <input type="submit" name='login' class="btn btn-primary" value="login" />
                    </div>
                    <!-- END BTN Login -->
                </form>
            </div>
        </div>
    </div>
    
</body>
<script type="text/javascript" src="<?=base_url('_assets/js/jquery.js')?>"></script>
<script type="text/javascript" src="<?=base_url('_assets/js/bootstrap.min.js')?>"></script>
</html>

<?php
}
?>

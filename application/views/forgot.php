<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SISM-DWM</title>

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="<?= base_url();?>assets/login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url();?>assets/login/css/style.css">
    <script src="<?= base_url() ?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="icon" href="<?= base_url() ?>assets/image/logo.jpg" />
</head>

<body>
    <?php if ($this->session->flashdata('input')){ ?>
    <script>
    swal({
        title: "Berhasil Terdaftar!",
        text: "Silahkan Anda Login!",
        icon: "success"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('eror')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('loggin_err')){ ?>
    <script>
    swal({
        title: "Session Anda Berakhir!",
        text: "Silahkan Login Ulang!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('loggin_err_no_user')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Password dan Username Yang Anda Masukan Salah!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?= base_url();?>assets/image/logo_desa.jpeg" alt="sing up image"></figure>
                        <a href="<?= base_url()?>Register/index" class="signup-image-link">Buat akun !</a>
                        <a href="<?= base_url()?>ForgotPassword/index" class="signup-image-link">Lupa Password ?</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Masukan Email</h2>
                        <form method="POST" class="register-form" id="login-form" action="<?= base_url()?>ForgotPassword/proses">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="Masukan Email" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Send Settings Request" />
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?= base_url();?>assets/login/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url();?>assets/login/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
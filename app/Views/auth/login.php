<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login akun kamu</title>
    <link rel="stylesheet" href="<?= base_url('assets/modules/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/native/css/login.css') ?>">
</head>
<body class="login-bg">
    <div class="container d-block justify-content-center align-items-center">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="login-card-box p-5 mx-auto">
                            <h4 class="login-card-title">
                                <span class="green">Login</span> to your account
                            </h4>
                            <form action="<?= base_url('login') ?>" method="post" class="mt-5">
                                <?php if (session()->getFlashdata('error')): ?>
                                    <div class="form-group">
                                        <div class="alert alert-danger">
                                            <?= session()->getFlashdata('error') ?>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <div class="form-group mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Masukan username" name="username" value="<?= old('username') ?>" autofocus>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="text" class="form-control" id="password" placeholder="Masukan password" name="password">
                                </div>
                                <div class="form-group mb-3">
                                    <button class="mt-4">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                    <p class="text-center">Belum punya akun? <a href="<?= base_url('register') ?>">Daftar disini</a></p>
                
            </div>
        </div>

    </div>
</body>
</html>
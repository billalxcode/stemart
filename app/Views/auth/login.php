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
    <div class="container d-flex justify-content-center">
        <div class="login-card-box p-5">
            <h4 class="login-card-title">
                <span class="green">Login</span> to your account
            </h4>
            <form action="" method="post" class="mt-5">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Masukan username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" placeholder="Masukan password">
                </div>
                <div class="mb-3">
                    <button class="mt-4">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
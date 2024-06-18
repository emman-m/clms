<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body class="bg-aesthetic">
    <main class="d-flex flex-nowrap justify-content-center align-items-center min-vh-100 min-vw-100 p-4">
        <div class="card login-panel">
            <div class="card-body">
                <div class="mb-2 d-flex justify-content-center">
                    <img src="assets/img/logo.png" alt="Logo">
                </div>
                <div class="my-2 mb-4 text-center">
                    <h5>Sign in your Account</h5>
                </div>
                
                <div class="my-2">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="">
                </div>

                <div class="my-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="">
                </div>

                <div class="my-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="remember">
                        <label class="form-check-label" for="remember">
                            Remember me
                        </label>
                    </div>
                </div>

                <div class="mt-4 d-grid">
                    <button class="btn btn-warning">Submit</button>
                </div>

                <div class="mt-2 float-end">
                    <a href="#" class="btn btn-link">Forgot Password?</a>
                </div>
            </div>

        </div>
    </main>

</body>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="dist/jquery/jquery-3.7.1.min.js"></script>

</html>
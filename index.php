<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="assets/css/root.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="bg-aesthetic">
    <main class="d-flex flex-nowrap min-vh-100 min-vw-100">
        <div class="side-nav-bg d-flex flex-column flex-shrink-0 p-3 m-4 rounded-5" style="width: 235px;">

            <div class="user-box d-flex align-items-center border border-1 rounded-3 p-2 mt-5 mb-4">
                <div class="d-inline me-3">
                    <img class="avatar avatar-lg shadow" src="assets/img/maria.jpg" alt="Maria">
                </div>
                <div class="d-inline">Hello, Maria</div>
            </div>
            <!-- <hr> -->
            <ul class="nav flex-column mb-auto">
                <li class="my-2 nav-pills">
                    <a href="#" class="nav-link meets" aria-current="page">
                        <div class="d-inline me-2">
                            <i class="fa-solid fa-video"></i>
                        </div>
                        JOIN
                    </a>
                </li>
                <li class="nav-li my-2 rounded-3 border">
                    <a href="#" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-li my-2 act rounded-3 border">
                    <a href="#" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Orders
                    </a>
                </li>
                <li class="nav-li my-2 rounded-3 border">
                    <a href="#" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Products
                    </a>
                </li>
                <li class="nav-li my-2 rounded-3 border">
                    <a href="#" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Customers
                    </a>
                </li>
            </ul>

        </div>
    </main>

</body>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="dist/jquery/jquery-3.7.1.min.js"></script>

</html>
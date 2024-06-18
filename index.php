<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="bg-aesthetic">
    <main class="flex-nowrap min-vh-100 min-w-100" style="display: flex;">
        <!-- Sidebar -->
        <div class="side-navigation side-nav-bg d-flex flex-column flex-shrink-0 my-4 rounded-5">
            <div class="my-2 d-flex justify-content-center">
                <i id="hide-sidebar" class="btn fa-solid fa-circle-chevron-left" style="font-size:2rem;"></i>
                <i id="show-sidebar" class="btn fa-solid fa-circle-chevron-right" style="font-size:2rem;display: none;"></i>
            </div>
            <div class="user-box d-flex align-items-center border border-1 rounded-3 p-2 mt-2 mb-4">
                <div class="d-inline avatar-box">
                    <img class="avatar avatar-lg shadow" src="assets/img/maria.jpg" alt="Maria">
                </div>
                <div class="user-label">Hello, Juana</div>
            </div>
            <!-- <hr> -->
            <ul class="nav flex-column mb-auto">
                <li class="my-2 nav-pills">
                    <a href="#" class="nav-link meets">
                        <div class="row">
                            <div class="icon-panel col-3 d-flex align-items-center">
                                <img src="assets/img/video.webp" alt="meets" class="menu-icon">
                            </div>
                            <div class="col menu-label">
                                JOIN
                            </div>
                        </div>
                    </a>
                </li>
                <li class="act nav-li my-2 rounded-3 border">
                    <a href="#" class="nav-link link-body-emphasis">
                        <div class="row">
                            <div class="icon-panel col-3 d-flex align-items-center">
                                <img src="assets/img/home.png" alt="home" srcset="" class="menu-icon">
                            </div>
                            <div class="col menu-label">
                                Home
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-li my-2 rounded-3 border">
                    <a href="#" class="nav-link link-body-emphasis">
                        <div class="row">
                            <div class="icon-panel col-3 d-flex align-items-center">
                                <img src="assets/img/applicants.png" alt="home" srcset="" class="menu-icon">
                            </div>
                            <div class="col menu-label">
                                Applicants
                            </div>
                        </div>
                    </a>
                </li>
                <li class=" nav-li my-2 rounded-3 border">
                    <a href="#" class="nav-link link-body-emphasis">
                        <div class="row">
                            <div class="icon-panel col-3 d-flex align-items-center">
                                <img src="assets/img/accounts.png" alt="accounts" srcset="" class="menu-icon">
                            </div>
                            <div class="col menu-label">
                                Accounts
                            </div>
                        </div>
                    </a>
                </li>
                <li class=" nav-li my-2 rounded-3 border">
                    <a href="#" class="nav-link link-body-emphasis">
                        <div class="row">
                            <div class="icon-panel col-3 d-flex align-items-center">
                                <img src="assets/img/people.png" alt="people" srcset="" class="menu-icon">
                            </div>
                            <div class="col menu-label">
                                People
                            </div>
                        </div>
                    </a>
                </li>
                <li class=" nav-li my-2 rounded-3 border">
                    <a href="#" class="nav-link link-body-emphasis">
                        <div class="row">
                            <div class="icon-panel col-3 d-flex align-items-center">
                                <img src="assets/img/learning materials.webp" alt="home" srcset="" class="menu-icon">
                            </div>
                            <div class="col menu-label">
                                Learning Materials
                            </div>
                        </div>
                    </a>
                </li>
                <li class=" nav-li my-2 rounded-3 border">
                    <a href="#" class="nav-link link-body-emphasis">
                        <div class="row">
                            <div class="icon-panel col-3 d-flex align-items-center">
                                <img src="assets/img/my-course.png" alt="my-course" srcset="" class="menu-icon">
                            </div>
                            <div class="col menu-label">
                                My Courses
                            </div>
                        </div>
                    </a>
                </li>
                <li class=" nav-li my-2 rounded-3 border">
                    <a href="#" class="nav-link link-body-emphasis">
                        <div class="row">
                            <div class="icon-panel col-3 d-flex align-items-center">
                                <img src="assets/img/assignments.png" alt="assignments" srcset="" class="menu-icon">
                            </div>
                            <div class="col menu-label">
                                Assignments
                            </div>
                        </div>
                    </a>
                </li>
                <li class=" nav-li my-2 rounded-3 border">
                    <a href="#" class="nav-link link-body-emphasis">
                        <div class="row">
                            <div class="icon-panel col-3 d-flex align-items-center">
                                <img src="assets/img/grades.png" alt="assignments" srcset="" class="menu-icon">
                            </div>
                            <div class="col menu-label">
                                Grades
                            </div>
                        </div>
                    </a>
                </li>
                <li class=" nav-li my-2 rounded-3 border">
                    <a href="#" class="nav-link link-body-emphasis">
                        <div class="row">
                            <div class="icon-panel col-3 d-flex align-items-center">
                                <img src="assets/img/feedback.png" alt="star" srcset="" class="menu-icon">
                            </div>
                            <div class="col menu-label">
                                Feedbacks
                            </div>
                        </div>
                    </a>
                </li>
                <li class=" nav-li my-2 rounded-3 border">
                    <a href="#" class="nav-link link-body-emphasis">
                        <div class="row">
                            <div class="icon-panel col-3 d-flex align-items-center">
                                <img src="assets/img/star.png" alt="star" srcset="" class="menu-icon">
                            </div>
                            <div class="col menu-label">
                                Rate Us
                            </div>
                        </div>
                    </a>
                </li>
                <li class=" nav-li my-2 rounded-3 border">
                    <a href="#" class="nav-link link-body-emphasis">
                        <div class="row">
                            <div class="icon-panel col-3 d-flex align-items-center">
                                <img src="assets/img/settings.png" alt="star" srcset="" class="menu-icon">
                            </div>
                            <div class="col menu-label">
                                Settings
                            </div>
                        </div>
                    </a>
                </li>
            </ul>

        </div>

        <!-- Main Content -->
        <div class="w-100 h-100 my-4 mx-3">
            <div class="top-nav d-flex justify-content-end mb-3">
                <img class="notif-icon me-4" src="assets/img/notification.png" style="width: 25px;" alt="notif" srcset="">
            </div>
            <div class="main-panel h-100 rounded p-3">
                Hello
            </div>

        </div>

    </main>

</body>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="dist/jquery/jquery-3.7.1.min.js"></script>

<script>
    $('#hide-sidebar').on('click', () => {
        $('.side-navigation')
            .removeClass('side-navigation')
            .removeClass('side-navigation-hide')
            .addClass('side-navigation-hide');
        $('#show-sidebar').show();
        $('#hide-sidebar').hide();
    });
    $('#show-sidebar').on('click', () => {
        $('.side-navigation-hide')
            .removeClass('side-navigation-hide')
            .removeClass('side-navigation')
            .addClass('side-navigation');
        $('#hide-sidebar').show();
        $('#show-sidebar').hide();
    })
</script>

</html>
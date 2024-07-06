<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="assets/fonts/poppins/stylesheet.css">
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
            <div class="row">
                <div class="col-md-12 col-lg-8 mb-3">
                    <!-- Home Banner -->
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="card p-3 bg-clms-red-1 text-white bg-home-banner">
                                <div class="row">
                                    <div class="col-sm-10 col-md-8 text-center">
                                        <h3>Welcome, Juana!</h3>
                                        <blockquote class="blockquote">
                                            <p><i>Get Orgranized with your courses and keep going to reach your
                                                    goal.</i></p>
                                        </blockquote>

                                    </div>
                                    <div class="col"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card p-3">
                                <div class="d-flex flex-row justify-content-between">
                                    <h4>Your Courses</h4>

                                    <a href="#" class="btn btn-link btn-xs">View all</a>
                                </div>
                                <div class="row align-items-center">

                                    <div class="col-md-12 col-lg-4 my-3">
                                        <div class="course-box bg-clms-pink d-flex flex-row align-items-center justify-content-center">
                                            <div class="course-icon">
                                                <img class="course-icon-img" src="assets/img/marketing_course.png" alt="marketing">
                                            </div>
                                            <div class="course-details">
                                                <div class="course-title">Marketing 101</div>
                                                <div class="course-subtitle">Modules (3 out of 10)</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-4 my-3">
                                        <div class="course-box bg-clms-blue d-flex flex-row align-items-center justify-content-center">
                                            <div class="course-icon">
                                                <img class="course-icon-img" src="assets/img/branding.png" alt="marketing">
                                            </div>
                                            <div class="course-details">
                                                <div class="course-title">Branding 101</div>
                                                <div class="course-subtitle">Locked</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-4 my-2">
                                        <div class="course-box bg-clms-green d-flex flex-row align-items-center justify-content-center">
                                            <div class="course-icon">
                                                <img class="course-icon-img" src="assets/img/content_creation_course.png" alt="marketing">
                                            </div>
                                            <div class="course-details">
                                                <div class="course-title">Content Creation 101</div>
                                                <div class="course-subtitle">Locked</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right aside -->
                <div class="col-md-4 col-lg-4 " style="width: 200px!important;flex: 1 0 0%;">
                    <div class="card p-3">
                        <div class="d-flex flex-row justify-content-between">
                            <h4>Progress</h4>
                            <a href="#" class="btn btn-link btn-xs">View all</a>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-8">
                                Marketting 101
                            </div>
                            <div class="col-md-4">
                                <div class="progress progress-bar-striped" role="progressbar" aria-label="Example with label" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 50%">50%</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                Branding 101
                            </div>
                            <div class="col-md-4">
                                <div class="progress progress-bar-striped" role="progressbar" aria-label="Example with label" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 50%">50%</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                Content Creation 101
                            </div>
                            <div class="col-md-4">
                                <div class="progress progress-bar-striped" role="progressbar" aria-label="Example with label" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 50%">50%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3 mt-3">
                        <div class=" d-flex flex-row justify-content-between">
                            <h4>Upcoming</h4>
                            <a href="#" class="btn btn-link btn-xs">View all</a>
                        </div>
                        <div class="row p-3">
                            <!-- Module -->
                            <div class="card p-3 my-2">

                                <div class="row">
                                    <div class="col fw-bold">
                                        Understanding wireframe
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <i class="fa-regular fa-clock"></i>
                                        05/30/24
                                    </div>
                                    <div class="col">
                                        <span class="badge text-bg-info">Comming soon</span>
                                    </div>
                                </div>

                            </div>
                            <!-- Module -->
                            <div class="card p-3 my-2">

                                <div class="row">
                                    <div class="col fw-bold">
                                        Understanding wireframe
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <i class="fa-regular fa-clock"></i>
                                        05/30/24
                                    </div>
                                    <div class="col">
                                        <span class="badge text-bg-info">Comming soon</span>
                                    </div>
                                </div>

                            </div>
                            <!-- Module -->
                            <div class="card p-3 my-2">

                                <div class="row">
                                    <div class="col fw-bold">
                                        Understanding wireframe
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <i class="fa-regular fa-clock"></i>
                                        05/30/24
                                    </div>
                                    <div class="col">
                                        <span class="badge text-bg-info">Comming soon</span>
                                    </div>
                                </div>

                            </div>
                            <!-- Module -->
                            <div class="card p-3 my-2">

                                <div class="row">
                                    <div class="col fw-bold">
                                        Understanding wireframe
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <i class="fa-regular fa-clock"></i>
                                        05/30/24
                                    </div>
                                    <div class="col">
                                        <span class="badge text-bg-info">Comming soon</span>
                                    </div>
                                </div>

                            </div>
                            <!-- Module -->
                            <div class="card p-3 my-2">

                                <div class="row">
                                    <div class="col fw-bold">
                                        Understanding wireframe
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <i class="fa-regular fa-clock"></i>
                                        05/30/24
                                    </div>
                                    <div class="col">
                                        <span class="badge text-bg-info">Comming soon</span>
                                    </div>
                                </div>

                            </div>
                            <!-- Module -->
                            <div class="card p-3 my-2">

                                <div class="row">
                                    <div class="col fw-bold">
                                        Understanding wireframe
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <i class="fa-regular fa-clock"></i>
                                        05/30/24
                                    </div>
                                    <div class="col">
                                        <span class="badge text-bg-info">Comming soon</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
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
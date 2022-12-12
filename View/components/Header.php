<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../View/assets/img/logo01.png" rel="icon">
    <link href="../View/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">


    <!-- Vendor CSS Files -->
    <link href="../View/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../View/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../View/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../View/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../View/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../View/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../View/assets/css/style.css" rel="stylesheet">
    

    <!-- =======================================================
  * Template Name: Green - v4.8.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">phongkham@gmail.com</a>
                <i class="bi bi-phone-fill phone-icon"></i> 19001175
            </div>
            <div class="social-links d-none d-md-block">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <!-- <h1 class="logo me-auto"><a href="index.html">BỆNH VIỆN 175</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.php" class="logo me-auto"><img src="../View/assets/img/logo.png" alt="" class="img-fluid">
                <!-- <h6>Healthy Care</h6> -->
            </a>
            <nav id="navbar" class="navbar navbar-expand-lg">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php"></ion-icon>
                            <ion-icon name="home-outline"></ion-icon>&ensp;Trang chủ
                        </a></li>
                    <li class="dropdown"><a href="#"><span>Giới thiệu</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Về chúng tôi</a></li>
                            <li><a href="#">Đội ngũ lãnh đạo</a></li>
                            <li><a href="#">Đội ngũ bác sĩ</a></li>
                            <li><a href="#">Khối cơ quan hành chính</a></li>
                            <li><a href="#">Sơ đồ tổ chức</a></li>
                            <li><a href="#">Cơ sở vật chất</a></li>
                            <li><a href="#">Tại sao chọn chúng tôi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">
                            <span>Dành cho khách hàng</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <?php
                            if (isset($_SESSION['id']) && get_user_by_id($_SESSION['id'])['Role'] == 0) :
                            ?>
                                <li><a href="index.php?act=registe-medical">Đăng ký khám bệnh</a></li>
                                <!-- <li><a href="#">Kết quả xét nghiệm</a></li> -->
                                <li><a href="index.php?act=result-medical">Kết quả khám bệnh</a></li>
                                <li><a href="index.php?act=medical-ex-his">Lịch sử đăng ký khám bệnh</a></li>
                            <?php
                            else :
                                echo "
                                <li><a href='index.php?act=login'>Đăng ký khám bệnh</a></li>
                                <li><a href='index.php?act=login'>Kết quả khám bệnh</a></li>
                                <li><a href='index.php?act=login'>Lịch sử đăng ký khám bệnh</a></li>
                                ";
                            endif;
                            ?>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#">Chuyên khoa</a></li>
                    <li class="dropdown">
                        <a href="#">
                            <span>Hoạt động trọng tâm</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a href="#">Cấp cứu biển đảo-thiên tai-thảm hoạ</a></li>
                            <li><a href="#">Giữ gìn hoà bình liên hợp quốc</a></li>
                            <li><a href="#">Chỉ đạo tuyến</a></li>
                            <li><a href="#">Huấn luyện đào tạo</a></li>
                            <li><a href="#">Nghiên cứu khoa học</a></li>
                            <li><a href="#">Hợp tác quốc tế</a></li>
                        </ul>
                    </li>
                    <!-- <li class="dropdown"><a href="#"><span>Tin tức</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Tin tuyển dụng</a></li>
                            <li class="dropdown">
                                <a href="#">
                                    <span>Bản tin 175</span>
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                                <ul>
                                    <li><a href="#">Bảng tin</a></li>
                                    <li><a href="#">Gương sáng 175</a></li>
                                    <li><a href="#">Vòng tay nhân ái</a></li>
                                    <li><a href="#">Tìm thân nhân</a></li>
                                    <li><a href="#">Góc tri ân</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Tin nội bộ</a></li>
                        </ul>
                    </li> -->
                    <?php
                    if (isset($_SESSION['id']) && get_user_by_id($_SESSION['id'])['Role'] == 0) :
                    ?>
                        <li class="nav-item me-3 me-lg-0 dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php?act=personal-information" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                <ion-icon class='logo' name="person-circle-outline"></ion-icon>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="index.php?act=personal-information">My profile</a></li>
                                <li><a class="dropdown-item" href="index.php?act=logout">Log out</a></li>
                            </ul>
                        <?php
                    else :
                        echo "
                            <li>
                                <a href='index.php?act=login'>
                                    <ion-icon class='logo' name='log-in-outline'></ion-icon>
                                </a>";
                    endif;
                        ?>
                        </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
<?php
session_start();    
require_once('../config/db.php');

$query = 'SELECT  s.predmet, r.name, r.surname, r.photo  FROM spets AS s
INNER JOIN rezume AS r ON
r.`spets_id` = s.`id`;
;
';
$res  = mysqli_query($con,$query);
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ягон чиз </title>
    <!-- google fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand" href="index.html">
                        <span class="w3yellow">C<i class="fab fa-asymmetrik"></i>r </span>Transko
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#about">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#services">Наши плюси</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#Pages" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Drop Down <span class="fa fa-angle-down ms-1"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item pt-2 scroll" href="#counts">Stats</a></li>

                                <li><a class="dropdown-item scroll" href="rezume1.php">Резюме</a></li>
                                <li><a class="dropdown-item scroll" href="#portfolio">Gallery</a></li>
                                <li><a class="dropdown-item scroll" href="#pricing">Pricing</a></li>

                                <li><a class="dropdown-item scroll" href="#blog">Blog Posts</a></li>

                                <li><a class="dropdown-item scroll" href="#testimonials">Testimonials</a></li>
                            </ul>
                        </li>
                        <li class="nav-item me-lg-4">
                            <a class="nav-link scroll" href="logout.php">Вход</a>
                        </li>
                    </ul>
                    <!--/search-right-->
                    <ul class="header-search me-lg-4">
                        <div class="search-right">
                            <form action="#" method="GET" class="search-box">
                                <input type="search" placeholder="Enter Keyword" name="search" required="required" autofocus="">
                                <button type="submit" class="btn"><span class="fas fa-search" aria-hidden="true"></span></button>
                            </form>
                        </div>
                    </ul>
                    <!--//search-right-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//Header-->
    <!--/Banner-Start-->
    <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
                    <h3 class="mb-md-5 mb-4">
                    Профессиональный Учитель в Поиске Работы</h3>
                </div>
            </div>
        </div>
    </div>
    <!--//main-banner-->
    <!--/Client-Section-->
    <section id="about" class="clients">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 pe-lg-5">
                    <div class="title-content text-left">
                        <h6 class="title-subw3hny mb-2"><span>О нас</span></h6>
                        <h3 class="title-w3l">История, Миссия и Команда</h3>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 ps-lg-5 mx-lg-0">
                    <p class="pr-lg-5">Добро пожаловать на наш уникальный ресурс, где преподаватели могут представить свои навыки и опыт, а работодатели могут найти идеального кандидата для своей образовательной организации. Мы стремимся создать пространство, где образование и карьерные возможности встречаются, чтобы вместе двигаться вперед к общей цели - качественному образованию для всех.</p>
                </div>
            </div>

            <div class="car-img mx-0 text-center px-lg-5">
                <img src="assets/images/2.png" alt="" class="img-fluid">
            </div>

        </div>
    </section>
    <!--//client-Section-->
    <!--/About-Section-->
    <section id="about" class="w3labout section-bg">
        <div class="container">
            <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch">
                    <div class="content">
                        <h6 class="title-subw3hny two mb-2"><span>Why Us</span></h6>
                        <h3 class="title-w3l two">Voluptatem dignissimos provident quasi</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                        <a href="about.html" class="btn btn-style btn-primary about-btn mt-3"> Read More</a>
                    </div>
                </div>
                <div class="col-xl-7 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 icon-box">
                                <i class="fas fa-archway"></i>
                                <h4>
                                    Auto
                                    Driveaway</h4>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod.</p>
                            </div>
                            <div class="col-md-6 icon-box">
                                <i class="fas fa-taxi"></i>
                                <h4>
                                    Student
                                    Vehicles</h4>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod.</p>
                            </div>
                            <div class="col-md-6 icon-box">
                                <i class="fas fa-boxes"></i>
                                <h4>
                                    Closed Carrier
                                    Transport</h4>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod.</p>
                            </div>
                            <div class="col-md-6 icon-box">
                                <i class="fas fa-baby-carriage"></i>
                                <h4>
                                    Corporate
                                    Relocation</h4>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <!--//End-content-->
                </div>
            </div>
        </div>
    </section>
    <!--//About-Section-->
    <!--/Counts-Section-->
    <section id="counts" class="w3lcounts">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 w3stats_info counter_grid">
                    <div class="count-box">
                        <i class="fas fa-users"></i>
                        <p class="counter">960</p>
                        <p>Happy Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0 w3stats_info counter_grid">
                    <div class="count-box">
                        <i class="far fa-images"></i>
                        <p class="counter">1560</p>
                        <p>Projects</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 w3stats_info counter_grid">
                    <div class="count-box">
                        <i class="fas fa-headset"></i>
                        <p class="counter">1660</p>
                        <p>Hours Of Support</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 w3stats_info counter_grid">
                    <div class="count-box">
                        <i class="fas fa-user-tie"></i>
                        <p class="counter">860</p>
                        <p>Hard Workers</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--//Counts-Section-->
    <!--/Tab-section-->
    <section id="tabs" class="tabs">
        <div class="container">
            <ul class="nav nav-tabs row d-flex">
                <li class="nav-item col-3">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <i class="fas fa-shield-alt"></i>
                        <h4 class="d-none d-lg-block">Guaranteed Quality</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <i class="fas fa-spinner"></i>
                        <h4 class="d-none d-lg-block">Get There Faster</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <i class="fas fa-hand-holding-usd"></i>
                        <h4 class="d-none d-lg-block">Lowest Pricing</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                        <i class="fas fa-dungeon"></i>
                        <h4 class="d-none d-lg-block">Driveaway Specialists</h4>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row mt-5">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                            <p class="fst-italic mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul class="mt-3">
                                <li><i class="fas fa-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="fas fa-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="fas fa-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo.</li>
                            </ul>
                            <p class="mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center ps-lg-5">
                            <img src="assets/images/g1.jpg" alt="" class="img-fluid radius-image">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-2">
                    <div class="row mt-5">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                            <p class="fst-italic mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul class="mt-3">
                                <li><i class="fas fa-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="fas fa-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="fas fa-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo.</li>
                            </ul>
                            <p class="mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center ps-lg-5">
                            <img src="assets/images/g2.jpg" alt="" class="img-fluid radius-image">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-3">
                    <div class="row mt-5">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
                            <p class="fst-italic mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul class="mt-3">
                                <li><i class="fas fa-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="fas fa-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="fas fa-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo.</li>
                            </ul>
                            <p class="mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>

                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center ps-lg-5">
                            <img src="assets/images/g3.jpg" alt="" class="img-fluid radius-image">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-4">
                    <div class="row mt-5">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                            <p class="fst-italic mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul class="mt-3">
                                <li><i class="fas fa-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="fas fa-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="fas fa-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo.</li>
                            </ul>
                            <p class="mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center ps-lg-5">
                            <img src="assets/images/g5.jpg" alt="" class="img-fluid radius-image">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--//abs-Section -->
    <!--/Services-Section -->
    <section id="services" class="services section-bg w3lpricing">
        <div class="container">
            <div class="section-title">
                <h6 class="title-subw3hny two mb-2"><span>What We Offer</span></h6>
                <h3 class="title-w3l two mb-4">High Quality Services</h3>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fas fa-percent"></span>
                            </div>
                            <div class="info">
                                <h4><a href="#url">Fixed Rates</a></h4>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur ipsum elit. </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fas fa-exchange-alt"></span>
                            </div>
                            <div class="info">
                                <h4><a href="#url">
                                        Reliable Transfers</a></h4>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur ipsum elit. </p>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fas fa-user-friends"></span>
                            </div>
                            <div class="info">
                                <h4><a href="#url">Free Cancellation</a></h4>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur ipsum elit. </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fas fa-car"></span>
                            </div>
                            <div class="info">
                                <h4><a href="#url">
                                        Quality Vehicles</a></h4>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur ipsum elit. </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fas fa-trophy"></span>
                            </div>
                            <div class="info">
                                <h4><a href="#url">

                                        Award winning</a></h4>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur ipsum elit. </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fas fa-headset"></span>
                            </div>
                            <div class="info">
                                <h4><a href="#url">
                                        Online Support 24/7</a></h4>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur ipsum elit. </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="blog" class="w3l-blog section-bg">
        <div class="container">
            <div class="section-title">
                <h6 class="title-subw3hny two mb-2"><span>Latest News</span></h6>
                <h3 class="title-w3l two">Blog Posts</h3>
            </div>
            <?php
     $i=0;
     while($row = mysqli_fetch_assoc($res))
     {
     $i++;    
   ?>
            <div class="row pb-5 w3l-courses">
                <div class="col-md-12 mx-auto pb-lg-5 pb-3">
                    <div class="owl-two owl-carousel owl-theme row">
                        <div class="item col-lg-4 col-md-6 mt-lg-5 mt-4">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="#cardblog" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="<?php echo $row['photo'];?>" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body course-details">
                                    <a href="#cardblog" class="course-desc"><?php echo $row['surname'];?>  <?php echo $row['name'];?>
                                    </a>
                                    <p class="mt-3">Учитель <?php echo $row['predmet'];?> </p>
                                    <div class="blog-bottom-info">

                                        <div class="course-meta">
                                            <div class="meta-item course-lesson">
                                                <span class="fas fa-heart"></span>
                                                <span class="meta-value"> 24 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fas fa-eye"></span>
                                                <span class="meta-value"> 125 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fas fa-calendar-week"></span>
                                                <span class="meta-value"> 13.07.2021 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
        }
        ?>
                
    </section>
    <!--//Team-Section-->
    <!--/Portfolio-Section -->
    <section id="portfolio" class="portfolio w3l-gallery">
        <div class="container">
            <div class="section-title">
                <h6 class="title-subw3hny mb-2"><span>Our Gallery</span></h6>
                <h3 class="title-w3l mb-2"> Recent Deliveries</h3>
            </div>

            <!--/grids-grids-->
            <ul class="gallery_agile mt-4">
                <li>
                    <div class="w3_agile_portfolio_grid">
                        <a href="#">
                            <img src="assets/images/g1.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3><i class="fas fa-search"></i></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="w3_agile_portfolio_grid mt-4">
                         <a href="#">
                            <img src="assets/images/g2.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3><i class="fas fa-search"></i></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="w3_agile_portfolio_grid">
                        <a href="#">
                            <img src="assets/images/g3.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3><i class="fas fa-search"></i></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="w3_agile_portfolio_grid mt-4">
                         <a href="#">
                            <img src="assets/images/g4.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3><i class="fas fa-search"></i></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="w3_agile_portfolio_grid">
                        <a href="#">
                            <img src="assets/images/g5.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3><i class="fas fa-search"></i></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="w3_agile_portfolio_grid mt-4">
                        <a href="#">
                            <img src="assets/images/g6.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3><i class="fas fa-search"></i></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
            <!--//rids-grids-->
        </div>
    </section>
    <!--//Portfolio-Section -->
    <!--/Testimonials/Section-->
    <section id="testimonials" class="w3l-clients-1 testimonials">
        <div class="container">
            <!--/testimonial-grids-->
            <div class="testimonial-row">
                <div id="owl-demo1" class="owl-testimonial owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <div class="test-img">
                                    <img src="assets/images/team1.jpg" class="img-fluid" alt="client-img">
                                </div>
                                <div class="testi-des">
                                    <i class="fas fa-quote-left"></i>
                                    <div class="peopl align-self">
                                        <h3>Dennis wilson</h3>
                                    </div>
                                </div>
                                <blockquote>
                                    Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                    laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                    facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                    voluptate rem ullam dolore nisi est quasi, doloribus tempora.
                                </blockquote>
                                <ul class="social-media-test m-0 mt-4 p-0">
                                    <li><a href="#facebook" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#twitter" class="twitter"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li><a href="#instagram" class="instagram"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//testimonial-grids-->

        </div>
    </section>
    <!--//Testimonials/Section-->
    <!--/Pricing-Section-->
    <section id="pricing" class="w3lpricing section-bg">
        <div class="container">
            <div class="section-title">
                <h6 class="title-subw3hny two mb-2"><span>Our Plans</span></h6>
                <h3 class="title-w3l two mb-2">Pricing Plans</h3>
            </div>
            <div class="row mt-lg-4 mt-2">
                <div class="col-lg-3 col-md-6">
                    <div class="box">
                        <h3>Free Trail</h3>
                        <h4><sup>$</sup>0<span> / Per Day</span></h4>
                        <ul>
                            <li>
                                Air Conditioning</li>
                            <li> Audio input</li>
                            <li> DVD Video System</li>
                            <li>All Wheel drive</li>
                            <li class="na">USB input</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy btn btn-style btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                    <div class="box featured">
                        <h3>Business</h3>
                        <h4><sup>$</sup>49<span> / Per Day</span></h4>
                        <ul>
                            <li>
                                Air Conditioning</li>
                            <li> Audio input</li>
                            <li> DVD Video System</li>
                            <li>All Wheel drive</li>
                            <li class="na">USB input</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy btn btn-style btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="box">
                        <h3>Personal</h3>
                        <h4><sup>$</sup>69<span> / Per Day</span></h4>
                        <ul>
                            <li>
                                Air Conditioning</li>
                            <li> Audio input</li>
                            <li> DVD Video System</li>
                            <li>All Wheel drive</li>
                            <li>USB input</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy btn btn-style btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                    <div class="box">
                        <h3>Travel</h3>
                        <h4><sup>$</sup>99<span> / Per Day</span></h4>
                        <ul>
                            <li>
                                Air Conditioning</li>
                            <li> Audio input</li>
                            <li> DVD Video System</li>
                            <li>All Wheel drive</li>
                            <li class="na">USB input</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy btn btn-style btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--/Pricing-Section-->
    <!--/contact-->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h6 class="title-subw3hny mb-2"><span>Доб.резюме</span></h6>
                <h3 class="title-w3l mb-2">Найди себе, работу мечти!</h3>
                <p class="w3conatact-p mb-4">Мы стремимся сделать процесс поиска работы и найма персонала максимально удобным и эффективным. Присоединяйтесь к нашему сообществу сегодня и дайте вашей карьере или вашему образовательному учреждению тот толчок, который они заслуживают.</p>
            </div>
            <div class="row">
                <div class="col-lg-5 pe-lg-5">
                    <div class="row">
                        <div class="cont-details">
                            <div class="cont-top" data-aos="fade-up"
     data-aos-duration="3000">
                                <div class="cont-left text-center">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Наш адресс</h6>
                                    <p>20мкр StartCoding</p>
                                </div>
                            </div>
                            <div class="cont-top margin-up" data-aos="fade-up"
     data-aos-duration="3000">
                                <div class="cont-left text-center">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Наши контакты</h6>
                                    <p><a href="tel:+1(21) 343 5677">+992(92) 600 7285</a></p>
                                    <p><a href="tel:+1(21) 343 5678">+992(92) 809 9990</a></p>
                                </div>
                            </div>
                            <div class="cont-top margin-up" data-aos="fade-up"
     data-aos-duration="3000">
                                <div class="cont-left text-center">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Наш логин</h6>
                                    <p><a href="mailto:example@mail.com" class="mail">hodievemin9@gmail.com</a></p>
                                    <p><a href="mailto:example@mail2.com" class="mail">vositovravshan9@gmail.com</a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                
            <div class="map-iframe mt-5 pt-lg-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl" width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
    <!--//contact-->
    <!--/footer-->
    <footer id="footer" class="wthree-footerhny">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-contact pe-lg-5">
                        <div class="footer-logo mb-3">
                            <a class="navbar-brand" href="index.html"><span>Car</span> Transko</a>
                        </div>
                        <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at
                            tempufddfel. Lorem ipsum dolor sit amet Semper at elit.</p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="fas fa-angle-right"></i> <a href="#index">Home</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#us">About us</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#serve">Services</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#terms">Terms of service</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#privacy">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="fas fa-angle-right"></i> <a href="#blogs">Blog Posts</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#stats">Stats</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#Plans">Plans</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#Deals">Deals</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#Offers">Offers</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter ps-lg-4">
                        <h4>Join Our Newsletter</h4>
                        <p>Get Updates By Subscribe Our Weekly Newsletter</p>
                        <form action="" class="d-flex" method="post">
                            <input type="email" name="email" placeholder="Enter Your Email" required="">
                            <button type="submit" class="btn btn-primary btn-style">Subscribe</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    <p class="copy-footer-29">© 2021 Car Transko. All rights reserved | Designed by <a href="https://w3layouts.com">W3layouts</a></p>
                </div>

            </div>
            <div class="social-links text-center text-md-end pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <button onclick="topFunction()" id="movetop" title="Go to top" style="display: block;">
            <span class="fa fa-angle-up"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

        </script>
        <!-- //move top -->
    </footer><!-- End Footer -->


    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
   
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });
        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>

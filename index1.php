<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Ягон чиз</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets2/css/style-starter.css">

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body class="sidebar-menu-collapsed">

<?php

if(isset($_POST['save']))
{
    require_once('../config/db.php');
    $fullname="";
    $login="";
    $password="";



    if(isset($_POST['fullname']) && !empty($_POST['fullname'])) $fullname = $_POST['fullname'];
    if(isset($_POST['login']) && !empty ($_POST['login'])) $login = $_POST['login'];
    if(isset($_POST['password']) && !empty ($_POST['password'])) $password = $_POST['password'];

    $query = "INSERT INTO `project`.`users`(`fullname`,`login`,`password`)
    VALUES ('$fullname','$login',md5('$password'));";
    



    
    mysqli_query($con, $query);
   
}
?>




  <div class="se-pre-con"></div>
<section>
  <!-- sidebar menu start -->
  <div class="sidebar-menu sticky-sidebar-menu">

    <!-- logo start -->
    <div class="logo">
      <h1><a href="index.php">Колектив</a></h1>
    </div>

  <!-- if logo is image enable this -->
    <!-- image logo --
    <div class="logo">
      <a href="index.php">
        <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
      </a>
    </div>
    <!-- //image logo -->

    <div class="logo-icon text-center">
      <a href="index.php" title="logo"><img src="assets2/images/logo.png" alt="logo-icon"> </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

      <!-- sidebar nav start -->
      <ul class="nav nav-pills nav-stacked custom-nav">
        <li class="active"><a href="index.php"><i class="fa fa-home"></i><span> Главная</span></a>
        </li>
        <li class="menu-list">
          <a href="#"><i class="fa fa-cogs"></i>
            <span>Elements <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="carousels.php">Carousels</a> </li>
            <li><a href="cards.php">Default cards</a> </li>
            <li><a href="people.php">People cards</a></li>
          </ul>
        </li>
        <li><a href="pricing.php"><i class="fa fa-table"></i> <span>Pricing tables</span></a></li>
        <li><a href="blocks.php"><i class="fa fa-th"></i> <span>Content blocks</span></a></li>
        <li><a href="forms.php"><i class="fa fa-file-text"></i> <span>Доб.резюме</span></a></li>
      </ul>
      <!-- //sidebar nav end -->
      <!-- toggle button start -->
      <a class="toggle-btn">
        <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
        <i class="fa fa-angle-double-right menu-collapsed__right"></i>
      </a>
      <!-- //toggle button end -->
    </div>
  </div>
  <!-- //sidebar menu end -->
  <!-- header-starts -->
  <div class="header sticky-header">

    <!-- notification menu start -->

    <!--notification menu end -->
  </div>
  <!-- //header-ends -->
  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

   
    <div class="welcome-msg pt-3 pb-4">
      <h1>Найди <span class="text-primary">себе</span>, работу мечти!</h1>
      <div class="col-lg-12 mt-5">
        <div class="p-3 card card_border">
          <div class="pl-0 pt-0 card-header chart-grid__header">
            With caption
          </div>

          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active layer">
                <img src="assets2/images/cart.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h3>First slide label</h3>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item layer">
                <img src="assets2/images/template2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Second slide label</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item layer">
                <img src="assets2/images/dashboard.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Third slide label</h3>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
      <section class="people">
        <section class="w3l-team-block">
            <!-- //people cards style 1 -->
            <div class="card card_border mb-5">
                <div class="cards__heading">
                    
                   <h5><i> Добро пожаловать на наш уникальный ресурс, где преподаватели могут представить свои навыки и опыт, а работодатели могут найти идеального кандидата для своей образовательной организации. Мы стремимся создать пространство, где образование и карьерные возможности встречаются, чтобы вместе двигаться вперед к общей цели - качественному образованию для всех.</i></h5>
                   <h5><i>Вы - ключевой элемент образовательной среды, и ваш вклад неоценим. Расскажите нам о себе: вашем образовании, опыте работы, методах преподавания и достижениях. Загрузите ваше резюме и привлеките внимание потенциальных работодателей. Наши рекрутеры и агенты по подбору персонала также активно ищут талантливых преподавателей, чтобы предложить вам самые подходящие вакансии.</i></h5 ><br>
                   <h3>Резюме -<span> учителей которые уже нашли себе работу с нашего сайта</span></h3><br>
                  </div>
            
            </div>
        </section>
        
       


    <!-- //modals -->

  </div>
  <!-- //content -->
</div>
<!-- main content end-->
</section>
  <!--footer section start-->
<footer class="dashboard">
  <p>&copy 2020 Collective. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank"
      class="text-primary">W3layouts.</a></p>
</footer>
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
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
<!-- /move top -->


<script src="assets2/js/jquery-3.3.1.min.js"></script>
<script src="assets2/js/jquery-1.10.2.min.js"></script>

<!-- chart js -->
<script src="assets2/js/Chart.min.js"></script>
<script src="assets2/js/utils.js"></script>
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
<script src="assets2/js/bar.js"></script>
<script src="assets2/js/linechart.js"></script>
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


<script src="assets2/js/jquery.nicescroll.js"></script>
<script src="assets2/js/scripts.js"></script>

<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->

 <!-- loading-gif Js -->
 <script src="assets2/js/modernizr.js"></script>
 <script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>
 <!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="assets2/js/bootstrap.min.js"></script>

</body>

</html>
  
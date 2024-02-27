<?php
    require_once('../config/db.php');
if (isset($_POST['save']))
{
    $photo = $_POST['photo'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $otchestva = $_POST['otchestva'];
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    $telephone = $_POST['telephone'];
    $adress = $_POST['adress'];
    $obrzovanie_id = $_POST['obrzovanie_id'];
    $soli_ogoz = $_POST['soli_ogoz'];
    $soli_itmom = $_POST['soli_itmom'];
    $malumot = $_POST['malumot'];
    $spets_id = $_POST['spets_id'];
    $opit = $_POST['opit'];
    $school_id = $_POST['school_id'];
    $about = $_POST['about'];
    $dop_info = $_POST['dop_info'];
    $dostizhenie = $_POST['dostizhenie'];
    $query = "INSERT INTO rezume (photo,`name`,surname,otchestva,email,birthday,telephone,adress,obrzovanie_id,soli_ogoz,soli_itmom,malumot,spets_id,opit,school_id,about,dop_info,dostizhenie)
    VALUES('$photo','$name','$surname','$otchestva','$email','$birthday','$telephone','$adress','$obrzovanie_id','$soli_ogoz','$soli_itmom','$malumot','$spets_id','$opit','$school_id','$about','$dop_info','$dostizhenie');";
    mysqli_query($con,$query);
    
}
?>
<?php
    require_once('../config/db.php');
    $query = "SELECT id, nom,suroga FROM donishgoho;";
    $res = mysqli_query($con, $query);

    $query2 = "SELECT id, predmet FROM spets;";
    $res2 = mysqli_query($con, $query2);

    $query3 = "SELECT id, nomi_maktab FROM school;";
    $res3 = mysqli_query($con, $query3);
    

?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Доб.резюме</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets2/css/style-starter.css">

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body class="sidebar-menu-collapsed">
<div class="se-pre-con"></div>
<section>
  <!-- sidebar menu start -->
  <div class="sidebar-menu sticky-sidebar-menu">

    <!-- logo start -->
    <div class="logo">
      <h1><a href="index1.php">Collective</a></h1>
    </div>

  <!-- if logo is image enable this -->
    <!-- image logo --
    <div class="logo">
      <a href="index.php">
        <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
      </a>
    </div>
     //image logo -->

    <div class="logo-icon text-center">
      <a href="index.php" title="logo"><img src="assets2/images/logo.png" alt="logo-icon"> </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

      <!-- sidebar nav start -->
      <ul class="nav nav-pills nav-stacked custom-nav">
        <li><a href="index1.php"><i class="fa fa-home"></i><span> Главная</span></a>
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
        <li class="active"><a href="forms.php"><i class="fa fa-file-text"></i> <span>Доб.резюме</span></a></li>
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
        <!-- breadcrumbs -->
      
        <!-- //breadcrumbs -->
        <!-- forms -->
        <section class="forms">
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Доб.резюме <span></span></h3>
                </div>
                <div class="card card_border py-2 mb-4">
                  <div class="card-body">
                      <form action="" method="post">
                      <div class="form-row">
                              <div class="form-group col-md-12">
                                  <label for="photo" class="input__label">Загрузить фото:</label>
                                  <input type="file" name="photo" class="form-control input-style" id="photo" accept="image/*">
                              </div>
                          <div class="form-row">
                              <div class="form-group col-md-12">
                                  <label for="" class="input__label">Имя:</label>
                                  <input type="text" name="name" class="form-control input-style" id=""
                                      placeholder="имя">
                              </div>
                              <div class="form-group col-md-12">
                                  <label for="" class="input__label">отчество:</label>
                                  <input type="text" name="otchestva" class="form-control input-style" id=""
                                      placeholder="отчество">
                              </div>
                          </div>
                          <div class="form-group col-md-12">
                              <label for="" class="input__label">фамилия:</label>
                              <input type="text" name="surname" class="form-control input-style" id=""
                                  placeholder="фамилия">
                          </div>
                          <div class="form-group col-md-12">
                              <label for="" class="input__label">Электроная почта:</label>
                              <input type="text" name="email" class="form-control input-style" id=""
                                  placeholder="электроная почта">
                          </div>
                          <div class="form-group col-md-12">
                              <label for="" class="input__label">дата рождения:</label>
                              <input type="date" name="birthday" class="form-control input-style" id=""
                                  placeholder="">
                          </div>
                          <div class="form-row">
                              <div class="form-group col-md-12">
                                  <label for="" class="input__label">телефон:</label>
                                  <input type="number" name="telephone" class="form-control input-style" id="">
                              </div>
                              <div class="form-group col-md-12">
                              <label for="" class="input__label">адресс:</label>
                              <input type="text" name="adress" class="form-control input-style" id=""
                                  placeholder="адресс">
                          </div>
                          <div class="form-group col-md-12">
                            <input class="form-control" type="search"  name="id" id="">
                                  Оброзование:
                                  <select name="obrzovanie_id" class="form-group"><br>
                                  <?php
                                   while($row = mysqli_fetch_assoc($res))
                                   {
                                       ?>
                                       <option value="<?=$row['id'];?>"class="form-control"><?=$row['nom'];?><?=$row['suroga'];?></option>
                                       <?php
                                   }
                                   ?>
                                   </select>
                              </div>
                              <div class="form-group col-md-12">
                              <label for="" class="input__label">Начало учебы:</label>
                              <input type="date" name="soli_ogoz" class="form-control input-style" id="">
                          </div>
                          <div class="form-group col-md-12">
                              <label for="" class="input__label">Конец учебы:</label>
                              <input type="date" name="soli_itmom" class="form-control input-style" id="">
                          </div>
                          <div>
                          <label for="" class="input__label">Как он окончиль университет:</label>
					               				<select class="form-control" name="malumot">
					               					<option value="Бакалавр">Бакалавр</option>
					               					<option value="Магистратура">Магистратура</option>
					               					<option value="PHD">PHD</option>
					               				</select>
                                 </div>

                                 <div class="form-group col-md-12">
                                  <label for="" class="input__label">его специальность:</label>
                                  <select name="spets_id" class="form-group"><br>
                                  <?php
                                   while($row = mysqli_fetch_assoc($res2))
                                   {
                                       ?>
                                       <option value="<?=$row['id'];?>"class="form-control"><?=$row['predmet'];?></option>
                                       <?php
                                   }
                                   ?>
                                   </select>
                              </div>
					               	</div>
                          <div class="form-group col-md-12">
                              <label for="" class="input__label">Опить:</label>
                              <input type="number" name="opit" class="form-control input-style" id=""
                                  placeholder="опить">
                          </div>
                              <div class="form-group col-md-12">
                                  <label for="" class="input__label">В какой школе предподоваль:</label>
                                  <select name="school_id" class="form-group"><br>
                                  <?php
                                   while($row = mysqli_fetch_assoc($res3))
                                   {
                                       ?>
                                       <option value="<?=$row['id'];?>"class="form-control"><?=$row['nomi_maktab'];?></option>
                                       <?php
                                   }
                                   ?>
                                   </select>
                              </div>
                              <div class="form-group col-md-12">
                              <label for="" class="input__label">О себе:</label>
                              <input type="text" name="about" class="form-control input-style" id=""
                                  placeholder="О себе">
                              </div>
                              <div class="form-group col-md-12">
                              <label for="" class="input__label">доп. инфор.:</label>
                              <input type="text" name="dop_info" class="form-control input-style" id=""
                                  placeholder="информация про себя.">
                              </div>
                              <div class="form-group col-md-12">
                              <label for="" class="input__label">Какое нибудь достижение:</label>
                              <input type="text" name="dostizhenie" class="form-control input-style" id=""
                                  placeholder="Какое нибудь достижение">
                              </div>
                          <input type="submit" name="save" value="Добавить резюме"
                           class="btn btn-outline-info form-control">
                      </form>

                  </div>
              </div>
            </div>
            <h6><i>Мы стремимся сделать процесс поиска работы и найма персонала максимально удобным и эффективным. Присоединяйтесь к нашему сообществу сегодня и дайте вашей карьере или вашему образовательному учреждению тот толчок, который они заслуживают.</i></h6>
            
            <!-- //forms 1 -->

            <!-- forms 2 -->
          
            <!-- //forms 2 -->

            <!-- horizontal forms-->
            <!-- forms 3 -->
 
            <!-- //forms 3 -->
            <!-- //horizontal forms-->

            <!-- supported elements -->
            <!--  -->
       
            <!-- // -->
            <!-- supported elements -->

        </section>
        <!-- //forms -->
        </section>
        <!-- //forms  -->

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
<?php 
session_start();
if (isset($_SESSION['logIn']) &&  $_SESSION['logIn'] =="1" )
{
    header("Location: index1.php");
}
 if (isset($_POST['signIn']))
 {
    require_once('../config/db.php');
    $pass = $_POST['password'];
    $login = $_POST['login'];
    $query = "Select * from users where login='$login' and password=md5('$pass') limit 1;";

    $res = mysqli_query($con,$query);
    if (mysqli_num_rows($res)>0 )
    {
        $_SESSION['logIn'] = "1";
        header("Location: index1.php");
    } else 
    {
        ?>
        <script>
            alert("Логин или пароль недействителен");
        </script>
        <?php
    }

 } 
?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="assets1/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="assets1/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="assets1/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

 <!-- side nav css file -->
 <link href='assets1/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="assets1/js/jquery-1.11.1.min.js"></script>
<script src="assets1/js/modernizr.custom.js"></script>
 
<!-- Metis Menu -->
<script src="assets1/js/metisMenu.min.js"></script>
<script src="assets1/js/custom.js"></script>
<link href="assets1/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="">
<div class="main-content">
<div id="page-wrapper">
			<div class="main-page login-page ">
				<h2 class="title1">Вход</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="" method="post">
							<input type="email" class="user" name="login" placeholder="Enter Your Email" required="">
							<input type="password" name="password" class="lock" placeholder="Password" required="">
							<div class="forgot-grid">
								
								<div class="forgot">
									<a href="#">Забыли пароль?</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<input type="submit" name="signIn" value="Войти">
							<div class="registration">
								<a class="" href="registrate.php">
								  Зарегистрироваться
								</a>
							</div>
						</form>
					</div>
				</div>
				
			</div>
		</div>
</div>		
	 
	
	<!-- side nav js -->
	<script src='assets1/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="assets1/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="assets1/js/jquery.nicescroll.js"></script>
	<script src="assets1/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="assets1/js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
   
</body>
</html>
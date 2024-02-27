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
<link href="assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

 <!-- side nav css file -->
 <link href='assets/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
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
				<h2 class="title1">Создание своего логина</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="index1.php" method="post">
                            <input type="text" class="form-control" name="fullname" placeholder="Введите полное имя" ><br>
							<input type="email" class="form-control" name="login" placeholder="Введите адрес электронной почты" required="">
							<input type="password" name="password" class="form-control" placeholder="Пароль" required="">
							<div class="forgot-grid">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Запомнить меня</label>
								<div class="forgot">
									
								</div>
								<div class="clearfix"></div>
							</div>
							<input type="submit" name="save" value="Сохранить">
							
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
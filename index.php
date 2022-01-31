
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<title>  Home </title>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
   
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="css/abouts.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
	
       <link rel="stylesheet" href=" /css/flaticon.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" >
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   

</head>

<body>
	<!-- Start header -->

    <header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container ">
				<div style="padding-right:188px !important; padding-left:50px !important">
				<a class="navbar-brand ot " href="index.php"  >
				 OTLOB
				
				</a>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
                </button>
    <?php
        if(isset($_SESSION['login_user1'])){

    ?>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a style=" " href="#" class="nav-link"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
                        <li class="nav-item"><a href="myrestaurant.php"  class="nav-link" >MANAGER CONTROL PANEL</a></li>
                        <li class="nav-item"><a href="logout_m.php"style=" " class="nav-link"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
                    </ul>
				</div>
						
    <?php
    }
    else if (isset($_SESSION['login_user2'])) {
    ?>				
    <div class="collapse navbar-collapse" id="navbars-rs-food">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active" style=" hight:10px"><a  style="font-size: 13px; " href="#" class="nav-link"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li class="nav-item"><a style="font-size: 15px; " href="res.php" class="nav-link"><span class="glyphicon glyphicon-cutlery"></span> Restaurants </a></li>
            <li class="nav-item"><a style="font-size: 15px; " href="cart.php" class="nav-link"><span  class="glyphicon glyphicon-shopping-cart">
                
            </span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
			 </a></li>
             <li class="nav-item ">	<a style="font-size: 15px; " class="nav-link" href="aboutus.php">
					<img src="" alt="" /> About us
				</a>  </li>
			 <li class="nav-item ">	<a  style="font-size: 15px; " class="nav-link" href="contactus.php">
					<img src="" alt="" /> Contact
				</a> </li>
            <li class="nav-item"><a  style="font-size: 15px" href= "	logout_u.php" class="nav-link"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
    </div>
  <?php        
}

else {

  ?>
  <div class="collapse navbar-collapse" id="navbars-rs-food">

		<ul class="navbar-nav ml-auto" style="margin-left: 140px !important;">
			<li class="nav-item active" ><a class="nav-link" href="index.php"> Home</a></li>
			
			<li class="nav-item" >	<a  class="nav-link" href="aboutus.php">
				<img src="" alt="" /> About us
                </a>
            </li>
			<li class="nav-item">
                <a  class="nav-link" href="contactus.php">
					<img src="" alt="" /> Contact
                </a>
			</li>
			<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">sign-up</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="login/signup.php">User Sign-up</a>
								<a class="dropdown-item" href="login/signup2.php">Manager Sign-up</a>
							</div>
						</li>
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Login</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
									 <a class="dropdown-item" href="login/login.php"> User Login</a>
									<a class="dropdown-item" href="login/login2.php"> Manager Login</a>
									</div>
						</li>

                                  </ul>
  </div>
<?php
}
?>
					
					</ul>
				</div>
			</div>
		</nav>
    </header>
	<!-- End header -->
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="images/burger.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-15">
							<h1 class="m-b-20"><strong>Feeling  <br> Hungry ?</strong></h1>
							
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="res.php">Order now</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/slider-02.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-15">
							<h1 class="m-b-20"><strong>Do you want your  <br> food to arrive quickly ?</strong></h1>
							
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="res.php">Order now</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/slider-03.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-15">
							<h1 class="m-b-20"><strong>Do you want to see all kinds  <br> of food while you are in your home?</strong></h1>
							
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="res.php">Order now</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p> The website includes Gaza restaurants and displays the meals available in the restaurants,
					 you can order the meal what you want . </p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Social Media</h3>
					<div class="subscribe_form">
						
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				     	<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Gaza</p>
					<p class="lead"><a href="#">0000000000</a></p>
					<p><a href="#"> otlob@gmail.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Our Resturent</h3>
					<p><span class="text-color">  Italiano Resturent</span></p>
					<p><span class="text-color">  Altabon Resturent</span></p>
					<p><span class="text-color">  Altailandy Resturent</span></p>
					<p><span class="text-color">  Balmira Resturent</span></p>
					<p><span class="text-color">  Alsag Resturent</span></p>
					
					
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2021 <a href="#">Online Restaurants </a> Design By : Enaam Abeer Enas Maram
				
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->


	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>
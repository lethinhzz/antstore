<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LTstore</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Tao menu cap -->
    <link href="csseshop/bootstrap.min.css" rel="stylesheet">
    <link href="csseshop/font-awesome.min.css" rel="stylesheet">
    <link href="csseshop/prettyPhoto.css" rel="stylesheet">
    <link href="csseshop/price-range.css" rel="stylesheet">
    <link href="csseshop/animate.css" rel="stylesheet">
	<link href="csseshop/main.css" rel="stylesheet">
	<link href="csseshop/responsive.css" rel="stylesheet">
    <link href="css/salomon.css" rel="stylesheet">
    
<!--datatable-->
	<script src="js/jquery-3.2.0.min.js"/></script>
    <script src="js/jquery.dataTables.min.js"/></script>
    <script src="js/dataTables.bootstrap.min.js"/></script>
    
  </head>
  <body>
  
  <?php
    session_start();
    include_once("connection.php"); 
  ?>

   <header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>0763388757</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> LTstore@gmail.com</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle" style="background-color:black"><!--header-middle-->
			<div class="container" >
				<div>
					<div class="col-sm-6" >
						<div class="logo pull-left" >
                            <a href="index.php" style="background-color:black;color:yellow">LTstore
                            <img src="images/pngtree-teddy-bear-logo-vector-material-teddy-bear-logo-template-download-teddy-png-image_4902741.jpg" width="70" height="70"></a>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav" >
                                <!-- <li><a href="?page=cart" style="background-color:white;color:red">
                                <i class="fa fa-shopping-cart"></i> Cart</a></li>  -->
                                <?php
                                if(isset($_SESSION['us']) && $_SESSION['us'] != ""){
                                ?>
                                <li><a style="background-color:black;color:yellow" href="?page=update_customer"><i class="fa fa-lock"></i>Hi, <?php echo $_SESSION['us']?></a></li>
                                <li><a href="?page=logout" style="background-color:black;color:yellow"><i class="fa fa-crossharis"></i>Logout</a></li>
                                <?php
                                }
                                else
                                {
                                ?>
                                <li><a href="?page=login" style="background-color:black;color:yellow">
                                <i class="fa fa-lock"></i>Login</a></li>
                                <li><a href="?page=register" style="background-color:black;color:yellow">
                                <i class="fa fa-star"></i>Register</a></li>
                                <?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom" style="background-color:black;color:yellow"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" style="background-color:black;color:yellow" class="active">Home</a></li>
								<li class="dropdown"><a href="#" style="background-color:black;color:yellow">Introduction<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu" style="background-color:black;color:yellow">
                                        <li><a href="?page=history" style="background-color:black;color:yellow">History</a></li>
										<li><a href="?page=all_product" style="background-color:black;color:yellow">All Product</a></li> 
                                        <!-- <li><a href="?page=hihi" style="background-color:#99C4D2;color:red">hihi</a></li>  -->
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#" style="background-color:black;color:yellow">Management<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu" style="background-color:black;color:yellow">
                                        <li><a href="?page=category_management" style="background-color:black;color:yellow">Category</a></li>
										<li><a href="?page=product_management" style="background-color:black;color:yellow">Product</a></li>
                                    </ul>
                                </li> 
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
                        <form class="d-flex" method="POST" action="?page=Search">
                                <input name="txtSearch" class="border border-3 border-top-0 border-start-0 border-end-0" type="text" placeholder="Search" aria-label="Search" style=" outline: none;">
                                <button  class="btn btn-primary" style="background-color:black;color:yellow;margin-top: 1px;" type="submit" name="btnSearch" > Search </button>

                            </form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
  
    <?php
	if(isset($_GET['page']))
    {
        $page = $_GET['page'];
        if($page=="register"){
            include_once("Register.php");    
        }
        elseif($page=="history"){
            include_once("History.php");
        }
        elseif($page=="hihi"){
            include_once("hihi.php");
        }
        elseif($page=="Search"){
            include_once("Search.php");
        }
        elseif($page=="hihi"){
            include_once("hihi.php");
        }
        elseif($page=="all_product"){
            include_once("All_Product.php");
        }
        elseif($page=="cart"){
            include_once("Cart.php");
        }
        elseif($page=="login"){
            include_once("Login.php");
        }
        elseif($page=="category_management"){
            include_once("Category_Management.php");
        }
        elseif($page=="product_management"){
            include_once("Product_Management.php");
        }
        elseif($page=="add_category"){
            include_once("Add_Category.php");
        }
        elseif($page=="add_product"){
            include_once("Add_Product.php");
        }
        elseif($page=="update_category"){
            include_once("Update_Category.php");
        }
        elseif($page=="update_product"){
            include_once("Update_Product.php");
        }
        elseif($page=="update_customer"){
            include_once("Update_customer.php");
        }
        elseif($page=="logout"){
            include_once("Logout.php");
        }
        elseif($page=="details"){
            include_once("Details.php");
        }
    }
    else{
        include("Content.php");
    }
	?>
      
  
    
    <div class="footer-bottom-area" style="background-color:black;color:yellow">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2003 LTstore</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
    
    <!--data table - dat dung vi tri nay-->
    <script src="js/jquery.dataTables.min.js"/></script>
    <script src="js/dataTables.bootstrap.min.js"/></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.bootstrap.min.css"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css"></script>
    
    
  </body>
</html>
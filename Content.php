  
<?php
include_once("connection.php");
?>
     <div class="slider-area">
        	<!-- Slider -->
			<style>
    .block-slider4 {
        /* Adjust the width to fit your layout */
        width: 765px; /* 3 slides * 255px each */
    }

    .block-slider4 img {
        max-width: 255px;
        max-height: 255px;
    }
</style>
<div class="block-slider block-slider4">
    <ul class="" id="bxslider-home4">
        <li>
            <img src="images/tải xuống (1).jpg" alt="Slide">
        </li>
        <li>
            <img src="images/tải xuống (2).jpg" alt="Slide">
        </li>
        <li>
            <img src="images/tải xuống.jpg" alt="Slide">
        </li>
    </ul>
</div>

			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <!--Gioi thieu cac chuc nang-->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <!-- <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>Exchange, return every 1 months </p> -->
                        <li>
						<img src="images/imageedit_6_5276546895.png" alt="Slide">
					</li>
                    </div>
                
                <div class="col-md-3 col-sm-6">
                    <!-- <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free ship</p>
                    </div> -->
                    <li>
						<img src="images/8c8c29d54d396c70c9502d24fc57b2ae.jpg" alt="Slide">
					</li>
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Payment security</p> -->
                        <li>
						<img src="images/png-clipart-button-ui-app-one-purple-and-white-teddy-bear-logo.png" alt="Slide">
					</li>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <!-- <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Payment security</p> -->
                        <li>
						<img src="images/pngtree-teddy-bear-logo-vector-material-teddy-bear-logo-template-download-teddy-png-image_4902741.jpg" alt="Slide">
					</li>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Product</h2>
                        <div class="product-carousel">
                        
                        <!--Load san pham tu DB -->
                           <?php
						  // 	include_once("database.php");
		  				   	$result = mysqli_query($conn, "SELECT * FROM product" );
			                if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }
			                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				            ?>
				            <!--Một sản phẩm -->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="product-imgs/<?php echo $row['Pro_image']?>" width="150" height="150">
                                </div>
                                
                                <h2><a href="?page=details&&id=<?php echo  $row['Product_ID']?>"><?php echo  $row['Product_Name']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['Price']?>$</ins> <del>
                                </div> 
                            </div>
                <?php
				}
				?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="images/Dragon_Ball_Z_Logo_C.png" alt="">
                            <img src="images/Tanoshii+Logo@0.5xweb.png" alt="">
                            <img src="images/LOGO_ONEPIECE.png" alt="">
                            <img src="images/Naruto-Logo.png" alt="">                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->

    
   
  
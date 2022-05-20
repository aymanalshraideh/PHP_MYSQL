<?php require "config.php";?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>pets store. 🐾</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<style>.detailBox {
    width:320px;
    border:1px solid #bbb;
    margin:50px;
}
.titleBox {
    background-color:#fdfdfd;
    padding:10px;
}
.titleBox label{
  color:#444;
  margin:0;
  display:inline-block;
}

.commentBox {
    padding:10px;
    border-top:1px dotted #bbb;
}
.commentBox .form-group:first-child, .actionBox .form-group:first-child {
    width:80%;
}
.commentBox .form-group:nth-child(2), .actionBox .form-group:nth-child(2) {
    width:18%;
}
.actionBox .form-group * {
    width:100%;
}
.taskDescription {
    margin-top:10px 0;
}
.commentList {
    padding:0;
    list-style:none;
    max-height:200px;
    overflow:auto;
}
.commentList li {
    margin:0;
    margin-top:10px;
}
.commentList li > div {
    display:table-cell;
}
.commenterImage {
    width:30px;
    margin-right:5px;
    height:100%;
    float:left;
}
.commenterImage img {
    width:100%;
    border-radius:50%;
}
.commentText p {
    margin:0;
}
.sub-text {
    color:#aaa;
    font-family:verdana;
    font-size:11px;
}
.actionBox {
    border-top:1px dotted #bbb;
    padding:10px;}
</style>

    </head>
	<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">pets store. 🐾</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
			
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
		
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
						<li><a href=""><i class="fa fa-shopping-cart" style="margin-right=1px"> </i>   My Cart</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
		<!-- HEADER -->
		<!-- <header>
		<div id="top-header">
				<div class="container">
				
					<ul class="header-links pull-right">
				<li>	<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div></li>
						<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
						<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
						<li><i class="fa fa-shopping-cart"></i><a href="">My Cart</a></li>
					</ul>
				</div>
			</div> -->

			<!-- MAIN HEADER -->
			<!-- <div id="header"> -->
				<!-- container -->
				<!-- <div class="container"> -->
					<!-- row -->
					<!-- <div class="row"> -->
						<!-- LOGO -->
						
						<!-- /LOGO -->

						<!-- <nav id="navigation"> -->
			<!-- container -->
			<!-- <div class="container"> -->
				<!-- responsive-nav -->
				<!-- <div id="responsive-nav"> -->
					<!-- NAV -->
					<!-- <ul class="main-nav nav navbar-nav navbar ">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Hot Deals</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Laptops</a></li>
						<li><a href="#">Smartphones</a></li>
						<li><a href="#">Cameras</a></li>
						<li><a href="#">Accessories</a></li>
					</ul> -->
					<!-- /NAV -->
				<!-- </div> -->
				<!-- /responsive-nav -->
			<!-- </div> -->
			<!-- /container -->
		<!-- </nav> -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								

								<!-- Cart -->
								
									
									

											
										
										
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
							
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		
		<!-- /NAVIGATION -->
<?php  $select="SELECT * FROM products where product_id =24" ;
$fromdb = $db->query($select);
$showw=$fromdb->fetchAll();
       foreach($showw as $value):

	
	   
	   
?>
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li><a href="#">All Categories</a></li>
							<li><a href="#">Dogs</a></li>
							
							<li class="active"><?php echo $value['product_name']; ?></li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="./img/<?php echo $value['product_main_image']; ?>" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/<?php echo $value['product_desc_image_1']; ?>" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/<?php echo $value['product_desc_image_2']; ?>" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/<?php echo $value['product_desc_image_3']; ?>" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="./img/<?php echo $value['product_main_image']; ?>" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/<?php echo $value['product_desc_image_1']; ?>" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/<?php echo $value['product_desc_image_2']; ?>" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/<?php echo $value['product_desc_image_3']; ?>" alt="">
							</div>
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
						<h2 class="product-name"><?php echo $value['product_name']; ?></h2>
							
								
							</div>
							<div>
							<h3 class="product-price">$<?php echo $value['product_price']; ?> </h3>
								
							</div>
							<p><?php echo $value['product_description']; ?></p>

						

							<div class="add-to-cart">
								<div class="qty-label">
									
										<form action="">
											Qty
									<input type="number" name="" id="" >
											<input type="submit" class="fa fa-shopping-cart add-to-cart-btn" value="Add to cart">
										</form>
										
									
								</div>
								
								
								
							</div>
							


							

							
						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
								<li><a data-toggle="tab" href="#tab3">Comments</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p><?php echo $value['product_description']; ?> </p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
									<?php
								// 	 $join='SELECT comments.id ,comments.comment ,comments.comment_image,comments.comment_date,products.product_name From comments 
                                //    LEFT JOIN products ON comments.comment_product_id=product_id' 
								   ?> 
                            <?php
                                //  $st= $db->query($join);
                                // $publishers = $st->fetchAll();
                                  ?>
										
									<?php
$Showsql="SELECT * FROM comments";

$statment=$db->query($Showsql);

$show=$statment->fetchAll();



foreach($show as $value):
 ?>
    <div class="actionBox">
        <ul class="commentList">
            <li>
                <div class="commenterImage">
                  <img src="http://placekitten.com/50/50" />
                </div>
                <div class="commentText">
                <h5 class=" mb-0 ms-2"><?php echo $value['comment_image'];  ?></h5><br>
                    <p class=""><?php echo $value['comment']; ?></p></p> <span class="date sub-text">on <?php echo $value['comment_date']; ?></span>

                </div>
            </li>
            
        </ul>
        <?php endforeach ?>
      <?php  if(isset($_POST['submit'])){
     
     $name=$_POST['name'];
    $comment=$_POST['comment'];
    
    
    try {
     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = 'INSERT INTO comments (comment,comment_image)
     VALUES (:comment,:comment_image)'; 
     $st= $db->prepare($sql);
 
     $st->execute([':comment'=>$comment,':comment_image'=>$name]);
    //  echo "New comment record created ";
 
    } catch (PDOException $e) {
        echo  $sql . "<br>" . $e->getMessage();
    }
 
 
     }
     
     ?>

        <form class="form-inline"  method="post" >
            <div class="form-group">
                <input class="form-control" type="text" name='name' placeholder="Your Name" />
                <input class="form-control" type="text" name='comment' placeholder="Your comments" />
            <div class="form-group">
                <input type="submit" value="Add" name="submit" class="btn btn-primary">
                
            </div></div>
            
        </form>
    </div>
									

									
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<?php endforeach;?>
		<!-- Section -->
		<div class="section">
			<!-- container -->
			
			<!-- /container -->
		</div>
		<!-- /Section -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				
    
   
	<div class="container">
					
					<div class="row">
<br>
<br><br><br>
					</div></div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->
	</div>
	

	</div></div>
		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>

<?php require 'config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Electro - HTML Ecommerce Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style1.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	
	<!-- BREADCRUMB -->
	<div id="breadcrumb" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb-tree">
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php">All Categories</a></li>
						<li><a href="#"><?php echo $_GET['name']; ?></a></li>

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
				<!-- ASIDE -->
				<div id="aside" class="col-md-3">
					<!-- aside Widget -->
					<div class="aside">
						<h3 class="aside-title">Categories</h3>
						<div class="checkbox-filter">
							<?php
							$sql = 'SELECT * FROM categories';
							$statement = $db->query($sql);
							$data = $statement->fetchAll();
							foreach ($data as $category) :
							?>

								<div class="input-checkbox">
									<input type="checkbox" id="<?php echo $category['category_id']; ?>">
									<label for="<?php echo $category['category_id']; ?>">
										<span></span>
										<?php echo $category['category_name']; ?>
										
									</label>
								</div>
							<?php endforeach ?>

						</div>
					</div>
					<!-- /aside Widget -->
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Price</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

					<!-- aside Widget -->
					<div class="aside">
						<h3 class="aside-title">LATEST PRODUCTS</h3>
						<?php
						$count = 1;
						$sql = 'SELECT * FROM products';
						$statement = $db->query($sql);
						$data = $statement->fetchAll();
						foreach ($data as $product) :

							if ($count <= 3) {
						?>
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo $product['product_main_image']; ?>" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-name"><a href="product.php?product_id=" .<?php echo $product['product_id']; ?>><?php echo $product['product_name']; ?></a></h3>
										<h4 class="product-price"><?php echo $product['product_price']; ?> $</h4>
									</div>
								</div>
						<?php $count++;
							}
						endforeach ?>

					</div>
					<!-- /aside Widget -->
					
					
				</div>
				<!-- /ASIDE -->

				<!-- STORE -->
				<div id="store" class="col-md-9">
					<!-- store top filter -->
					<div class="store-filter clearfix">
						
							<label>
								Sort By:</label>
								<select name='sort' class="input-select" onchange="Sort()" id='select'>
									<option value="0">Name , A-Z</option>
									<option value="1">Price, low to high</option>
									<option value="2">Price, high to low</option>
									<option value="3">Name , Z-A</option>
								</select>
							


						
						
					</div>
					<!-- /store top filter -->
					<?php
					
					$select_products ='';
					$category_id = $_GET['category'];
					if(isset($_GET['sort'])){
					$value=$_GET['val'];}
				if($value =='0'){
							
					$select_products = $db->prepare("SELECT * FROM `products` WHERE product_categorie_id=$category_id ORDER BY product_price ASC");
					
				}
				else if($value=='1'){
					$select_products = $db->prepare("SELECT * FROM `products` WHERE product_categorie_id=$category_id ORDER BY product_price DESC");
					
				}
				else if($value=='2'){
					$select_products = $db->prepare("SELECT * FROM `products` WHERE product_categorie_id=$category_id ORDER BY product_name DESC");
					
				}
				else{
					$select_products = $db->prepare("SELECT * FROM `products` WHERE product_categorie_id=$category_id ORDER BY product_name ASC");
					
				}
			
				$select_products->execute();
					$count =  $select_products->rowCount();
					if ($select_products->rowCount() > 0) {
						while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {

					?>
							<!-- store products -->
							<div class="row">
								<!-- product -->
								<div class="col-md-4 col-xs-6">
									<div class="product">
										<div class="product-img">
											<img src="<?php echo $fetch_products['product_main_image']; ?>" alt="">
											<div class="product-label">

												<span class="new">NEW</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category"><?php echo  $_GET['name'] ?></p>
											<h3 class="product-name"><a href="#"><?php echo $fetch_products['product_name']; ?></a></h3>
											<h4 class="product-price"><?php echo $fetch_products['product_price']; ?> $</h4>
											
											<div class="product-btns">

												<button class="quick-view"><a href="product.php?productId=<?php echo $fetch_products['product_id']; ?>"><i class="fa fa-eye"></i></a><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn" name='addToCart'><a href="addToCart.php?productId=<?php echo $fetch_products['product_id']; ?>&cat_id=<?php echo $category_id ?>&c_name=<?php echo  $_GET['name'] ?>" ><i class="fa fa-shopping-cart"></i> add to cart</a></button>
										</div>
									</div>
								</div>
						<?php
					


						}
					} else {
						echo '<p class="empty">no products available!</p>';
					}
						?>
						<!-- /product -->


							</div>
							<!-- /store products -->

							<!-- store bottom filter -->
							<div class="store-filter clearfix">
								<span class="store-qty">Showing <?php echo $count; ?>-<?php
																						$select_allproducts = $db->prepare("SELECT * FROM `products` ");
																						$select_allproducts->execute();
																						$countt = $select_allproducts->rowCount();
																						echo $countt ?> products</span>

							</div>


							<!-- /store bottom filter -->
				</div>
				<!-- /STORE -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
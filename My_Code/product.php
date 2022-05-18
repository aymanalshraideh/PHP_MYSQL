
	  
  <?php require "config.php";?>
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

		

    </head>
	<body>
		
<?php  $select="SELECT * FROM products where product_id =24" ;
$fromdb = $db->query($select);
$showw=$fromdb->fetchAll();
       foreach($showw as $value):

	
	   
	   
?>
		

		

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
								<img src="./img/c.png" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/c.png" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/c.png" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/c.png" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="./img/c.png" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/c.png" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/c.png" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/c.png" alt="">
							</div>
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name"><?php echo $value['product_name']; ?></h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div>
							<div>
								<h3 class="product-price">$<?php echo $value['product_price']; ?> </h3>
								<span class="product-available">In Stock</span>
							</div>
							<p> <?php echo $value['product_description']; ?>  </p>

							

							<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<div class="input-number">
										<input type="number">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>

							

						</div>
					</div>
					<!-- /Product details -->
<?php endforeach;?>
				
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		


		<?php
if(isset($_POST['submit'])){
     
    $name=$_POST['name'];
   $comment=$_POST['comment'];
   
   
   try {
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'INSERT INTO comments (comment,comment_image)
    VALUES (:comment,:comment_image)'; 
    $st= $db->prepare($sql);

    $st->execute([':comment'=>$comment,':comment_image'=>$name]);
    echo "New record created successfully";

   } catch (PDOException $e) {
       echo  $sql . "<br>" . $e->getMessage();
   }


    }
    
    ?>
<div class="container pt-5">
    <div class="row d-flex justify-content-center">
  <div class="col-md-4 col-lg-4">
    <div class="card shadow-0 border" style="background-color: #f0f2f5;">
      <div class="card-body p-4">
        <div class="form-outline mb-4">
            <form action="" method="POST" class="form-horizontal">
            <input type="text"  name='name' class="form-control" placeholder="Enter Your name..." />
          <input type="text" id="addANote" name='comment' class="form-control" placeholder="Type comment..." required />
          
          <input type="submit" name="submit" class="btn btn-success" value="+ Add a comment">
        </form>
        </div>
         





<?php
$Showsql="SELECT * FROM comments";

$statment=$db->query($Showsql);

$show=$statment->fetchAll();



foreach($show as $value):
 ?>
        <div class="card mb-3">
          <div class="card-body">
            

            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
               
                <h3 class=" mb-0 ms-2"><?php echo $value['comment_image'];  ?></h3><br>
              </div>
             
            </div><div  style="margin-top:10px ">
            <p><?php echo $value['comment']; ?></p></div>
          </div>
        </div>
<?php endforeach ?>
        

</div>

       
      </div>
    </div>
  </div>
</div>

		
		

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>


















	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
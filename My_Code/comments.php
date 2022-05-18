<?php require "config.php";


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <!-- <nav class="navbar navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="#">Action 1</a>
                  <a class="dropdown-item" href="#">Action 2</a>
                </div>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav> -->






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

    <div class="row d-flex justify-content-center">
  <div class="col-md-8 col-lg-6">
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
        <div class="card mb-4">
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



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
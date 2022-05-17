<?php
 require_once "config.php" ;

?>
<?php
$pdo = require_once 'config.php';

if (isset($_POST['submit'])){
   
    $price = $_POST['price'];
    $name = $_POST['name'];
    $category= $_POST['categories'];
    
  



try {
   
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO suplyingproduct (pname, price, category)
    VALUES (:name, :price, :category)";
    // use exec() because no results are returned
   $st= $db->prepare($sql);
   $st->execute([
	':name' => $name,
    ':price' => $price,
    ':category'=>$category
]);


    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }}
  ?>
<!-- <form action=""> <input type="submit" value="sssss" name="test"></form> -->

  <?php
  if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $de="DELETE FROM `suplyingproduct` WHERE id_p=$id";
    $ss=$db->query($de);
    
    
    header('location:show.php');
  };

  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
   <button><a href="index.php">Back</a></button> 

<?php $join='SELECT suplyingproduct.id_p ,suplyingproduct.pname ,suplyingproduct.price,category.name From suplyingproduct 
LEFT JOIN category ON suplyingproduct.category = category.id' ?> 
<?php
$st= $db->query($join);
  $publishers = $st->fetchAll();
?>
  <table class="table">
      <thead>
      <tr>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Category</th>
          <th scope="col"></th>
      </tr></thead>
      <?php foreach($publishers as $value): ?>
        <tr>
            <td><?php echo $value['pname'] ?></td>
            <td><?php echo $value['price'] ?></td>
            <td><?php echo $value['name'] ?></td>
          <td> <a href="update.php?edit=<?php echo $value['id_p']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
             <a href="show.php?delete=<?php echo $value['id_p']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a></td> 
        </tr>
        
        <?php endforeach ?>
  </table>
  </body>
</html>
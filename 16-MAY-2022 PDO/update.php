<?php require_once "config.php" ;


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
<h1>UPDATE</h1>
<?php

$id=$_GET['edit'];

if (isset($_POST['usubmit'])){
   
   $price = $_POST['uprice'];
   $name = $_POST['uname'];
   $category= $_POST['ucategories'];
   $publisher = [
	'pname' => $name ,
	'price' => $price,
    'category'=>$category 
];
   $update_data = "UPDATE suplyingproduct 
   SET pname='$name',price='$price',category='$category'
    WHERE id_p='$id'";
 $stmt = $db->prepare($update_data);
 $stmt->execute();

   header('location:show.php');
   
   

}
?>

<form  method="post"  style="width: 50% ; margin:auto ; padding-top:100px">
        <div class="mb-3">
          <label for="" class="form-label">Product Name</label>
          <input type="text" class="form-control" name="uname">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="number" min="0" step="0.1" class="form-control" name="uprice">
        </div>

        <?php  
$sql='SELECT * FROM category';

$query=$db->query($sql);
$share=$query->fetchAll();



?>

        <div class="mb-3">
        <label for="" class="form-label">Categories</label>
            <select class="form-select" name="ucategories">

            
                <option selected disabled>Choose A Category </option>
                <?php foreach ($share as $value):?>
                <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                <?php endforeach; ?>
            </select>

        </div>
      
        <button type="submit" class="btn btn-primary" name="usubmit">Submit</button>
      </form>
  </table>


  <?php echo $id; ?>
  </body>
</html>
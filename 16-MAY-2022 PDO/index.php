<?php require "config.php" ?>
<?php  
$sql='SELECT * FROM category';

$query=$db->query($sql);
$share=$query->fetchAll();



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
<button><a href="show.php">Show product</a></button> 
    <form  method="post" action="show.php" style="width: 50% ; margin:auto ; padding-top:100px">
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Product Name</label>
          <input type="text" class="form-control" name="name">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="number" min="0" step="0.1" class="form-control" name="price">
        </div>



        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Categories</label>
            <select class="form-select" name="categories">

            
                <option selected disabled>Choose A Category </option>
                <?php foreach ($share as $value):?>
                <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                <?php endforeach; ?>
            </select>

        </div>
      
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>

</body>
</html>
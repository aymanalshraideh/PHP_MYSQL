<?php

$servername='localhost';
$username='root';
$password='';
$db_name='fruits';

$conn=new mysqli($servername,$username,$password,$db_name);

if($conn->connect_errno){
    echo "the number of Error is ".$conn->connect_errno;

}
else{
    echo "All is Okay";
}
if(isset($_POST['sub'])){
$namefruite=$_POST['namefruit'];
$pricefruit=$_POST['pricefruit'];
$colorfruit=$_POST['colorfruit'];
$productioncountry=$_POST['productioncountry'];
$uses=$_POST['uses'];
}
echo $namefruite;

$query = "INSERT INTO fruits (name , price , color, productioncountry ,uses) VALUES ('$namefruite','$pricefruit','$colorfruit','$productioncountry','$uses')";

mysqli_query($conn,$query);
 

$select=mysqli_query( $conn,"SELECT * FROM fruits");
?>
<table border=1px>
    <tr>
        <th>Name fruite</th>
        <th>Price fruit</th>
        <th>Color fruit</th>
        <th>Production country</th>
        <th>Uses</th>
    </tr>
    <?php while($row= mysqli_fetch_assoc ($select)): ?>
    <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['color']; ?></td>
    <td><?php echo $row['productioncountry']; ?></td>
    <td><?php echo $row['uses']; ?></td>
    </tr>
    <?php endwhile; ?>
</table>





<?php 
$serverame="localhost";
$username="root";
$password="";
$dbname="api";
$conn=mysqli_connect($serverame,$username,$password,$dbname);

if ($conn){
    header("Content-Type: JSON");
$arr=array();

$sql="SELECT * FROM testapi";
$result=mysqli_query($conn,$sql);
if ($result){
$i=0;
// header("Content-Type: JSON");
while($row=mysqli_fetch_array($result)){
         
    $arr[$i]["id"]=$row["id"];
    $arr[$i]["first_name"]=$row["first_name"];
    $arr[$i]["last_name"]=$row["last_name"];

    $arr[$i]["age"]=$row["age"];
$i++;
}


echo json_encode($arr);
}




}else{
    echo "FAILED CONNECTING";
}
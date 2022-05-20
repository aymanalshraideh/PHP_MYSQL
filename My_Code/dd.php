<?php require "config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>@import url(//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css);

.detailBox {
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
    padding:10px;
}</style>
</head>
<body>
<div class="detailBox">
    <div class="titleBox">
      <label>Comment Box</label>
        <button type="button" class="close" aria-hidden="true">&times;</button>
    </div>
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
     echo "New comment record created ";
 
    } catch (PDOException $e) {
        echo  $sql . "<br>" . $e->getMessage();
    }
 
 
     }
     
     ?>

        <form class="form-inline" role="form" method="post" >
            <div class="form-group">
                <input class="form-control" type="text" name='name' placeholder="Your Name" />
                <input class="form-control" type="text" name='comment' placeholder="Your comments" />
            <div class="form-group">
                <input type="submit" value="Add" name="submit" class="btn btn-primary">
                
            </div></div>
            
        </form>
    </div>
</div>

</body>
</html>
<?php 
require_once("connect.php");
$id=$_GET["id"];
$sql="DELETE FROM `faddy` WHERE id=$id";
$query=mysqli_query($connect,$sql);
if($query){
    header("location:display.php");
}else{
    echo mysqli_error($connect);
}

?>
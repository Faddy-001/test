<?php
require_once("connect.php");
$id=$_GET["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$rollno=$_POST["rollno"];
$sql="UPDATE `faddy` SET `name`='$name',`email`='$email',`password`='$password',`roll no`='$rollno' WHERE id=$id";
$query=mysqli_query($connect,$sql);
if($query){
    header("location:display.php");
}else{
    echo mysql_error($connect);
}

?>
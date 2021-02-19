<?php
require("./connect.php");
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$rollno=$_POST['rollno'];
$sql="INSERT INTO `faddy`( `name`, `email`, `password`, `roll no`) VALUES ('$name','$email','$password','$rollno')";
$query=mysqli_query($connect,$sql);
if ($query){
 header("location:./display.php");
}else{
    echo"kuch to gadbad he daya";
}
}

?>
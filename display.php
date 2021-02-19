<?php include"./connect.php";
session_start();


$sql="SELECT * FROM `faddy`";
$query=mysqli_query($connect,$sql);?>
<table border="" width="50%">
  <tr>
  <td>name</td>
  <td>Email</td>
  <td>Password</td>
  <td>roolno</td>
 </tr>
 <?php
    while($row=mysqli_fetch_assoc($query)){ ?>
<!-- // print_r($row);
// echo "<br>";} -->
<a href="../index.php">Go back</a>
 <tr>
  <td>
    <?php echo $row['name'];  ?>
    </td>


    <td>
    <?php echo $row['email'];  ?>
    </td>


    <td>
    <?php echo $row['password'];  ?>
    </td>


    <td>
    <?php echo $row['roll no'];  ?>
    </td>
<td>
<a href="getbyid.php?id=<?= $row['id']; ?>" class="btn btn-primary">update</a>
<a href="./delete.php?id=<?= $row['id'];?>"class="btn btn-danger">delete</a>
  </td>
 </tr>
<?php 
}
?>
</table>


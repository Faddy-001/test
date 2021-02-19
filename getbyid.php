<?php
require_once("connect.php");
$id=$_GET["id"];
$sql="SELECT * FROM `faddy` WHERE id='$id'";
$query=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($query);
?>


<?php include_once"../front/header.php";?>
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto">
            <form action="./update.php?id=<?= $row['id']; ?>" method="POST">
              
                <div class="form-group">
                    <label for="">NAME</label>
                    <input type="text" name="name" id="" value="<?= $row['name']; ?>"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" id="" value="<?= $row['email']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" name="password" id="" value="<?= $row['password']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Roll No</label>
                    <input type="text" name="rollno"  value="<?= $row['password']; ?>"  class="form-control">
                </div>
                <input type="submit" value="submit" name="submit"  class="btn btn-primary mt-3">
            </form>
        </div>
    </div>
</div>
<?php include_once"../front/footer.php";?>

?>
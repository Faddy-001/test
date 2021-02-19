<?php include_once"./front/header.php";?>
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto">
            <form action="./request/request.php" method="POST">
              
                <div class="form-group">
                    <label for="">NAME</label>
                    <input type="text" name="name" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" name="password" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Roll No</label>
                    <input type="text" name="rollno" id="" class="form-control">
                </div>
                <input type="submit" value="submit" name="submit"  class="btn btn-primary mt-3">
            </form>
        </div>
    </div>
</div>
<?php include_once"./front/footer.php";?>

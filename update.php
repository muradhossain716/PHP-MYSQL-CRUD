<?php 
    include 'connection.php';
    $name=$email=$department=$designation=$id=$department="";
    if(isset($_GET['updateid'])){
        $id=$_GET['updateid'];
        $sql="select * from crud where id=$id";
        $result=$conn->query($sql);
        $row=$result -> fetch_assoc();
        $name=$row['name'];
        $id=$row['id'];
        $department=$row['department'];
        $designation=$row['designation'];
        $email=$row['email'];
        // print_r($result);
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $designation=$_POST['designation'];
        $department=$_POST['department'];
        // echo"<h1>".$department."</h1>";
        $sql="update crud SET id='$id',name='$name',email='$email',designation='$designation',department='$department' where id=$id";
        $result=$conn->query($sql);
        if($result){
            echo'data inserted successfully';
            header('location:employee.php');
        }else{
            echo'can\'t insert data';
        }
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body class="modal-open" style="overflow:hidden">
    <!-- Button trigger modal -->
    

<!-- Modal -->
    <div class="modal fade show" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display:block!important;" >
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Employee Details</h5>
        </div>
        <div class="modal-body">
                <div class="container">
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label">ID</label>
                            <input type="number" class="form-control" placeholder="Enter ID" name='id' autocomplete="off" value="<?php echo $id?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name='name' autocomplete="off" value="<?php echo $name?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name='email' autocomplete="off" value="<?php echo $email?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Designation</label>
                            <input type="text" class="form-control" placeholder="Enter Designation" name='designation' autocomplete="off" value="<?php echo $designation?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Department</label>
                            <input type="text" class="form-control" placeholder="Enter Department" name='department' autocomplete="off" value="<?php echo $department?>">
                        </div>
                        <button type="submit" class="btn btn-primary "><a class="text-light" >Update</a></button>
                    </form>
            </div>
        </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
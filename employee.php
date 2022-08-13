<?php
    include 'connection.php';
    
    $sql = "select * from crud";
    $result = $conn->query($sql);
    // $records = $result->fetch_assoc();
    // echo count($records);
   
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal">
    Add Data
    </button>

<!-- Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <div class="container">
                    <form method="post" action='post.php'>
                        <div class="mb-3">
                            <label class="form-label">ID</label>
                            <input type="number" class="form-control" placeholder="Enter ID" name='id' autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name='name' autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name='email' autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Designation</label>
                            <input type="text" class="form-control" placeholder="Enter Designation" name='designation' autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Department</label>
                            <input type="text" class="form-control" placeholder="Enter Department" name='department' autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!--Data Table-->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Designation</th>
                <th scope="col">Department</th>
                <th scope="col">Operations</th>
                
            </tr>
        </thead>
        <tbody>
           <?php 
                if(!empty($result)){
                    // print_r($result);
                    while($row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['designation']; ?></td>
                            <td><?php echo $row['department']; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" >
                                    <a class="text-light" href="update.php?updateid=<?php echo $row['id']; ?>">Update</a></button>
                                    /
                                <button type="button" class="btn btn-danger">
                                    <a class="text-light"  href="delete.php?deleteid=<?php echo $row['id']; ?>">Delete</a>
                
                                </button>


                            </td>
                        </tr>
                <?php } } else { ?>
                    <tr>
                        <td colspan="5">
                            <div class="alert alert-warning">
                                Employee record not found!
                            </div>
                        </td>
                <?php } ?>
        </tbody>
    </table>



<!-- Button trigger modal -->

<!-- Button trigger modal -->

<!-- Modal
data-bs-toggle="modal" data-bs-target="#Modal2"
    <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"> Are you Sure you want to delete?</h5>
           
        </div>
        <div class="modal-body">
                <div class="container">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal2">Cancel </button>  
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal2" href="delete.php?deleteid=<?php echo $deleteid; ?>">Delete </button> 
            </div>
        </div>
        </div>
    </div>
    </div> -->

    
    <!-- <div class="container">
        <form method="post" action='post.php'>
            <div class="mb-3">
                <label class="form-label">ID</label>
                <input type="number" class="form-control" placeholder="Enter ID" name='id' autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" name='name' autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Enter Email" name='email' autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Designation</label>
                <input type="text" class="form-control" placeholder="Enter Designation" name='designation' autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Department</label>
                <input type="text" class="form-control" placeholder="Enter Department" name='department' autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>

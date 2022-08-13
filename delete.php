<?php
    include 'connection.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        $sql="delete from `crud` where id=$id";
        $result = $conn->query($sql);
        if(isset($result)){
            echo'Deleted successfully';
            header('location:employee.php');
        }else{
            echo"can't delete";
        }
    }

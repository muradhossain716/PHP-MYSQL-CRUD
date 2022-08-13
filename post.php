<?php
    include 'connection.php';
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id=$_POST['id'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $designation=$_POST['designation'];
            $department=$_POST['department'];
            $sql="insert into `crud` (id,name,email,designation,department)
            values('$id','$name','$email','$designation','$department')";
            $result=$conn->query($sql);
            if($result){
                echo'data inserted successfully';
                header('location:employee.php');
            }else{
                echo'can\'t insert data';
            }
            
        }
?>
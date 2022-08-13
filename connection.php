<?php 
    $conn = new mysqli('localhost', 'root', '', 'crudoperations');
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
?>
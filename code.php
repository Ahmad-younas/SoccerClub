<?php

    session_start();
    $connection = new mysqli("localhost","root","root","users");
    if(isset($_POST["register_User"])){
        $student_Name=$_POST['username'];
        $password=$_POST['password'];
        $query="INSERT INTO user (name,password) VALUES('$student_Name','$password')";
        $query_run=mysqli_query($connection,$query);
        if($query_run){
            echo("Query".$query_run);
            $_SESSION['success'] = "Admin Profile Added";
            header('Location: login.php');
        }
    }else{
        echo("Not Added");
    }

    if(isset($_POST['contact'])){
        $name=$_POST['username'];
        $email=$_POST['email'];
        $Number=$_POST['phoneNumber'];
        $comment=$_POST['Comment'];

        $query=

    }
    // if($connection){
    //     echo("Success");
    // }else{
    //     echo("register_User");
    // }
?>
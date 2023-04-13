<?php
    require('header.php');

    if(isset($_POST['register_user'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        //CHECKS IF PASSWORD DOES NOT MATCH
        if($password !== $confirm_password){
            echo "<p>Password do not Match!</p><a href='register.php'>Go Back </a>";
        }

        //CHECKS IF EMAIL EXISTS
        $email_exist = mysqli_query($connect_db, "SELECT * FROM user WHERE email = '$email'");
        if(mysqli_num_rows($email_exist)>0){
            echo "<p> User Already Exist, Create a New User or Login here <a href='register.php'> </a>";
        }

        //CHECKS IF USERNAME EXISTS
        $user_exist = mysqli_query($connect_db, "SELECT * FROM user WHERE username = '$username'");
        if(mysqli_num_rows($user_exist)>0){
            echo "<p> User Already Exist, Create a New User or Login here <a href='register.php'> </a>";
        }

        //HASH PASSWORD
        $encoded_password = md5($password);

        //INSERTS USER
        $insert_record = mysqli_query($connect_db, "INSERT INTO user (firstname, lastname, username, email, gender, password) VALUE('$firstname', '$lastname', '$username', '$email', '$gender', '$encoded_password')");
        if($insert_record){
            header("Location: welcome.php");
        }else{
            echo 'Error in registration';
        }

    } 
    
?>
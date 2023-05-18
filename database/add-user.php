<?php
    session_start();

    $table_name= $_SESSION['table'];
    

    $name= $_POST['name'];
    $last_name= $_POST['last_name'];
    $username= $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $encrypted_password= password_hash($password, PASSWORD_DEFAULT);
    //$stringVariable= "employee";
        
    /*$icommand="INSERT INTO $table_name('name','last_name','username','email','password','rol','status','created_at','updated_at') 
                    VALUES ('".$name."','".$last_name."','".$username."','".$email."','".$encrypted_password."',NULL,1, NOW(),NOW())";
      */              
        
    $icommand = "INSERT INTO $table_name (`name`, `last_name`, `username`, `email`, `password`, `role`, `status`, `created_at`, `updated_at`) 
                VALUES ('$name', '$last_name', '$username', '$email', '$encrypted_password', NULL, 1, NOW(), NOW())";


    include('connection.php');
    $conn->exec($icommand);

    /*$result=mysqli_query($conn,$insert_method);
    if($result){
        $_SESSION['message']="User Successfully Registered";
        header('location:index.php');
        }
        else{
            $_SESSION['message']="Error Occured";
            header('location:index.php');
            }
    */

    
    
?>
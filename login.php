<?php
 $email = $_POST['email'];
 $password = $_POST['password'];
 $con=new mysqli("localhost","root","","database123");
 if($con->connect_error){
    die("Failed to connect :" . $con->connect_error);
 }else{
    $stmt = $con->prepare("SELECT * FROM student_registation WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows>0){
        $data = $stmt_result->fetch_assoc();
        if($data['password']===$password){
            echo "Login Succesfull";
            // header("Location:index.html");
        }else{
            echo "Invalid password";
        }
    }else{
        echo "Invalid login";
        // echo '<script>alert("Invaid login")</script>';
    }
 }

?>
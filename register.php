<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="database123";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
    die("connection failed:" .mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $first = $_POST['first'];
    $last = $_POST['last'];
    $father = $_POST['father'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

$sql_query = "INSERT INTO student_registation(first,last,father,gender,dob,email,password,mobile) VALUES ('$first','$last','$father','$gender','$dob','$email','$password','$mobile')";

if (mysqli_query($conn,$sql_query))
{
    // echo"New Details Entry Inserted Successfully !";
    // echo '<script>alert("Registation Successful. Now You Can LOG IN")</script>';
    header("Location:login.html");
}
else{
    echo"Error:".$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
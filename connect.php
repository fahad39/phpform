<?php 

$email=$_POST["email"];
$password=$_POST["password"];

// Database connection

$conn=new mysqli("localhost","root","","testform");
if($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);
}else{
    $stmt=$conn->prepare("insret into registration(email,password) values(?,?)");
    $stmt->bind_param("sssi",$email,$password);
    $stmt->execute();
    echo "registration sucessfull";
    $stmt->close();
    $stmt->close();
}
?>
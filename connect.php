<?php
//name send in xampp
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contact = $_POST['contact'];

//Database connection
$conn = new mysqli('localhost','root','','send');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into subscribe(firstname, lastname, email, contact)
    values(?, ?, ?, ?)");
    $stmt->bind_param("sssi", $firstname, $lastname, $email, $contact);
    $stmt->execute();
    echo "Subscription Successful!";
    $stmt->close();
    $conn->close();
}


?>


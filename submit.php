<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $firstName = htmlspecialchars($_POST['firstName']);  
    $lastName = htmlspecialchars($_POST['lastName']);  
    $email = htmlspecialchars($_POST['email']);  
    $phone = htmlspecialchars($_POST['phone']);  
    $gender = htmlspecialchars($_POST['gender']);  
    $dob = htmlspecialchars($_POST['dob']);  
    $address = htmlspecialchars($_POST['address']);  

    // Display the data  
    echo "<h1>Registration Successful!</h1>";  
    echo "<p>First Name: $firstName</p>";  
    echo "<p>Last Name: $lastName</p>";  
    echo "<p>Email: $email</p>";  
    echo "<p>Phone: $phone</p>";  
    echo "<p>Gender: $gender</p>";  
    echo "<p>Date of Birth: $dob</p>";  
    echo "<p>Address: $address</p>";  
}  
?>
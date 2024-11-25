<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST['email'];
    $user_password = $_POST['PASSWORD'];

    
    $sql = "SELECT * FROM student WHERE email = '$email'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    
        $row = $result->fetch_assoc();

        
        if ($user_password===$row['PASSWORD']) {
            
            echo "<center><h2>You are successfully logged in!</h2></center>";
include 'info.html';

        } else {
        
            echo "<center><h2>Invalid password! Please try again.</h2></center>";
        }
    } else {
        
        echo "<center><h2>No user found with this email address.</h2></center>";
    }
}

$conn->close();
?>

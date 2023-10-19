<?php
// Database connection parameters
$host = "localhost"; // Change this to your MySQL host
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "details"; // Change this to your MySQL database name

// Create a connection to the MySQL database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle user data submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user data from the form
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $registration_number = $_POST["registration_number"];
    
    // SQL statement to insert user data into the database
    $insert_sql = "INSERT INTO user_details (phone_number, email, address, registration_number)
                  VALUES ('$phone_number', '$email', '$address', '$registration_number')";
    
    // Execute the SQL statement to insert user data
    if ($conn->query($insert_sql) === TRUE) {
        echo "<script>alert('Details saved successfull');</script> ";
        echo "<script>window.location.href = 'welcome.php';</script> ";
        
    } 
    else {
        echo "Error: " . $insert_sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

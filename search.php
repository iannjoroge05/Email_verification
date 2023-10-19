<?php
// Database connection parameters (use the same credentials as in the previous code)
$host = "localhost";
$username = "root";
$password = "";
$database = "details";

// Create a connection to the MySQL database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Check if the search form was submitted
    $search_registration_number = $_GET["search_registration_number"];
    
    // SQL statement to search for user details by registration number
    $search_sql = "SELECT * FROM user_details WHERE registration_number = '$search_registration_number'";
    
    // Execute the SQL statement
    $result = $conn->query($search_sql);
    
    if ($result->num_rows > 0) {
        // User details found
        while ($row = $result->fetch_assoc()) {
            echo "Phone Number: " . $row["phone_number"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "Address: " . $row["address"] . "<br>";
            echo "Registration Number: " . $row["registration_number"] . "<br>";
        }
    } else {
        echo "User not found.";
    }
}

// Close the database connection
$conn->close();
?>

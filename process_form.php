<?php
// Include the db.php file to connect to the database
include('connect.php');

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $full_name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $properties = $_POST['properties'];
    $problem = $_POST['problem'];

    // Prepare the SQL query with placeholders
    $sql = "INSERT INTO waitlist (full_name, email, phone, properties, problem) 
            VALUES (?, ?, ?, ?, ?)";

    // Prepare the statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind the parameters to the prepared statement
        $stmt->bind_param("sssss", $full_name, $email, $phone, $properties, $problem);

        // Execute the statement
        if ($stmt->execute()) {
            
        } else {
            echo "There was an error with the submission: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Failed to prepare the SQL statement.";
    }
}

// Close the database connection
$conn->close();
?>

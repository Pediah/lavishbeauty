<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "Machoman_21";
$dbname = "visit_booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $day = mysqli_real_escape_string($conn, $_POST['day']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);

    // Prepare SQL statement
    $sql = "INSERT INTO bookings (name, email, subject, department, day, time) 
            VALUES ('$name', '$email', '$subject', '$department', '$day', '$time')";

    if ($conn->query($sql) === TRUE) {
        // Booking successfully inserted
        echo "<script>alert('Booking placed successfully!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
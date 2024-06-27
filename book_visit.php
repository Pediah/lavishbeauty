<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$port = "3307";
$username = "root";
$password = "";
$dbname = "";

$dsn = "mysql:host=$servername;port=$port;dbname=$dbname;charset=utf8mb4";

try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL statement
    $stmt = $pdo->prepare("INSERT INTO bookings (name, email, subject, department, day, time) VALUES (:name, :email, :subject, :department, :day, :time)");

    // Bind parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':department', $department);
    $stmt->bindParam(':day', $day);
    $stmt->bindParam(':time', $time);

    // Set parameters and execute
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $department = $_POST['department'];
    $day = $_POST['day'];
    $time = $_POST['time'];

    $stmt->execute();

    echo "New record created successfully";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection
$pdo = null;
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form data validation and sanitization should be performed here.
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];
    $specialreq = $_POST['special-requests'];

    // Database connection parameters
    $servername = "localhost"; // Change to your database server hostname
    $username = "root"; // Change to your database username
    $password = ""; // Change to your database password (if any)
    $dbname = "test"; // Change to your database name

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL INSERT statement
    $stmt = $conn->prepare("INSERT INTO reservation (name, email, phone, date, time, guests, specialreq) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssis", $name, $email, $phone, $date, $time, $guests, $specialreq);

    if ($stmt->execute()) {
        echo "Booking done";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement and database connection
    $stmt->close();
    $conn->close();
}
?>

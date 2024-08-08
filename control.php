<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_controller"; // Ensure this is the correct database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['direction'])) {
        $direction = $_POST['direction'];

        // Escape special characters in the direction string
        $direction = $conn->real_escape_string($direction);

        $sql = "INSERT INTO commands (RobotDirections) VALUES ('$direction')";

        if ($conn->query($sql) === TRUE) {
            echo "New command recorded successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Missing direction value";
    }
}

$conn->close();
?>

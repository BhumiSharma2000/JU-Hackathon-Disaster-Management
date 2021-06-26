<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sapds";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$item=$_GET['c_item'];
$sql = "DELETE FROM addcheck WHERE c_item='$item'";

if ($conn->query($sql) === TRUE) {
    header ("location:checklist2.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

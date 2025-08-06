
<?php
$host = "10.0.2.159";
$user = "root";       // change if needed
$pass = "Secret55";           // change if needed
$db = "agenda";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

?>


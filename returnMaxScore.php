<?php

$servername = "localhost";
$username = "niranjan";
$password = "anandam";
$dbname = "MemoryControl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT MAX(score) AS MAX_SCORE FROM MemoryGameStats";
$result = $conn->query($sql);

while($row = $result->fetch_array(MYSQLI_BOTH)) {
  $array[] = array(
    'MAX_SCORE' => $row[0]
  );
}
header('Content-Type: application/json');

echo json_encode($array);

$conn->close();

?>
<?php

parse_str($_SERVER['QUERY_STRING'], $get_array);

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

$sql = "SELECT COUNT(DISTINCT score) AS POSITION FROM MemoryGameStats WHERE score >". $get_array['Score'] ."";
$result = $conn->query($sql);

while($row = $result->fetch_array(MYSQLI_BOTH)) {
  $array[] = array(
    'CURRENT_POSITION' => $row[0]
  );
}
header('Content-Type: application/json');

echo json_encode($array);

$conn->close();

?>
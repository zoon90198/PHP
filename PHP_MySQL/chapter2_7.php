<?php
$servername = "localhost";
$username = "jerry";
$password = "12345";
$dbname = "myDB";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

#SELECT * FROM `myguests` WHERE `firstname` = "john"
$sql = "SELECT * FROM myguests WHERE firstname = 'john'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<?php

$server_name = "localhost";
$user_name = "phpuser";
$password = "password";
$database_name = "phpdb";

// create connection
$connect = new mysqli($server_name, $user_name, $password, $database_name);

// check connection
if (!$connect){
    die("fail to connect to database. error : ".mysqli_connect_error());
}

// $sql = "select id, first_name, last_name, phone_number, email, qualification from users where id = ?";
$sql = "select * from users;";


$result = $connect -> query($sql);

if ($result -> num_rows > 0){
    while ($line = $result -> fetch_assoc()){
        echo "id : ".$line["id"]."<br>";
        echo "first name : ".$line["first_name"]."<br>";
        echo "last name : ".$line["last_name"]."<br>";
        echo "phone number : ".$line["phone_number"]."<br>";
        echo "email : ".$line["email"]."<br>";
        echo "qualification : ".$line["qualification"]."<br>";
    }
}
else{
    echo "table is empty.";
}

$statement->close();
$connect->close();



$userid = $_GET['id'];
$sql = "SELECT id, first_name, last_name, phone_number, email, qualification FROM users WHERE id = $userid";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
    echo "id : ".$row["id"];

    
}
} else {
    echo "0 results";
}
?>
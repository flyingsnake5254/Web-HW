<?php

$server_name = "localhost";
$user_name = "phpuser";
$password = "password";
$database = "phpdb";

// create connection
$connect = new mysqli($server_name, $user_name, $password, $database);

// check connection
if ($connect -> connect_error){
    die("Fail to connect to database. Error : ".$connect -> connect_error);
}

$sql = "create table user (
    id int auto_increment primary key,
    email varchar(30) not null unique,
    password varchar(30) not null);";
// prepare and bind
$statement = $connect -> prepare($sql);

if ($statement -> execute()){
    $email = "user@gmail.com";
    $password = "password";
    $sql = "insert into user (email, password) values (?, ?)";
    $statement = $connect -> prepare($sql);
    $statement -> bind_param("ss", $email, $password);
    if ($statement -> execute()){
        echo "<script>alert(`創建成功`);</script>";
    }
    else{
        $error_msg = $connect -> error;
        echo "<script>alert(`$error_msg`);</script>";
    }
    
}
else{
    $error_msg = $connect -> error;
    echo "<script>alert(`$error_msg`);</script>";
}

$statement -> close();
$connect -> close();

?>
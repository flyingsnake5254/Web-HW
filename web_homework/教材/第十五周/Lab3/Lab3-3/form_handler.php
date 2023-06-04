<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];

    
   
    $check_empty = "";

    // Validate email
    if (strlen($email) == 0 || !isset($email) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $check_empty .= "email,";
    }

    // Validate password
    if (strlen($password) == 0 || !isset($password) || empty($password) || !preg_match("/^[a-zA-Z0-9]+$/", $password)) {
        $check_empty .= "password,";
    }
    $_SESSION['mstatus'] = $check_empty;
    // If there were errors, generate a JavaScript alert
    if ($check_empty != "") {
        $_SESSION['account_wrong'] = $check_empty."不可為空，且須符合格式";
        header('Location: form.php');
    }
    else{
        
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
        $sql = "select password from user where email = ?";
        $statement = $connect -> prepare($sql);
        $statement -> bind_param("s", $email);
        $statement -> execute();

        $result = $statement -> get_result();

        if ($result -> num_rows > 0){
            while ($line = $result -> fetch_assoc()){
                if ($line["password"] == $password){
                    $_SESSION["user_email"] = $email;
                    $_SESSION["user_password"] = $password;
                    header('Location: main_page.php');
                }
                else{
                    $_SESSION['account_wrong'] = "帳號或密碼錯誤";
                    header('Location: form.php');
                }
            }
        }
        else{
            $_SESSION['account_wrong'] = "帳號或密碼錯誤";
            header('Location: form.php');
        }

        $statement->close();
        $connect->close();
 
       }
    }
  
?>
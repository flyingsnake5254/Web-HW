<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript lab 1-2</title>

    

    <style>
        body, html {
            background-color: black;
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        .div_buttons {
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
        }

        .button_style {
            margin: 30px;
        }

        .font_style {
            font-family: Georgia, serif;
            font-size: 50px;
            letter-spacing: 5px;
            word-spacing: 6px;
            color: #ffffff;
            font-weight: 500;
            text-decoration: none;
            font-style: normal;
            
            text-align: center;
            margin-top: 50px;
        }
    </style>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>
<body id="vanta_bg">   
    
    <div class="container">
        <div class="row">
            <div class="column">
                <p class="font_style">
                    <?php
                        echo "User email : ".$_SESSION["user_email"]."<br>";
                        echo "User password : ".$_SESSION["user_password"]."<br>";
                    ?>
                </p>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
    <script>
    VANTA.NET({
    el: "#vanta_bg",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00,
    color: 0x3fa4ff
    })
    </script>

    <!-- Bootstrap js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
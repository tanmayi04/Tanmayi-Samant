<?php
    session_start();
    if(isset($_SESSION['uid'])){
        header("location:dashboard.php");
    }
    
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="FoodiT_logo.png">
    <link rel="stylesheet" href="Style.css">
    <title>FoodiT</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="logo-box">
            <img src="FoodiT_logo.png" alt="FoodiT Logo" class="logo">
        </div>

        <div class="text-area">
            <h1 class="heading-primary">
                <span class="heading-primary-main">FoodiT</span>
                <span class="heading-primary-sub">create healthy habits</span>
                <span class="heading-primary-last">not restrictions</span>
            </h1>
        </div>

        <button type="button" onclick="run()" class="start-button">
                    Let's Start
        </button>

        <section>
                <svg id="curve" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 244.52">
                    <path class="st0" d="M-9.1,192.7c242.9-109.5,410.5-247,699.3-83.9c383.6,216.5,716.5-19.2,716.5-19.2v173.5H-9.1V192.7z"/>
                </svg>
        </section>

        
        
        <script>
        function run()
        {
            window.location.href="Login.php";
        }
        </script>
    </header>
</body>
</html>

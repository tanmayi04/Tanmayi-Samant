<?php
    session_start();
    if(isset($_SESSION['uid'])){
        header("location:dashboard.php");
    }
    include 'dbconnect.php';
    if(isset($_POST['submit'])){
        echo "a";
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $query="select * from users where email='$email' and password='$pass'";
        $run=mysqli_query($connect,$query);
        $fetch=mysqli_fetch_assoc($run);
        if(mysqli_num_rows($run)==1){
            $_SESSION['uid']=$fetch['uid'];
            header("location:dashboard.php");
        }
        else{
        echo '<script>alert("Incorrect email or password");setTimeout(function(){ window.location="Login.php";  }); </script>';
    
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="shortcut icon" type="image/png" href="FoodiT_logo.png">
    
    <title>FoodiT - Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="Login.css">

</head>
<body>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="shortcut icon" type="image/png" href="Images/FoodiT_logo.png">
            <link rel="stylesheet" href="css/Style.css">
            <title>FoodiT</title>
        
            <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
        </head>
        <body>
            <header class="header">
                <div class="logo-box">
                    <img src="FoodiT_logo.png" alt="FoodiT Logo" class="logo">
                </div>
                <div class="text-area">
                        
                        <div class="main">
                                <div class="col-md-6 col-sm-12">
                                   <div class="login-form">
                                       <h1>Login</h1>
                                      <form action="Login.php" method="POST" class="form">
                                         <div class="form-group">
                                            <label>User Name</label>
                                            <input name="email" type="email" class="form-control" placeholder="Email" required>
                                         </div>
                                         <div class="form-group">
                                            <label>Password</label>
                                            <input name="pass" type="password" class="form-control" placeholder="Password" required>
                                         </div>
                                         <div class="center">
                                            <button type="submit" name="submit" id="login" class="btn btn-secondary">Login</button>  
                                         </div>
                                         <hr>
                                      </form>
                                      <div class="resgister-button">
                                        <label for="Register">If you are New User Click here <span class="emoji">👉</span></label>
                                        <button class="btn btn-dark" id="Register" onclick="run()">Register</button>
                                      </div>
                                    </div>
                                </div>
                        </div>

                </div>
                
                <section>
                        <svg id="curve" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 244.52">
                            <path class="st0" d="M-9.1,192.7c242.9-109.5,410.5-247,699.3-83.9c383.6,216.5,716.5-19.2,716.5-19.2v173.5H-9.1V192.7z"/>
                        </svg>
                </section>
                
                <script>
                        function run()
                        {
                            window.location="Register.php";
                        }
                    </script>
                
            </header>
        </body>
        </html>
            
</body>
</html>

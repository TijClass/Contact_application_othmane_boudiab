<?php 
$connection = mysqli_connect("localhost","root","",'contactinfo');

    session_start();

    if(isset($_POST['login']) and !empty($_POST['email']) and !empty($_POST['password']))
    {
        extract($_POST);
        $email = $_POST['email'];
        $password=$_POST['password'];
        $sql= "SELECT * FROM `loginuser` WHERE `loginuser`.`email`='$email'";
        $query = mysqli_query($connection,$sql);
        // $query_run = mysqli_num_rows($query);
        // die($query_run);
        if(mysqli_num_rows($query) != 0)
        {
                $ligne=mysqli_fetch_assoc($query);
                
                }
                if($password == $ligne['password']){
                    $_SESSION['email']=$ligne["email"];
                    $_SESSION['login'] = true;
                    header('Location: index.php');
                    
            // $_SESSION['password']=$password;
            // header('Location: index.php');
        }
        else
        {

            // die("SELECT * FROM login WHERE email='$email' AND password='$password'");
            echo '<script> alert("login in failed"); </script>';
        }
    }
        



// if(isset($_POST['login']))
// {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $query = "SELECT * FROM `login` WHERE `email`='$email' AND `password`='$password'";
//     $query_run = mysqli_query($connection, $query);

//     if(mysqli_fetch_array($query_run)>0)
//     {
//         echo '<script> alert("login in success"); </script>';
//         header('Location: index.php');
//     }
//     else
//     {
//         echo '<script> alert("login in failed"); </script>';
//         header('Location: login.php');
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Login</title>
</head>
<body>

    <div class="titl">
        <h1>WELCOME TO YOU<span class="logo">CO</span></h1>
    </div>


    <div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>WELCOME sub_title</h3>
                    <p>
                    lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a href="#">Read More</a>
                    
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Login :</h3>
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btnSubmit" name="login">Login</button>
                            <!-- <input type="submit" class="btnSubmit" name="login" value="Login" /> -->
                            <input type="checkbox" name="remember_me" id="remember_me" class="remember_check">
							<label class="remember" for="remember_me">Remember Me!</label>
                        </div>
                     
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
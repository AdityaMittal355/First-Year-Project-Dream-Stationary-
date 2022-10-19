<?php

include 'partial/_dbconnect.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Username = $_POST["Username"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    // $sql = "INSERT INTO `loginform` ( `User`, `Email`, `Pass`) VALUES ( $Username, $email, $pass)";
    $sql = "Select * from loginform where email='$email' AND pass='$pass'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num==1){
        header("location: index2.php");
    }
    else{
        echo "<script>alert('Incorrect Combination !')</script>";
    }

}
?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="cssforlogin.css">
</head>
<body>
    
    <div class="hero">
        <nav>
            <a href="index.php"><img src="logo.png" alt=""></a>
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
            
        </nav>

        <div class="container">
            <h1>Login</h1>
            <form action="" method="post">
                <p class="txt">
                    <input type="email" name="email" id="email" placeholder="Your Email" required>
                </p>

                <p class="txt">
                    <input type="password" name="pass" id="pass" placeholder="Password" required>
                </p>

                <p class="fogpas">
                    Forgot Password? <a href="">Reset Password</a>
                </p>

                <p>
                    <input type="submit" value="Login">
                </p>

                <p class="newmem">
                    Not a Member? <a href="signup.php">Sign Up</a>
                </p>
            </form>

        </div>

        
    </div>
    
</body>
</html>
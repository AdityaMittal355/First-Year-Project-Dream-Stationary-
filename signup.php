<?php
include 'partial/_dbconnect.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Username = $_POST["Username"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    // $sql = "INSERT INTO `loginform` ( `User`, `Email`, `Pass`) VALUES ( $Username, $email, $pass)";
    $sql = 'INSERT INTO `loginform` ( `User`, `Email`, `Pass`) VALUES ( "'.$Username.'", "'.$email.'", "'.$pass.'")';
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Registration Successful ! Please Login')</script>";
    }

}
?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
            <h1>SignUp</h1>
            <form action="" method="POST">
                <p class="txt">
                    <input type="text" name="Username" id="Username" placeholder="Username" required>
                </p>

                <p class="txt">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </p>

                <p class="txt">
                    <input type="password" name="pass" id="pass" placeholder="Password" required>
                </p>
                    <br>
                <p>
                    <input class="btn" type="submit" value="Submit">
                </p>

            </form>

        </div>

        
    </div>
    
</body>
</html>
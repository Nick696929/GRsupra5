<?php

$login = false;
$showErr = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'database/connectingDB.php';
    $username = $_POST['username'];
    $spass = $_POST['spass'];
    
    //$sql = "SELECT * FROM signup WHERE username='$username' AND password='$spass'";
    $sql = "SELECT * FROM signup WHERE username='$username' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while($row=mysqli_fetch_assoc($result)){
            if(password_verify($spass, $row['password'])){
                 $login = true;
                 session_start();
                 $_SESSION['login'] = true;
                 $_SESSION['username']=$username;
                 header("location:index.php");
            }
        }
     
    } else {
        $showErr = "Invalid credentials";
    }
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toyota GR-Supra5 login page</title> <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css1/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style=" margin: 0;
    padding: 0;
    background-color: #0e031a;
    font-family: lato, sans-serif;">
    <?php
    if ($login) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> You are logged in.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    if ($showErr) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong style="margin-right:15px">Alert! :-</strong>' . $showErr . '
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    ?>
      <main>
       

       <div class="signup">
             <span>Not a member?</span>
            <a href="sign.php"> <button  class="buttonal"type="button">Sign up</button></a>
         </div>
 
         <div class="back-layer">
         <form action="login.php" method="POST"class="login-form active" >
                 <h2>Login</h2>
                 <label for="lemail">User Name</label>
                 <input type="text" id="lemail" name="username" placeholder="User Name">
                 <label for="lpassword">Password</label>
                 <input type="password" id="lpassword" name="spass" placeholder="******">
                 <a href="reset" style="font-size: small; text-decoration: underline; color: black; margin: 10px;">Forgot Password</a>
                 <button class="buttonal" name="submit" type="submit">Login</button>
             </form>
             </div>
     </main>
</body>

</html>
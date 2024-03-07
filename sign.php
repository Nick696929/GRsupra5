<?php

$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'database/connectingDB.php';
    $username = $_POST['username'];
    $semail = $_POST['semail'];
    $spass = $_POST['spass'];
    $cpass = $_POST['cpass'];
    // $exists = false;
    $existsql = "SELECT * FROM `signup` WHERE username = '$username'";
    $result1 = mysqli_query($conn, $existsql);
    $numExistRows = mysqli_num_rows($result1);
    if ($numExistRows > 0) {
       // $exists = true;
        $showError = "User already exists";
        

    } 
    else {
       // $exists = false; 
       if (($spass == $cpass)) {
        $hash=password_hash($spass,PASSWORD_DEFAULT);
        $sql = "INSERT INTO signup (`user_id`, `username`, `Email`, `password`, `Dt`) VALUES ('NULL','$username',  '$semail', '$hash', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $showAlert = true;

          }
        } else {
          $showError = "Password do not match";
             }
     }

}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css1/signup.css">
    <title>Toyota Costumer signup page</title>
</head>

<body>


    <?php
    if ($showAlert) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account is now created and you can login now.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }

    if ($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong style="margin-right:15px">Alert! :-</strong>' . $showError . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }

    ?>
    <main>

        <div class="login">
            <span>Already have an acount?</span>
            <a href="login.php"><button type="button">Login</button></a>
        </div>

        <div class="back-layer">
            <form action="sign.php" method="POST" class="signup-form">
                <h2>Sign Up</h2>
                <label for="f-name">User Name</label>
                <input type="text" id="f-name" name="username" placeholder="User Name">

                <label for="semail">Email</label>
                <input type="email" id="semail" name="semail" placeholder="person@email.com">
                <label for="spassword">Password</label>
                <input type="password" id="spassword" name="spass" placeholder="******">
                <label for="spassword">Confirm Password</label>
                <input type="password" id="spassword" name="cpass" placeholder="******">
                <button type="submit">Sign up</button>
            </form>
        </div>
    </main>
</body>

</html>
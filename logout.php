<?php
session_start();

session_unset();

session_destroy();
header("location:index.php");
exit;


//<div class="user">'.$_SESSION['username'].'</div> <div class="btnlogout">
         //   <a href="logout.php"> <button class="btnlog" type="submit" >Logout</button></a>
         //  </div>

?>
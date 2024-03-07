<?php
require"connectDB.php";
$sql_1="CREATE DATABASE testDB";
if(mysqli_query($conn,$sql_1))
{
    echo"DB created";
}
else{
    echo"error".mysqli_error($conn);
}
mysqli_close($conn);
?>
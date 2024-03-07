<?php
require"connectingDB.php";
$sql_2="CREATE TABLE signup(user_id INT(30)AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
Email VARCHAR(50) NOT NULL,
password VARCHAR(30) NOT NULL,
Dt DATETIME NOT NULL)";
if(mysqli_query($conn,$sql_2))
{
    echo"Table created";
}
else{
    echo"Error".mysqli_error($conn);
}
?>
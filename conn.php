<?php
$server = "localhost";
$user = "root";
$password ="";
$dbname = "login_form";
$conn = mysqli_connect($server, $user, $password, $dbname);
if($conn)
{
    //echo"connection okay";

}
else{
    echo"connection failed";
}



?>
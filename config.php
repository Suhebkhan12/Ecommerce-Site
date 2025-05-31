<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn)
{
    die("Database not connect".mysqli_connect_error());

}
else
{
   // echo "connect Database";
}

?>
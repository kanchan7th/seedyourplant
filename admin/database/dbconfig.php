<?php
$servername="localhost";
$db_username="root";
$db_password="";
$db_name="adminpanel";

$connection= mysqli_connect("$servername","$db_username","$db_password");
$dbconfig=mysqli_select_db($connection,$db_name);

if($dbconfig)
{
	echo"Database connected";

}
else
{
	echo"Database connection failed";
}
?>

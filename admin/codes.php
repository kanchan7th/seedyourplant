 <?php
session_start();

$connection=mysqli_connect("localhost","root","","adminpanel");
if(isset($_POST['submit']))
{
 $email_login=$_POST['emaill'];
 $password_login= $_POST['passwordd'];

$sql= "select * from register WHERE email='$email_login' AND password='password_login'";
$query_run=mysqli_query($connection,$query);
if(mysql_fetch_array($query_run))
	   {
	   	$_SESSION['email']=$email_login;
	   	header('location:index.php');
	   }
 else
 {
 	echo "$query";
 	 $_SESSION['status']="Email id/Password is invalid";
     header('location:login.php');
 }
}
?>
<?php
include('security.php');

$connection=mysqli_connect("localhost","root","","adminpanel");
 
 if(isset($_POST['registerbtn']))
{

	$username= $_POST['username'];
	$email= $_POST['email'];
	$password= $_POST['password'];
	$cpassword= $_POST['confirmpassword'];

       if($password===$cpassword)
       {
     $query="INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
	           $query_run=mysqli_query($connection,$query);
	
             if($query_run)
             {
	
	                $_SESSION['success']="Admin Profile is added";
	                  header('Location:register.php');
                             }
                    else
                {
	               $_SESSION['status']="Admin Profile is NOT added";
	                header('Location:register.php');
                }
                             }
                else{
	                 $_SESSION['status']="Password and confirm password does not match";
	                 header('Location:register.php');
                      }



}
?>

<!-- <?php
include('security.php');

if(isset($_POST['login_btn']))
{
 $email_login=$_POST['emaill'];
 $password_login=$_POST['passwordd'];

	$query="SELECT * FROM register WHERE email='$email_login' AND password='password_login'";
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
     header('location:.php');
 }
}
?> -->
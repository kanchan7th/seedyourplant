 $row= mysqli_num_rows(){
    	if($row == 1)
    	{
        echo"login successful";
        $_SESSION['email']=$email_login;
	   	header('Location:index.php');

    	}
    else
 {
 	
 	 $_SESSION['status']="Email id/Password is  invalid";
     header('location:login.php');
 }
}
// session_start();

// $con=mysqli_connect('localhost','root');

// $db=mysqli_select_db($con,'adminpanel');
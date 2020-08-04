<?php
session_start();
include('includes/header.php'); 
				function displayLogin(){
					echo <<<HTML
					<h2><center>Only for Administrators!</center></h2>
	<form name='login' method ='post' action ='$_SERVER[PHP_SELF]' style="padding: 2rem;">
		<center><table>
			<tr><td class="lead">Username :</td><td> <input type='text' name='username' style="margin:1rem;padding: 1.2rem; border-radius:2rem; background-color:#efefef" /></td></tr>
		<tr><td class="lead">Password :</td><td> <input type='password' name='password' style="margin:1rem; padding: 1.2rem; border-radius:2rem;background-color:#efefef" /></td></tr>
		<tr><input type='hidden' name='check1' value='1' /><tr>
		     
		</table>
		<button class="btn btn-success btn-lg" type="submit" style="margin:3rem;"><i class="fa fa-home"></i> Login</button></center>
	</form>
HTML;
				}

				function validateLogin($username,$password){
					$user = array();
					$con = mysqli_connect("localhost","root","","adminpanel");

					if(!$con){
						die("Cannot connect to server ".mysqli_connect_error());
					}
					$query = mysqli_query($con,"select * from register where (username='$username' and password='$password')");

					if(!$query){
						die("cannot perform query".mysqli_error($con));
					}
					while($row = mysqli_fetch_assoc($query)){
						$user = $row;
					}
					return $user;	
				}	
				if(isset($_POST['check1'])){
					if($user = validateLogin($_POST['username'],$_POST['password'])){
						$_SESSION['admin'] = $user;
						echo '<meta http-equiv="refresh"content="0;url=index.php" />';
					}
					else{
						echo"<div id='info'>Invalid admin username or password</div>";
						displayLogin();
					}
				}
				else{
					displayLogin();
				}
				?>
			</div>
		</div>
	</div>
</div>
<hr>
</div>   
 ?>
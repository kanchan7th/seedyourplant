<?php
session_start();
 
include('database/dbconfig.php');
 if($dbconfig)
 {

 }
 else{
 header("location:databse/dbconfig.php");

 }
 if(!$_SESSION['username'])
 {
 	 header('location:login.php');
 }
 ?>
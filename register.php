<?php
require 'connect.php';

// Function to insert User if not exists

function NewUser()
{
	$fname=trim($_POST['fname']);
    $lname=trim($_POST['lname']);
    $password=$_POST['pass'];
    $EMail=trim($_POST['EMail']);
    $Gender=trim($_POST['Gender']);
    $Country=trim($_POST['Country']);
    $City=trim($_POST['City']);
    $BirthDate=trim($_POST['BirthDate']);
    
	$query = "INSERT INTO users (F.Name,L.Name,PassWord,Email,gender,country,city,b.date) VALUES ('$fname','$lname','$password','$EMail','$Gender','$Country','$City','$BirthDate')";
    
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	   echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

//checking the 'mail' if exists before or not

function SignUp()
{
if(!empty($_POST['EMail']))   
{
	$query = mysql_query("SELECT * FROM users WHERE Email = '$_POST[EMail]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		NewUser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit_check'])) /// regButton 
{
	SignUp();
}









?>
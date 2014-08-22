<?php
	session_start();
	include "dbcon.php";
	$email = $_POST['email'];
	$username = $_POST['username'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$password = $_POST['pass'];


	$qrSudahAda = "SELECT username FROM user where username = '".$username."' ";
	$getSdh = mysql_query($qrSudahAda);
	$result=mysql_fetch_array($getSdh);
	$count=mysql_num_rows($getSdh);

	if ( $count >= 0)
	{

	}
	else
	{
		$qrDaftar ="INSERT INTO user (username,password,email,nama_depan,nama_belakang)
				values ('".$username."','".$password."','".$email."','".$fname."','".$lname."');
				";
		$result = mysql_query($qrDaftar);

		if($result)
		{
			$_SESSION['username']=$username;
		}	
	}

	
?>
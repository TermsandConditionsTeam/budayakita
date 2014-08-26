<?php
	session_start();
	include "dbcon.php";
	$email = $_POST['email'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$password = md5($_POST['pass']);

	$qrDaftar ="INSERT INTO user (password,email,nama_depan,nama_belakang)
				values ('".$password."','".$email."','".$fname."','".$lname."')
				";
	$result = mysql_query($qrDaftar);
	if($result)
	{
		$_SESSION['email']=$email;
		$_SESSION['fname']=$fname;
		$_SESSION['lname']=$lname;
		?>
		<script type="text/javascript">
			alert ('Daftar Berhasil');
			parent.location = 'index.php';
		</script>
		<?php
	}	

	
?>
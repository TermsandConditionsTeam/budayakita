<?php
	session_start();
	include 'dbcon.php';

	$email = $_POST['username'];
	$pass = md5($_POST['pass']);

	$qrlogin = "SELECT email, nama_depan, nama_belakang FROM user where email = '".$email."' AND password = '".$pass."'";
	$getUser = mysql_query($qrlogin);

	$result=mysql_fetch_array($getUser);
	$count=mysql_num_rows($getUser);
	if($count == 1)
	{
		$_SESSION['email']=$result['email'];
		$_SESSION['fname']=$result['nama_depan'];
		$_SESSION['lname']=$result['nama_belakang'];
		header("location:index.php");
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("Username atau Password salah");
			parent.location = 'index.php';
		</script>
		<?php
	}
?>
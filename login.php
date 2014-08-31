<?php
	session_start();
	include 'dbcon.php';

	$email = $_POST['username'];
	$pass = md5($_POST['pass']);

	$qrlogin = "SELECT id_tab_user, email, nama_depan, nama_belakang,login_time FROM user where email = '".$email."' AND password = '".$pass."'";
	$getUser = mysql_query($qrlogin);

	$result=mysql_fetch_array($getUser);
	$count=mysql_num_rows($getUser);
	if($count == 1)
	{
		$_SESSION['email']=$result['email'];
		$_SESSION['fname']=$result['nama_depan'];
		$_SESSION['lname']=$result['nama_belakang'];
		$_SESSION['login_time']=$result['login_time']+1;
		$_SESSION['id_tab_user']=$result['id_tab_user'];
		$qrTime = "UPDATE user SET login_time = ".$result['login_time']."+1 WHERE id_tab_user = ".$result['id_tab_user']." ";
		$resultLogin =  mysql_query($qrTime);
		if($resultLogin){
			header("location:index.php");	
		}
		
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
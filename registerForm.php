<div class="container">
	<h2 style="margin-left:220px;">Daftar</h2>
	<div style="border:2px solid;border-radius: 10px;width:500px;padding:10px 20px;background:yellow;margin:auto;">
		<form name="regist" action="register.php" autocomplete="off" role="form" method="post">
			<input style="height:35px;margin-bottom:10px;" name="email" id="email" type="email" class="form-control" placeholder="Email" required autofocus>
        	<input style="height:35px;margin-bottom:10px;" name="username" id="username" type="text" class="form-control" placeholder="Username" required>
        	<input style="height:35px;margin-bottom:10px;float:left;width:225px;" name="fname" id="fname" type="text" class="form-control" placeholder="Nama Depan" required>
        	<input style="height:35px;margin-bottom:10px;float:right;width:225px;" name="lname" id="lname" type="text" class="form-control" placeholder="Nama Belakang" required>
        	<input style="height:35px;margin-bottom:10px;" name="pass" id="pass" type="password" class="form-control" placeholder="Password" required>
			<button id="subsub" style="height:35px;line-height: 10px;" class="btn btn-lg btn-primary btn-block" type="submit">Create</button>
		</form>
	</div>
</div>
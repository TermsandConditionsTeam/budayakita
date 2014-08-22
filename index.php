<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--link rel="shortcut icon" href="../../assets/ico/favicon.ico"-->
    <title>Budaya Kita</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    

  </head>

  <body>
    <header>
      <div class="container">
        <div class="logo">
          <img src="assets/images/a.png" width="300" height="86" >
        </div>
        <div class="login">          
          <div class="user">Welcome!, 
            <?php
              if(!isset($_SESSION['username']))
              {
                echo 'Visitor
                      </div>
                      <ul style="list-style:none;" class="navbar-nav">
                        <li class="dropdown">
                          <a style="height:30px; margin-left:-40px;margin-right:10px;margin-top:-30px" href="#" data-toggle="dropdown">Masuk</a>
                          <div style="margin-left:-60px;width:300px;margin-top:19px;padding:10px 20px;background:green;border:none;" class="dropdown-menu">
                            <form name="login" action="login.php" autocomplete="off" role="form" method="post">
                              <input style="height:35px;margin-bottom:10px;" name="username" id="username" type="text" class="form-control" placeholder="Username" required autofocus>
                              <input style="height:35px;margin-bottom:10px;" name="pass" id="pass" type="password" class="form-control" placeholder="Password" required>
                              <button id="subsub" style="height:35px;line-height: 10px;" class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
                            </form>
                          </div>
                        </li>
                        <li style="margin-right:10px"><a id="daftar" href="#">Daftar</a></li>
                       </ul> 
                ';
              }
              else
                echo $_SESSION['username'].'
                      </div>
                      <ul style="list-style:none;" class="navbar-nav">
                        <li class="dropdown">
                          <a style="height:30px; margin-right:10px;margin-top:-10px" href="#" data-toggle="dropdown">Profile <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Edit Profile</a></li>
                            <li><a href="#">Lencanaku</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                          </ul>
                        </li>
                        <li style="margin-right:10px"><a href="#">Logout</a></li>
                      </ul>
                  ';
            ?>
        </div>
      </div>
    </header>
    <nav>
      <div class="container">
           <ul style="height:30px; margin-top:5px;margin-left:-20px;list-style: none;" class="navbar-nav">
              <li style="margin-right:10px"><a href="index.php">Home</a></li>
              <li style="margin-right:10px"><a href="#">Check In</a></li>
              <li style="margin-right:10px"><a href="#">Jelajah</a></li>              
              <li class="dropdown">
                <a style="height:30px; margin-right:10px;margin-top:-10px" href="#" data-toggle="dropdown">Permainan <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
              <li style="margin-right:10px"><a href="#">Bantuan</a></li>
           </ul>
      </div>
    </nav>

    <div id="contents" class="content">
      <div class="container">
        <div class="isi">
          <img src="a" width="970px"; height="400px";>
        </div>
      </div>
    </div>

    <div class="fitur">
      <div class="container">
        <div class="row">
           <div class="col-xs-4">
            <div class="partner-item">
              <img src="assets/images/partners/partner1.png" alt="">
            </div> <!-- /.partner-item -->
           </div>
           <div class="col-xs-4">
            <div class="partner-item">
              <img src="assets/images/partners/partner2.png" alt="">
            </div> <!-- /.partner-item -->
           </div>
           <div class="col-xs-4">
            <div class="partner-item">
              <img src="assets/images/partners/partner3.png" alt="">
            </div> <!-- /.partner-item -->
           </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        a
      </div>
    </footer>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $("#daftar").click(function(){
          $("#contents").load("registerForm.php");
        });
    </script>
  </body>
</html>

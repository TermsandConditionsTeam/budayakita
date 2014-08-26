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
    <link href="custom.css" rel="stylesheet">
    

  </head>

  <body>
    <header>
      <div class="container">
        <div class="logo">
          <a href="index.php"><img style="margin-top:8px;" src="assets/images/logo.png" alt="Logo" /></a>
        </div>
        <div class="login">          
          <div class="user">Selamat Datang,  
            <?php
              if(!isset($_SESSION['email']))
              {
                echo 'Pengunjung !
                      </div>
                      <ul style="list-style:none;" class="navbar-nav">
                        <li class="dropdown">
                          <a style="height:30px; margin-left:-40px;margin-right:10px;margin-top:-30px" href="#"  data-toggle="dropdown">Masuk</a>
                          <div style="margin-left:-60px;width:280px;margin-top:0px;padding:10px 20px;background:#990000;border:none;border-radius:10px;" class="dropdown-menu">
                            <form name="login" action="login.php" autocomplete="off" role="form" method="post">
                              <input style="height:35px;margin-bottom:10px;" name="username" id="username" type="text" class="form-control" placeholder="Email" required autofocus>
                              <input style="height:35px;margin-bottom:10px;" name="pass" id="pass" type="password" class="form-control" placeholder="Password" required>
                              <button id="subsub" style="height:35px;line-height: 10px;" class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
                            </form>
                          </div>
                        </li>
                        <li> | &nbsp</li>
                        <li style="margin-right:10px"><a id="daftar" href="#">Daftar</a></li>
                       </ul> 
                ';
              }
              else
              {
                echo $_SESSION['fname'].' '.$_SESSION['lname'].' !
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
                        <li style="margin-right:10px"><a href="logout.php">Logout</a></li>
                      </ul>
                  ';
              }
            ?>
        </div>
      </div>
    </header>
    <nav>
      <div class="container">
           <ul style="height:30px; margin-top:10px;margin-left:-20px;list-style: none;" class="navbar-nav">
              <li style="margin-right:10px"><a href="index.php">Home</a></li>
              <li style="margin-right:10px"><a href="#">Check In</a></li>
              <li style="margin-right:10px"><a href="#">Jelajah</a></li>              
              <li class="dropdown">
                <a style="height:30px; margin-right:10px;margin-top:-10px" href="#" data-toggle="dropdown">Permainan <b class="caret"></b></a>
                <ul style="margin-top:10px;border:none;background:#ffcc00;" class="dropdown-menu">
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
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="assets/images/foto1.png" width="930px" alt="foto1">
                <div class="carousel-caption">
                  <h3>caption 1</h3>
                  <p>caption 1</p>
                </div>
              </div>
              <div class="item">
                <img src="assets/images/foto1.png" width="930px" alt="foto2">
                <div class="carousel-caption">
                  <h3>caption 2</h3>
                  <p>caption 2</p>
                </div>
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="fitur">
      <div class="container">
        <div class="row">
           <div class="col-xs-4">
            <div class="partner-item">
              <a href="#"><img src="assets/images/ft_jelajahbudaya.png" alt=""></a>
            </div> <!-- /.partner-item -->
           </div>
           <div class="col-xs-4">
            <div class="partner-item">
               <a href="#"><img src="assets/images/ft_mulaipermainan.png" alt=""></a>
            </div> <!-- /.partner-item -->
           </div>
           <div class="col-xs-4">
            <div class="partner-item">
               <a href="#"><img src="assets/images/ft_lencana.png" alt=""></a>
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
    <div class="footer2">
      <div class="container">
        a
      </div>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $("#daftar").click(function(){
          $("#contents").load("registerForm.php");
        });
    </script>
  </body>
</html>

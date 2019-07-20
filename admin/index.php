<link href='css/bootstrap.min.css' rel='stylesheet' media='screen'>
<link href='css/xploit.css' rel='stylesheet'>
<link rel='stylesheet' type='text/css' href='../ic/css/all.css'>
<script src="../js/jq.js"></script>
<script src='../js/pe.shiner/jquery.pixelentity.shiner.min.js'></script>
<script> jQuery(document).ready(function () { $('.peShiner').peShiner();})</script>
<?php  
session_start();
include ("inc/fonc2.php") ;
  if(isset($_SESSION['userlogin']) and isset($_SESSION['passlogin']))
  {
    header("Location: control.php?file=control");
    exit;
  }
  echo '<body class="login">
      <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <title>Admin Cp</title>
           </div>
        </div>
      </header>
      <center>
        <div class="peShiner">
            <a class="text-muted" href="#"><img src="../img/dz.png" data-color="white" /></a>
          </div><div class="col-4 pt-1">
      <div class="card text-center ">';
      $msg="<div class='card-header'>Login</div>";
          if(isset($_POST['login']))  {
      $user = mysqli_real_escape_string($con,$_POST['user']);
      $pass = mysqli_real_escape_string($con,$_POST['pass']);
      if (!empty($_POST['user']) && !empty($_POST['pass'])){
        $query =("SELECT * FROM `dz` WHERE `user`='$user' AND `pass`='".sha1(md5($pass))."'");
        $login=mysqli_query($con,$query);
        if (mysqli_num_rows($login)>0){
        $_SESSION['userlogin'] = $user;
        $_SESSION['passlogin'] = $pass;
        $msg= "<div class='alert alert-success' id='shadow'><i class='icon-ok-sign'></i> Login Successful</div>";
        echo "<meta http-equiv='refresh' content='1;url=control.php?file=control'/>";
        }
        else{
           $msg= "<div class='alert alert-danger' id='shadow'><i class='icon-remove-sign'></i> Wrong Username or Password</div>";
        }
    }
      else 
      {
         $msg= "<div class='alert alert-danger' id='shadow'><i class='icon-remove-sign'></i> Please Enter Username and Password</div>";
      }
      }
echo $msg;
echo '
<div class="card-body">
  <form role="form" method="POST" enctype="application/x-www-form-urlencoded"  >
    <div class="form-group mx-sm-3 mb-2">
      <input type="text" class="form-control" name="user" required placeholder="Enter Username ">
    </div>
    <div class="form-group mx-sm-3 mb-2">
      <input type="password" class="form-control" name="pass" required placeholder="Enter Password">
    </div>
    <hr>
    <div class="form-group mx-sm-3 mb-2">
      <button type="submit" value="Login" class="btn btn-primary" name="login" id="login" >
      <i class="fas fa-sign-in-alt"></i>
      Login
      </button>
    </div>
  </form>
  </center>';
?>


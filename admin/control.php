<?php 
session_start();
if(!isset($_SESSION['userlogin']) && !isset($_SESSION['passlogin']))
{
header("Location: index.php");
exit;
}
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Xploits Admin Panel</title>
<!-- Bootstrap -->
<link href='css/bootstrap.min.css' rel='stylesheet' media='screen'>
<link href='css/dz-admin.css' rel='stylesheet'>
<link rel='stylesheet' type='text/css' href='../ic/css/all.css'>
<script src='../js/bootstrap.min.js'></script>
<style>
#shadow
{
text-shadow: 1px 1px 3px #828282;
filter: dropshadow(color=#828282, offx=1, offy=1);
}
#frame
{
border: 1px;
}
</style>
";
echo '
<nav class="navbar navbar-expand navbar-dark  static-top">
  <a class="navbar-brand mr-1" href="#">Kadnass-Dz </a>
  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
  <i class="fas fa-bars"></i>
  </button>
  <!-- Navbar Search -->
  <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button">
        <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>
  <!-- Navbar -->
  <ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link" href="logout.php" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-sign-out-alt"></i>
      </a>
        </li>
  </ul>
</nav>
<div id="wrapper">
  <!-- Sidebar -->
  <ul class="sidebar navbar-nav">
    <li class="nav-item ">
      <a class="nav-link" href="?file=control">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        Overview
      </a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="?file=overview">
        <i class="fa fa-paperclip" aria-hidden="true"></i>
        ALL Exploit
      </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="?file=add_ex">
        <i class="fas fa-bug"></i>
      Add Exploit</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?file=cat">
        <i class="fas fa-plus "></i>
        Category
      </a>
    </li> 
    <li class="nav-item">
      <a class="nav-link" href="?file=platform">
        <i class="fas fa-database "></i>
        PlatForm
      </a>
    </li>
  <li class="nav-item">
    <a class="nav-link" href="?file=author">
      <i class="fa fa-user" aria-hidden="true"></i>
      Author
    </a> 
  </ul>
  <div id="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">';
            $over=htmlentities($_GET['file']) ;
            echo $over;
            echo '
          </a></li>
          <li class="breadcrumb-item active"></li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">   
        </div>';
		if($_GET['file'] == 'control')
		{
    echo "<iframe src='controls.php'  width='100%' height='100%' id='frame'></iframe>";
		}
		elseif($_GET['file'] == 'overview')
		{
			echo "<iframe src='overview.php'  width='100%' height='100%' id='frame'></iframe>";
		}
		elseif($_GET['file'] == 'add_ex')
		{
			echo "<iframe src='add_ex.php'  width='100%' height='100%' id='frame'></iframe>";
		}
		elseif($_GET['file'] == 'cat')
		{
			echo "<iframe src='cat.php'  width='100%' height='100%' id='frame'></iframe>";
		}
		elseif($_GET['file'] == 'platform')
		{
			echo "<iframe src='platform.php'  width='100%' height='100%' id='frame'></iframe>";
		}
    elseif($_GET['file'] == 'author')
    {
      echo "<iframe src='author.php'  width='100%' height='100%'  id='frame'></iframe>";
    }
		elseif($_GET['file'] == 'logout')
		{
			echo "<iframe src='logout.php'  width='100%' height='100%'  id='frame'></iframe>";
		}
    else{
      echo "<title>404 Not Found</title>
   <div class='alert alert-danger text-center' role='alert'>404 Not Found</div> ";
    }
	echo " </div></div><!--/span--></div><!--/row--></div><!--/.fluid-container-->";
?>
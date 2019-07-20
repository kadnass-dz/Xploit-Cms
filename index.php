<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <base href="/" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/xploit.css" rel="stylesheet">
    <link href="ic/css/all.css" rel="stylesheet">
    <!-- Bootstrap core JS -->
    <script src="js/jq.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- logo effect -->
    <script src='js/pe.shiner/jquery.pixelentity.shiner.min.js'></script>
    <script> jQuery(document).ready(function () { $('.peShiner').peShiner();})</script>
    <!-- search url -->
    <script>function prettySubmit(form, evt) {evt.preventDefault();window.location = form.action + '/' + form.search.value.replace(/ /g, '+');
   return false;
}    
</script>
  </head>
  <body>
  <div class="container">
<?php
include 'inc/fonc.php';
$sql = "SELECT * FROM categery";
$result =mysqli_query($con,$sql);
echo'<header class="blog-header py-3">
  <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1">
      <div class="peShiner">
        <a class="text-muted" href="index.php"><img src="img/dz.png" class="img-fluid" data-color="white" /></a>
      </div>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center">
    <form method="get"  onsubmit="return prettySubmit(this, event);"  action="search">
      <div class="search-box">
            <input type="text" name="search" placeholder="Type to search" class="search-txt">
            <button  type="submit" class="search-btn"><i class="fas fa-search"></i></button>
        </div>
    </form>
   </div>
  </div>
<nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="#"><i class="fa fa-home"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">';
      // row category  in nav
      while ($row =mysqli_fetch_assoc($result)) {
      echo '<li class="nav-item">
        <a class="nav-link" href="'.htmlspecialchars($row['name']).'/">'.htmlspecialchars($row['name']).'</a>
      </li>';
      }
      echo'
    </ul>
  </div>
</nav>
</header>
<div class="jumbotron p-3 p-md-5  rounded ">
';

// ACT HOME

  if (empty($_GET)){

# Web Applications
echo'
<title>Xploits By x19</title>
<div class="cont">
  <div class="card-body d-flex flex-column align-items-start">
    <h3 class="mb-0">
    <a href="" style="text-decoration: none;"> WebApp</a>
    </h3>
    <div class="mb-1 text-muted">This Category Includes Exploits For Web Applications</div>
  </div>
  <div class="show">
    <table class="table table-sm table-hover">
      <thead>
        <tr >
          <th scope="col"><font color="white" face="Tahoma" size="2"><i class="fa fa-bug"></i></th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Date</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Title Exploit</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Author</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Platform</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Hits</th>
        </tr>
      </thead>
      <tbody>';
        $sql = "SELECT * FROM  post WHERE cat=1 ORDER BY id DESC LIMIT 5 ";
        $result=mysqli_query($con,$sql);
        while  ($row =mysqli_fetch_assoc($result)) {
        echo ' <tr>
          <td ><font color="black" face="Tahoma" size="2"><i class="fa fa-bug"></i></font>
          </td>
          <td><font color="black" face="Tahoma" size="2">'.formatDate($row['date'] ).'</font>
          </td>
          <td><a href="exploit/'.$row['id'].'" ><font face="Tahoma"  size="2"> '.chortxt(htmlspecialchars($row['title'])).'</a></font>
        </td>
        <td><a href="author/'.htmlspecialchars($row['author']).'" ><font color="black" face="Tahoma" size="2">'.htmlspecialchars($row['author']).'</a></font>
      </td>
      <td ><font color="black" face="Tahoma" size="2"> '.htmlspecialchars($row['platform'] ).'</font>
      </td>
      <td ><font color="black" face="Tahoma" size="2"> '.htmlspecialchars($row['hits'] ).'</font>
      </td>
      ';
      }
    echo "</tr></tbody></table></div> ";

# Remote/Local Exploits
echo'<div class="cont">
  <div class="card-body d-flex flex-column align-items-start">
    <h3 class="mb-0">
    <a href="" style="text-decoration: none;"> Remote/Local </a>
    </h3>
    <div class="mb-1 text-muted">This Category Includes Exploits For Remote/Local </div>
  </div>
  <div class="show">
    <table class="table table-sm table-hover">
      <thead>
        <tr >
          <th scope="col"><font color="white" face="Tahoma" size="2"><i class="fa fa-bug"></i></th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Date</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Title Exploit</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Author</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Platform</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Hits</th>
        </tr>
      </thead>
      <tbody>';
        $sql = "SELECT * FROM  post WHERE cat=2 ORDER BY id DESC LIMIT 5 ";
        $result=mysqli_query($con,$sql);
        while  ($row =mysqli_fetch_assoc($result)) {
        echo ' <tr>
          <td ><font color="black" face="Tahoma" size="2"><i class="fa fa-bug"></i></font>
            <td><font color="black" face="Tahoma" size="2">'.formatDate($row['date'] ).'</font>
            </td>
            <td><a href="exploit/'.$row['id'].'" ><font face="Tahoma"  size="2"> '.chortxt(htmlspecialchars($row['title'])).'</a></font>
          </td>
          <td><a href="author/'.htmlspecialchars($row['author']).'" ><font color="black" face="Tahoma" size="2">'.htmlspecialchars($row['author']).'</a></font>
        </td>
        <td ><font color="black" face="Tahoma" size="2"> '.htmlspecialchars($row['platform'] ).'</font>
        </td>
        <td ><font color="black" face="Tahoma" size="2"> '.htmlspecialchars($row['hits'] ).'</font>
        </td>
        ';
        }
      echo "</tr></tbody></table></div> ";
# Tools
echo'<div class="cont">
  <div class="card-body d-flex flex-column align-items-start">
    <h3 class="mb-0">
    <a href="" style="text-decoration: none;"> Tools </a>
    </h3>
    <div class="mb-1 text-muted">This Category Includes Tools </div>
  </div>
  <div class="show">
    <table class="table table-sm table-hover">
      <thead>
        <tr >
          <th scope="col"><font color="white" face="Tahoma" size="2"><i class="fa fa-bug"></i></th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Date</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Title Exploit</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Author</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Platform</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Hits</th>
        </tr>
      </thead>
      <tbody>';
        $sql = "SELECT * FROM  post WHERE cat=4 ORDER BY id DESC LIMIT 5 ";
        $result=mysqli_query($con,$sql);
        while  ($row =mysqli_fetch_assoc($result)) {
        echo ' <tr>
          <td ><font color="black" face="Tahoma" size="2"><i class="fa fa-bug"></i></font>
            <td><font color="black" face="Tahoma" size="2">'.formatDate($row['date'] ).'</font>
            </td>
            <td><a href="exploit/'.$row['id'].'" ><font face="Tahoma"  size="2"> '.chortxt(htmlspecialchars($row['title'])).'</a></font>
          </td>
          <td><a href="author/'.htmlspecialchars($row['author']).'" ><font color="black" face="Tahoma" size="2">'.htmlspecialchars($row['author']).'</a></font>
        </td>
        <td ><font color="black" face="Tahoma" size="2"> '.htmlspecialchars($row['platform'] ).'</font>
        </td>
        <td ><font color="black" face="Tahoma" size="2"> '.htmlspecialchars($row['hits'] ).'</font>
        </td>
        ';
        }
      echo "</tr></tbody></table></div> ";
      }

//ACT GET EXPLOIT BY ID 

elseif (isset($_GET['exploit'])){
$id=(int)$_GET['exploit'];
$sql= "SELECT * FROM post  WHERE id='$id'";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0) {
while  ($row=mysqli_fetch_assoc($result)) {
$hits=$row['hits'];
$new_hits=$hits+1;
$sql1=("UPDATE post SET hits='$new_hits' WHERE id='$id' " );
$result1 = @mysqli_query($con, $sql1);
echo ' <title> '.htmlspecialchars($row['title']).'</title>
<div class="show">
  <table class="table table-sm table-hover">
    <thead class="">
      <tr >
        <th width="100" scope="col"><a href="author/'.htmlspecialchars($row['author']).'" ><font color="white" face="Tahoma" size="2">'.htmlspecialchars($row['author']).'</a></th>
        <th  scope="col"><font color="white" face="Tahoma" size="2">'.$row['title'].'</th>
        <th width="100"scope="col"><font color="white" face="Tahoma" size="2">'.formatDate($row['date']).'</th>
      </tr>
    </thead>
  </table>
  <textarea   name="body" type="text" class="form-control"  readonly="" placeholder="Enter exploit" style="height: 500px; width: 100%"  >'.htmlspecialchars($row['body']).'</textarea> ';
  }
  }
  else{
  echo "<div class='alert alert-danger text-center' role='alert'>404 Not Found</div> ";
  }
  }
  //ACT GET CATEGORY
  elseif (isset($_GET['cat'])){
  $showRecordPerPage = 12;
  if(isset($_GET['pagin']) && !empty($_GET['pagin'])){
  $currentPage = (int)$_GET['pagin'];
  }else{
  $currentPage = 1;
  }
  $startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
  $categerys=(int)$_GET['cat'];
  $sql= "SELECT * FROM post WHERE cat='$categerys'";
  $result=mysqli_query($con,$sql);
  $totalEmployee = mysqli_num_rows($result);
  $lastPage = ceil($totalEmployee/$showRecordPerPage);
  $firstPage = 1;
  $nextPage = $currentPage + 1;
  $previousPage = $currentPage - 1;
  $empSQL = "SELECT * FROM post WHERE cat='$categerys' ORDER BY id DESC LIMIT $startFrom, $showRecordPerPage";
  $empResult = mysqli_query($con, $empSQL);
  $count=mysqli_num_rows($empResult);
  $sql1="SELECT name FROM categery WHERE id='$categerys'";
  $result1=mysqli_query($con,$sql1);
  $rowcat= mysqli_fetch_assoc($result1);
  if($count>0){
  echo '
  <title>'.htmlspecialchars($rowcat['name']).'</title>
  <div class="cont">
    <div class="card-body d-flex flex-column align-items-start">
      <h3 class="mb-0">
      <a href="" style="text-decoration: none;">'.htmlspecialchars($rowcat['name']).'</a>
      </h3>
      <div class="mb-1 text-muted">This Category Includes '.htmlspecialchars($rowcat['name']).' </div>
    </div>
    <div class="show">
      <table class="table table-sm table-hover">
        <thead>
          <tr >
            <th scope="col"><font color="white" face="Tahoma" size="2"><i class="fa fa-bug"></i></th>
            <th scope="col"><font color="white" face="Tahoma" size="2">Date</th>
            <th scope="col"><font color="white" face="Tahoma" size="2">Title Exploit</th>
            <th scope="col"><font color="white" face="Tahoma" size="2">Author</th>
            <th scope="col"><font color="white" face="Tahoma" size="2">Platform</th>
            <th scope="col"><font color="white" face="Tahoma" size="2">Hits</th>
          </tr>
        </thead>
        <tbody>
          ';
          while($row= mysqli_fetch_assoc($empResult)){
          echo'<tr>
            <td ><font color="black" face="Tahoma" size="2"><i class="fa fa-bug"></i></font>
              <td><font color="black" face="Tahoma" size="2">'.formatDate($row['date'] ).'</font>
              </td>
              <td><a href="exploit/'.$row['id'].'" ><font face="Tahoma"  size="2"> '.chortxt(htmlspecialchars($row['title'])).'</a></font>
            </td>
            <td><a href="author/'.htmlspecialchars($row['author']).'" ><font color="black" face="Tahoma" size="2">'.htmlspecialchars($row['author']).'</a></font>
          </td>
          <td ><font color="black" face="Tahoma" size="2"> '.htmlspecialchars($row['platform'] ).'</font>
          </td>
          <td ><font color="black" face="Tahoma" size="2"> '.htmlspecialchars($row['hits'] ).'</font>
          </td>
          ';
          }
        echo "</tr></tbody></table></div> ";
        echo "
        <ul class='pagination pagination-sm justify-content-end'>
          ";
          if($currentPage != $firstPage) {
          echo  "
          <li class='page-item'>
            <a class='page-link' href='".htmlspecialchars($rowcat['name'])."/".$firstPage."'>
              <span aria-hidden='true'>First</span>
            </a>
          </li>";
          };
          if($currentPage >= 2) {
          echo  "
          <li class='page-item'>
            <a class='page-link' href='".htmlspecialchars($rowcat['name'])."/".$previousPage."'>".$previousPage."</a>
          </li>";
          }
          echo  "
          <li class='page-item'>
            <a class='page-link' href='".htmlspecialchars($rowcat['name'])."/".$currentPage."'>".$currentPage."</a>
          </li>";
          if($currentPage != $lastPage) {
          echo  "
          <li class='page-item'>
            <a class='page-link' href='".htmlspecialchars($rowcat['name'])."/".$nextPage."'>".$nextPage."</a>
          </li>";
          echo  "
          <li class='page-item'>
            <a class='page-link' href='".htmlspecialchars($rowcat['name'])."/".$lastPage."'>
              <span aria-hidden='true'>Last</span>
            </a>
          </li>";
          }
          echo '
        </ul>
      </div>
      ';
      }
      else
      {
      echo "<div class='alert alert-danger text-center' role='alert'>404 Not Found</div> ";
      }
      }

// ACT AUTHOR
elseif (isset($_GET['author'])){
$author=mysqli_real_escape_string($con,$_GET['author']);
$sql= "SELECT * FROM post  WHERE author='$author'";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0) {
echo'<div class="cont">
  <div class="card-body d-flex flex-column align-items-start">
    <h3 class="mb-0">
    <a href="" style="text-decoration: none;">'.htmlspecialchars($author).'</a>
    </h3>
    <div class="mb-1 text-muted">All Exploits For '.htmlspecialchars($author).'</div>
  </div>
  <div class="show">
    <table class="table table-sm table-hover">
      <thead>
        <tr >
          <th scope="col"><font color="white" face="Tahoma" size="2"><i class="fa fa-bug"></i></th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Date</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Title Exploit</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Author</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Platform</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Hits</th>
        </tr>
      </thead>
      <tbody>';
        while  ($row=mysqli_fetch_assoc($result)) {
        echo'<tr>
          <td ><font color="black" face="Tahoma" size="2"><i class="fa fa-bug"></i></font>
            <td><font color="black" face="Tahoma" size="2">'.formatDate($row['date'] ).'</font>
            </td>
            <td><a href="exploit/'.$row['id'].'" ><font face="Tahoma"  size="2"> '.chortxt(htmlspecialchars($row['title'])).'</a></font>
          </td>
          <td><a href="author/'.htmlspecialchars($row['author']).'" ><font color="black" face="Tahoma" size="2">'.htmlspecialchars($row['author']).'</a></font>
        </td>
        <td ><font color="black" face="Tahoma" size="2"> '.htmlspecialchars($row['platform'] ).'</font>
        </td>
        <td ><font color="black" face="Tahoma" size="2"> '.htmlspecialchars($row['hits'] ).'</font>
        </td>
        ';
        }
      echo "</tr></tbody></table></div> ";
      }
      else{
      echo "<div class='alert alert-danger text-center' role='alert'>404 Not Found</div> ";
      }
      }

// ACT  SEARCH

elseif (isset($_GET['search'])){
$search =htmlspecialchars(mysqli_real_escape_string($con,$_GET['search']));
$sql = "SELECT * FROM post WHERE body LIKE '%".$search."%' ";
$result =mysqli_query($con, $sql);
if (mysqli_num_rows($result)>0) {
echo'<div class="cont">
  <title>Search Results </title>
  <div class="card-body d-flex flex-column align-items-start">
    <div class="mb-1 text-muted">Search Results  For " '.htmlspecialchars($_GET['search']).' "</div>
  </div>
  <div class="show">
    <table class="table table-sm table-hover">
      <thead>
        <tr >
          <th scope="col"><font color="white" face="Tahoma" size="2"><i class="fa fa-bug"></i></th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Date</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Title Exploit</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Author</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Platform</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Hits</th>
        </tr>
      </thead>
      <tbody>';
        while  ($row=mysqli_fetch_assoc($result)) {
        echo'<tr>
          <td ><font color="black" face="Tahoma" size="2"><i class="fa fa-bug"></i></font>
            <td><font color="black" face="Tahoma" size="2">'.formatDate($row['date'] ).'</font>
            </td>
            <td><a href="exploit/'.$row['id'].'" ><font face="Tahoma"  size="2"> '.chortxt(htmlspecialchars($row['title'])).'</a></font>
          </td>
          <td><a href="author/'.htmlspecialchars($row['author']).'" ><font color="black" face="Tahoma" size="2">'.htmlspecialchars($row['author']).'</a></font>
        </td>
        <td ><font color="black" face="Tahoma" size="2"> '.htmlspecialchars($row['platform'] ).'</font>
        </td>
        <td ><font color="black" face="Tahoma" size="2"> '.htmlspecialchars($row['hits'] ).'</font>
        </td>
        ';
        }
      echo "</tr></tbody></table></div> ";
      }
      else{
      echo "
      <title>No Result Found </title>
      <div class='alert alert-danger text-center' role='alert'>No Result Found</div> ";
      }
      }
// ELSE OF ALL ACT
else{
   echo "
   <title>404 Not Found</title>
   <div class='alert alert-danger text-center' role='alert'>404 Not Found</div> ";
}
?>
</div>
</div>

  </body>
  </html>
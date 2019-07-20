
<?php
session_start();
if(!isset($_SESSION['userlogin']) && !isset($_SESSION['passlogin']))
{
header("Location: index.php");
exit;
}
 include 'inc/fonc2.php';
 echo "
  <title>Edit Exploit</title>
 <link href='css/bootstrap.min.css' rel='stylesheet' media='screen'>
 <link href='css/xploit.css' rel='stylesheet' media='screen'>
 <link rel='stylesheet' type='text/css' href='../ic/css/all.css'>
  <style>
  #shadow {
  text-shadow: 1px 1px 3px #828282;
        filter: dropshadow(color=#828282, offx=1, offy=1);
  }
  #frame {
  border: 1px;
  }
  textarea { 
  width: 500px; 
  min-width:300px; 
  max-height:300px; 
  
  height:400px; 
  min-height:400px;  
  max-height:400px;
  }
  body {
  background-color:#f5f5f5;
  }
  </style><center>
  <div class='bs-docs-example'>
  <div class='well' style='max-width: 100%; padding: 8px 0;'>";
  $showRecordPerPage = 12;
  if(isset($_GET['pagin']) && !empty($_GET['pagin'])){
  $currentPage = (int)$_GET['pagin'];
  }else{
  $currentPage = 1;
  }
  $startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
  $sql= "SELECT * FROM post";
  $result=mysqli_query($con,$sql);
  $totalEmployee = mysqli_num_rows($result);
  $lastPage = ceil($totalEmployee/$showRecordPerPage);
  $firstPage = 1;
  $nextPage = $currentPage + 1;
  $previousPage = $currentPage - 1;
  $empSQL = "SELECT * FROM post ORDER BY id DESC LIMIT $startFrom, $showRecordPerPage";
  $empResult = mysqli_query($con, $empSQL);
  $count=mysqli_num_rows($empResult);
  if($count>0){
echo '
<div class="cont">
  <div class="show">
    <table class="table table-sm table-hover">
      <thead>
        <tr >
          <th scope="col"><font color="white" face="Tahoma" size="2">ID</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Date</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Title Exploit</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Author</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Platform</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Hits</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Action</th>
        </tr>
      </thead>
      <tbody>
        ';
        while($row= mysqli_fetch_assoc($empResult)){
        echo'<tr>
          <td ><font color="black" face="Tahoma" size="2">'.$row['id'].'</font>
            <td><font color="black" face="Tahoma" size="2">'.formatDate($row['date'] ).'</font>
            </td>
            <td><a href="#'.$row['id'].'" ><font face="Tahoma"  size="2"> '.chortxt(htmlspecialchars($row['title'])).'</a></font>
          </td>
          <td><a href="#'.htmlspecialchars($row['author']).'" ><font color="black" face="Tahoma" size="2">'.htmlspecialchars($row['author']).'</a></font>
        </td>
        <td ><font color="black" face="Tahoma" size="2"> '.htmlspecialchars($row['platform'] ).'</font>
        </td>
        <td ><font color="black" face="Tahoma" size="2"> '.htmlspecialchars($row['hits'] ).'</font>
        </td>
        <td><font color="black" face="Tahoma" size="2"><a href="edit_po.php?id='.$row['id'].'"><i class="fas fa-edit"></i></a></font>
        <font color="black"  face="Tahoma" size="2"><a href="delete.php?del='.$row['id'].'"><i class="fas fa-trash"></i></a></font>
      </td>
      '; }
    echo "</tr></tbody></table></div> ";
    echo "
    <ul class='pagination pagination-sm justify-content-end'>
      ";
      if($currentPage != $firstPage) {
      echo  "
      <li class='page-item'>
        <a class='page-link' href='?pagin=".$firstPage."'>
          <span aria-hidden='true'>First</span>
        </a>
      </li>";
      };
      if($currentPage >= 2) {
      echo  "
      <li class='page-item'>
        <a class='page-link' href='?pagin=".$previousPage."'>".$previousPage."</a>
      </li>";
      }
      echo  "
      <li class='page-item'>
        <a class='page-link' href='?pagin=".$currentPage."'>".$currentPage."</a>
      </li>";
      if($currentPage != $lastPage) {
      echo  "
      <li class='page-item'>
        <a class='page-link' href='?pagin=".$nextPage."'>".$nextPage."</a>
      </li>";
      echo  "
      <li class='page-item'>
        <a class='page-link' href='?pagin=".$lastPage."'>
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
?>
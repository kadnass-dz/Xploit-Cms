<?php
	session_start();
	if(!isset($_SESSION['userlogin']) && !isset($_SESSION['passlogin']))
	{
		header("Location: index.php");
		exit;
	}
	echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>Delete</title>
  <link href='css/bootstrap.min.css' rel='stylesheet' media='screen'>
  <link rel='stylesheet' type='text/css' href='../ic/css/all.css'>
   <link href='css/xploit.css' rel='stylesheet' media='screen'>
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
	include ("inc/fonc2.php");
	$id= (int)$_GET['del'];
  $catid= (int)$_GET['cat'];
  $platid= (int)$_GET['plat'];
  $authorid= (int)$_GET['author'];


// delete posts
       if (isset($_GET['del'])){
       $query="SELECT * FROM  post  WHERE id=".$id ;
       $posts=mysqli_query($con,$query);
        if (isset($_POST['delete'])){
       $query="DELETE FROM post WHERE id=".$id ;
       $del_row =mysqli_query($con,$query);
         } 
echo '<div class="alert-danger">
  <div class="card-body d-flex flex-column align-items-start">
    <h5 class="mb-0">
    <a style="text-decoration: none;">Are You Sure You Want To Delete This Exploit !!</a>
    </h5>
    <div class="mb-2 text-muted">if you want to edit it just check this
      <a style="text-decoration: none;" href="edit_po.php?id='.$id.'" >link</a></div>
    </div>
  </div>
  </br>
  <div class="show">
    <table class="table table-sm table-hover">
      <thead class="">
        <tr >
          <th scope="col"><font color="white" face="Tahoma" size="2">Date</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Title Exploit</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Author</th>
          <th scope="col"><font color="white" face="Tahoma" size="2">Platform</th>
        </tr>
      </thead>
      <tbody>';       
   if (mysqli_num_rows($posts)>0) {
     while ($row=mysqli_fetch_assoc($posts)) { 
    	echo '  <tr class="table-light clickable-row " > 
     <td><font color="black" face="Tahoma" size="2">'. formatDate($row['date'] ).'</font>
     </td>
    <td><a href="exploit.php?id='. $row['id'].'" ><font face="Tahoma"  size="2"> '.  chortxt(htmlspecialchars($row['title'])).'</a></font>
     </td>
      <td><font color="black" face="Tahoma" size="2">'.  htmlspecialchars($row['author']).'  </font>
      </td>  
      <td ><font color="black"  face="Tahoma" size="2">'.  htmlspecialchars($row['platform'] ).'</font>
      </td>';
   echo "</tr></tbody></table></div>";
      echo '<form method="POST">
  <center>
    <button name="delete" type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete This Exploits</button></center>
  </form>';
}
 }
 else{
  echo"<div class='alert alert-danger'><i class='icon-exclamation-sign'></i><font id='shadow'>404</font></div>";
}
 }

// delete category
  elseif (isset($_GET['cat'])){
       $query="SELECT * FROM categery  WHERE id=".$catid;
       $categorys=mysqli_query($con,$query);
       if (isset($_POST['delete'])){
       $query="DELETE FROM categery WHERE id=".$catid;
       $del_row =mysqli_query($con,$query);
         } 
       echo '<div class="alert-danger">
  <div class="card-body d-flex flex-column align-items-start">
  	<h5 class="mb-0">
                <a style="text-decoration: none;">Are You Sure You Want To Delete This Category !!</a>
                   </h5>
  	 <div class="mb-2 text-muted">if you want to edit it just check this 
  	 	<a style="text-decoration: none;" href="cat.php?ecat='. $catid .'" >link</a></div>
  	 </div>
 </div>
</br>
<div class="sml">
  <div class="show">
  <table class="table table-sm table-hover ">
  <thead width="100">
    <tr >
      <th  width="100" scope="col"><font color="white" face="Tahoma" size="2">Category Name</th>
  </tr>
  </thead>
  <tbody>';
          if (mysqli_num_rows($categorys)>0) {
        	while($row =mysqli_fetch_assoc($categorys)) { 
    	echo '  <tr> 
     <td><font color="black" face="Tahoma" size="2">'. htmlspecialchars($row['name']) .'</font>
     </td>';
     }
  echo "</tr></tbody></table></div>";
  echo '<form method="POST">
  <center>
    <button name="delete" type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete This Category</button></center>
  </form>';
 } 
  else{
  echo"<div class='alert alert-danger'><i class='icon-exclamation-sign'></i><font id='shadow'>404</font></div>";
}
 }

// delete plate form 

      if (isset($_GET['plat'])){
       $query="SELECT * FROM platform  WHERE id=".$platid ;
       $platform=mysqli_query($con,$query);
       if (isset($_POST['delete'])){
       $query="DELETE FROM platform WHERE id=".$platid;
       $del_row =mysqli_query($con,$query);
         } 
       echo '<div class="alert-danger">
  <div class="card-body d-flex flex-column align-items-start">
    <h5 class="mb-0">
                <a style="text-decoration: none;">Are You Sure You Want To Delete This PlatForm !!</a>
                   </h5>
     <div class="mb-2 text-muted">if you want to edit it just check this 
      <a style="text-decoration: none;" href="platform.php?eplat='. $platid .'" >link</a></div>
     </div>
 </div>
</br>
<div class="sml">
  <div class="show">
  <table class="table table-sm table-hover ">
  <thead width="100">
    <tr >
      <th  width="100" scope="col"><font color="white" face="Tahoma" size="2">PlatForm Name</th>
  </tr>
  </thead>
  <tbody>';
      if(mysqli_num_rows($platform)>0) {
      while($row =mysqli_fetch_assoc($platform)) { 
      echo '  <tr> 
     <td><font color="black" face="Tahoma" size="2">'. htmlspecialchars($row['plat']) .'</font>
     </td>';
     }
  echo "</tr></tbody></table></div>";
  echo '<form method="POST">
  <center>
    <button name="delete" type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete This PlatForm</button></center>
  </form>';
 }
   else{
  echo"<div class='alert alert-danger'><i class='icon-exclamation-sign'></i><font id='shadow'>404</font></div>";
}
}

// delte author 
  elseif (isset($_GET['author'])){
       $query="SELECT * FROM author WHERE id=".$authorid ;
       $author=mysqli_query($con,$query);
       if (isset($_POST['delete'])){
       $query="DELETE FROM author WHERE id=".$authorid;
       $del_row =mysqli_query($con,$query);
         } 
echo '<div class="alert-danger">
  <div class="card-body d-flex flex-column align-items-start">
    <h5 class="mb-0">
    <a style="text-decoration: none;">Are You Sure You Want To Delete This Author !!</a>
    </h5>
    <div class="mb-2 text-muted">if you want to edit it just check this
      <a style="text-decoration: none;" href="author.php?eauthor='. $authorid .'" >link</a></div>
    </div>
  </div>
  </br>
 <div class="sml">
  <div class="show">
    <table class="table table-sm table-hover ">
      <thead width="100">
        <tr >
          <th  width="100" scope="col"><font color="white" face="Tahoma" size="2">Author Name</th>
        </tr>
      </thead>
      <tbody>';
        if(mysqli_num_rows($author)>0) {
        while($row =mysqli_fetch_assoc($author)) {
        echo '  <tr>
          <td><font color="black" face="Tahoma" size="2">'. htmlspecialchars($row['name']) .'</font>
          </td>';
          }
        echo "</tr></tbody></table></div>";
        echo '<form method="POST">
          <center>
          <button name="delete" type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete This Page</button></center>
        </form>';
        }
}

?>

  
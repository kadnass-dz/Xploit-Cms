<?php
	session_start();
	if(!isset($_SESSION['userlogin']) && !isset($_SESSION['passlogin']))
	{
		header("Location: index.php");
		exit;
	}
		include ("inc/fonc2.php");
		echo "
	<title>Category</title>
	<!-- Bootstrap -->
	<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/xploit.css' rel='stylesheet'>
	<link rel='stylesheet' type='text/css' href='../ic/css/all.css'>
	<style>
	#shadow {
	text-shadow: 1px 1px 3px #828282;
        filter: dropshadow(color=#828282, offx=1, offy=1);
	}
	#frame {
	border: 1px;
	}

	height:400px; 
	min-height:400px;  
	max-height:400px;
	}
	body {
	}
	</style><center>
	<div class='bs-docs-example'>
	<div class='well' style='max-width: 100%; padding: 8px 0;'>";
// part 1 

# edit author
		if (isset($_GET['eauthor'])){
        $msg="";
        $id= (int)$_GET['eauthor'];
       if (isset($_POST['authorname'])){
       	$nameauthor= mysqli_real_escape_string($con,$_POST['upauthor']);
       	$emailauthor= mysqli_real_escape_string($con,$_POST['upemail']);
       if (!empty($_POST['upauthor']) && !empty($_POST['upemail'])){
		$query ="UPDATE author  SET name='$nameauthor',email='$emailauthor' WHERE id=".$id ;
        $up_author = mysqli_query($con,$query);
		
       	if ($up_author){
    		$msg= "<div class='alert alert-success '>success update author  </div>";
    	}
    	else{
			$msg= "<div class='alert alert-danger '>error in updating !!</div>";
		}
		}
       	else{
       	$msg= "<div class='alert alert-danger '>Please fill all the fields !!</div>";
        }
        }

        $query1="SELECT * FROM author  WHERE id=".$id ;
        $editauthor=mysqli_query($con,$query1);
       while($row =mysqli_fetch_assoc($editauthor)) {
		 echo $msg;

	         echo "
	 <form method='POST'>
	<div class='text-center border border-light col-md-3'>
	<div class='input-group'>
	<div class='input-group-prepend'>
	<div class='input-group-text'><i class='fa fa-plus' aria-hidden='true'></i>
	</div>
	</div>
	<input  type='text'  class='form-control form-control-sm' id='inlineFormInputGroup' placeholder='Add New Author' name='upauthor' required value='".htmlspecialchars($row['name'])."'>
	</div>
	</div>
	<div class='text-center border border-light col-md-3'>
	<div class='input-group'>
	<div class='input-group-prepend'>
	<div class='input-group-text'><i class='fa fa-at' aria-hidden='true'></i>
	</div>
	</div>
	<input  type='email'  class='form-control form-control-sm' id='inlineFormInputGroup'  name='upemail' required 
	 value='".htmlspecialchars($row['email'])."'>
	</div>
	</div>
	<br>
	<input type='submit' name='authorname'' class='btn btn-info' value='Update'>
	</div></div><br>
	</center>
	</form>
	<hr>
";}
}

# add new author
else{
	if (isset($_POST['addauthor'])){
       	$addnameauthor= mysqli_real_escape_string($con,$_POST['adauthor']);
       	$addemailauthor= mysqli_real_escape_string($con,$_POST['ademail']);
       	if (!empty($_POST['adauthor']) && !empty($_POST['ademail'])){
		$query2 ="INSERT INTO author (name,email) VALUES ('$addnameauthor','$addemailauthor')";
		$result2 = mysqli_query($con,$query2);
		if ($result2){
				$msg= "<div class='alert alert-success '>success add new Author </div>";
		 }
		else{
				$msg= "<div class='alert alert-danger '>error in inserting !!</div>";
		}
		}
		else {
				$msg= "<div class='alert alert-danger '>Please fill all the fields !!</div>";
		}
}
			 echo $msg;
	         echo "
	 <form method='POST'>
	<div class='text-center border border-light col-md-3'>
	<div class='input-group'>
	<div class='input-group-prepend'>
	<div class='input-group-text'><i class='fa fa-plus' aria-hidden='true'></i>
	</div>
	</div>
	<input  type='text'  class='form-control form-control-sm' id='inlineFormInputGroup' placeholder='Author Name' name='adauthor' required >
	</div>
	</div>
	<div class='text-center border border-light col-md-3'>
	<div class='input-group'>
	<div class='input-group-prepend'>
	<div class='input-group-text'><i class='fa fa-at' aria-hidden='true'></i>
	</div>
	</div>
	<input  type='email'  class='form-control form-control-sm' id='inlineFormInputGroup' placeholder='Author Email ' name='ademail' required >
	</div>
	</div>
	<br>
	<input type='submit' name='addauthor' class='btn btn-info' value='Add New'>
	</div></div><br>
	</center>
	</form></body>
	<hr>
";
}

// part 2 row all Author  in page

 $query3="SELECT * FROM author ORDER BY id DESC" ;
 $result3 = mysqli_query($con,$query3);

 	echo '
 	<center>
	<div class="sml">
	<div class="show">
  <table class="table table-sm table-hover ">
  <thead width="100">
    <tr >
   	  <th scope="col" width="10"><font color="white" face="Tahoma" size="2">ID</th>
      <th scope="col"><font color="white" face="Tahoma" size="2">Author Name</th>
      <th scope="col"><font color="white" face="Tahoma" size="2">Author Email</th>
      <th scope="col"><font color="white" face="Tahoma" size="2">Author Exploit</th>
      <th colspan="2" width="20" scope="col"><font color="white" face="Tahoma" size="2">Action</th>
  </tr>
  </thead>
  <tbody>';
        	while($row =mysqli_fetch_assoc($result3)) { 
    	echo '
<tr>
	<td width="10" ><font color="black" face="Tahoma" size="2">'. $row['id'] .'</font>
	</td>
	<td><font color="black" face="Tahoma" size="2">'. htmlspecialchars($row['name']) .'</font>
	</td>
	<td><font color="black" face="Tahoma" size="2">'. htmlspecialchars($row['email']) .'</font>
	</td>
	<td><font color="black" face="Tahoma" size="2">'. htmlspecialchars($row['rows']) .'</font>
	</td>
	<td><font color="black" face="Tahoma" size="2"><a href="author.php?eauthor=' .$row['id']. '"><i class="fas fa-edit"></i></a></font>
	</td>
	<td ><font color="black"  face="Tahoma" size="2"><a   href="delete.php?author= '.$row['id'].' "><i class="fas fa-trash"></i></a></font>
	</td>
     ';
	}
	echo "</tr></tbody></table></div></div></center>";
?>
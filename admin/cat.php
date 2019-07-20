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
# edit category 

		
		if (isset($_GET['ecat'])){
		$msg="";
		$id= (int)$_GET['ecat'];
       	if (isset($_POST['catname'])){
       	$namecate= mysqli_real_escape_string($con,$_POST['upcat']);
       	if (!empty($_POST['upcat'])){
		$query ="UPDATE categery  SET name='$namecate' WHERE id=".$id ;
    	$result = mysqli_query($con,$query);
    	if ($result){
    		$msg= "<div class='alert alert-success '>success update </div>";
    	}
    	else{
			$msg= "<div class='alert alert-danger '>error in updating !!</div>";
		}
		}
       	else{
       	$msg= "<div class='alert alert-danger '>Please fill all the fields !!</div>";
        }
        }


        $query1="SELECT * FROM categery  WHERE id=".$id ;
        $editcat= mysqli_query($con,$query1);
       	while($row =mysqli_fetch_assoc($editcat)) {
			 echo $msg;
	         echo "
	 <form method='POST'>
	<div class='text-center border border-light col-md-3'>
	<div class='input-group'>
	<div class='input-group-prepend'>
	<div class='input-group-text'><i class='fa fa-plus' aria-hidden='true'></i>
	</div>
	</div>
	<input  type='text'  class='form-control form-control-sm' id='inlineFormInputGroup' placeholder='Add New Category' name='upcat' required value='".htmlspecialchars($row['name'])."'>
	</div>
	</div>
	<br>
	<input type='submit' name='catname' class='btn btn-info' value='Update'>
	</div></div><br>
	</center>
	</form>
	<hr>
";}
}
else{
			if (isset($_POST['addcat'])){
			$addnamecate= mysqli_real_escape_string($con,$_POST['adcat']);
		if (!empty($_POST['adcat'])){
			$query2 ="INSERT INTO categery  (name) VALUES ('$addnamecate')";
			$result2 = mysqli_query($con,$query2);
		if ($result2){
				$msg= "<div class='alert alert-success '>success add new category </div>";
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
	<input  type='text'  class='form-control form-control-sm' id='inlineFormInputGroup' placeholder='Add New Category' name='adcat' required >
	</div>
	</div>
	<br>
	<input type='submit' name='addcat' class='btn btn-info' value='Add New'>
	</div></div><br>
	</center>
	</form></body>
	<hr>

";
}

// part 2 row all category in page

 $query3="SELECT * FROM categery" ;
 $result3 = mysqli_query($con,$query3);
	echo '
	<center>
	<div class="sml">
	<div class="show">
	<table class="table table-sm table-hover ">
	<thead>
	<tr >
	<th scope="col"><font color="white" face="Tahoma" size="2">Category Name</th>
	<th colspan="2" width="20" scope="col"><font color="white" face="Tahoma" size="2">Action</th>
	</tr>
	</thead>
	<tbody>';
	while($row =mysqli_fetch_assoc($result3)) {
		echo '
		<tr >
		<td><font color="black" face="Tahoma" size="2">'.htmlspecialchars($row['name']).'</font>
		</td>
		<td><font color="black" face="Tahoma" size="2"><a href="cat.php?ecat=' .$row['id']. '"><i class="fas fa-edit"></i></a></font>
		</td>

		<td ><font color="black"  face="Tahoma" size="2"><a   href="delete.php?cat= '.$row['id'].' "><i class="fas fa-trash"></i></a></font>
		</td>
		';
	}
	echo "</tr></tbody></table></div></div></center>";
?>
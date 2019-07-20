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
# edit platform 
	
	if (isset($_GET['eplat'])){
	   $msg="";
       $id= (int)$_GET['eplat'];
       if (isset($_POST['platname'])){
       	$nameplat= mysqli_real_escape_string($con,$_POST['upplat']);
       	if (!empty($_POST['upplat'])){
			$query ="UPDATE platform  SET plat='$nameplat' WHERE id=".$id ;
			$result = mysqli_query($con,$query);
    	if ($result){
    		$msg= "<div class='alert alert-success '>success update Platform </div>";
    	}
    	else{
			$msg= "<div class='alert alert-danger '>error in updating !!</div>";
		}
		}
       	else{
       	$msg= "<div class='alert alert-danger '>Please fill all the fields !!</div>";
        }
        }


        $query1="SELECT * FROM platform  WHERE id=".$id ;
        $editplat= mysqli_query($con,$query1);
       while($row =mysqli_fetch_assoc($editplat)) {
       	   	 echo $msg;
	         echo "
	 <form method='POST'>
	<div class='text-center border border-light col-md-3'>
	<div class='input-group'>
	<div class='input-group-prepend'>
	<div class='input-group-text'><i class='fa fa-plus' aria-hidden='true'></i>
	</div>
	</div>
	<input  type='text'  class='form-control form-control-sm' id='inlineFormInputGroup' placeholder='Add New Platform' name='upplat' required value='".htmlspecialchars($row['plat'])."'>
	</div>
	</div>
	<br>
	<input type='submit' name='platname' class='btn btn-info' value='Update'>
	</div></div><br>
	</center>
	</form></body>
	<hr>
";}
}
# add platform 
else{
	if (isset($_POST['addplat'])){
       	$addnameplat= mysqli_real_escape_string($con,$_POST['adplat']);
       	if (!empty($_POST['adplat'])){
			$query2 ="INSERT INTO platform (plat) VALUES ('$addnameplat')";
			$result2 = mysqli_query($con,$query2);
		if ($result2){
				$msg= "<div class='alert alert-success '>success add new Platform </div>";
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
	<input  type='text'  class='form-control form-control-sm' id='inlineFormInputGroup' placeholder='Add New Platform' name='adplat' required >
	</div>
	</div>
	<br>
	<input type='submit' name='addplat' class='btn btn-info' value='Add New'>
	</div></div><br>
	</center>
	</form></body>
	<hr>
	";
}

// part 2 row all platform in page

 $query3="SELECT * FROM platform" ;
 $result3 = mysqli_query($con,$query3);

 	echo '
 	<center>
	<div class="sml">
	<div class="show">
  	<table class="table table-sm table-hover ">
  	<thead width="100">
    <tr >
      <th scope="col"><font color="white" face="Tahoma" size="2">PlatForm Name</th>
      <th colspan="2" width="20"scope="col"><font color="white" face="Tahoma" size="2">Action</th>
  	</tr>
  	</thead>
  	<tbody>';
	while($row =mysqli_fetch_assoc($result3)) {
    	echo '
    	  <tr> 
     <td><font color="black" face="Tahoma" size="2">'. htmlspecialchars($row['plat']) .'</font>
     </td>
      <td><font color="black" face="Tahoma" size="2"><a href="platform.php?eplat=' .$row['id']. '"><i class="fas fa-edit"></i></a></font>
      </td>
      
      <td ><font color="black"  face="Tahoma" size="2"><a   href="delete.php?plat= '.$row['id'].' "><i class="fas fa-trash"></i></a></font>
      </td>
     ';
	}
	echo "</tr></tbody></table></div></div></center>";
?>
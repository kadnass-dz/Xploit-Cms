
  <link href='css/bootstrap.min.css' rel='stylesheet' media='screen'>
  <link rel='stylesheet' type='text/css' href='../ic/css/all.css'>
  <script src="css/jq.js"></script>
  <script src="css/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css"> 
<script>
  $(function() {
    $( "#autocomplete" ).autocomplete({
      source: 'autoadd.php'
    });
  });
  </script>
<?php

//page add exploit withe autocomplete auther  

include ("inc/fonc2.php") ;
	session_start();
	if(!isset($_SESSION['userlogin']) && !isset($_SESSION['passlogin']))
	{
		header("Location: index.php");
		exit;
	}
		$msg="<div class='alert alert-info'><i class='icon-exclamation-sign'></i><font id='shadow'> Put [ Author ] & [ Title ] & [ Bug ] & Select [ categery ] et [ PlatForm ]</font></div>";
		if (isset($_POST['submit'])){
		$title = mysqli_real_escape_string($con,$_POST['title']);
		$body = mysqli_real_escape_string($con,$_POST['body']);
		$categery = mysqli_real_escape_string($con,$_POST['categery']);
		$platform = mysqli_real_escape_string($con,$_POST['plat']);
		$author = mysqli_real_escape_string($con,$_POST['author']);

		if ( !empty($_POST['title']) && !empty($_POST['body']) && !empty($_POST['categery']) && !empty($_POST['plat']) && !empty($_POST['author']) )
		{

		$query ="INSERT INTO post (cat,body,title,author,platform) VALUES ('$categery','$body','$title','$author','$platform')";
				$insert=mysqli_query($con,$query);
		// author total exploit
		$up_sql ="UPDATE author SET rows=rows+1 WHERE name='$author' ";
		$up_hits=mysqli_query($con,$up_sql);


		if ($insert) {
			$msg= "<div class='alert alert-success '>success</div>";
		}
		else{
			$msg= "<div class='alert alert-danger '>error in inserting !!</div>";
		}
		}
		else {
			$msg= "<div class='alert alert-danger '>Please fill all the fields !!</div>";
			}
}
	echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>Add Exploits</title>
	<!-- Bootstrap -->
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
 	echo $msg;
	echo "<form method='POST'>
	<div class='text-center border border-light col-md-3'>
	<div class='input-group'>
	<div class='input-group-prepend'>
	<div class='input-group-text'><i class='fa fa-user' aria-hidden='true'></i>
	</div>
	</div>
	<input type='text' class='form-control form-control-sm'   placeholder='Author' name='author' id='autocomplete' required>
	</div>
	</div>
	<br>
	<div class='text-center border border-light col-md-3'>
	<div class='input-group'>
	<div class='input-group-prepend'>
	<div class='input-group-text'><i class='fa fa-address-card' aria-hidden='true'></i></div>
	</div>
	<input type='text' id='inlineFormInputGroup' class='form-control form-control-sm' placeholder='Title Exploit' name='title' required>
	</div>
	</div>
	</div>
	<textarea name='body' class='form-control' required style='width:800px' ></textarea>
	<br/>
	<div class='text-center border border-light col-md-5'>
	<div class='input-group'>
	<div class='input-group-prepend'>
	<div class='input-group-text'><i class='icon-pencil'></i>Select Category :</div>
	</div>
	<select class='form-control'  name='categery'>
	";
	# category 
	$query = "SELECT * FROM categery";
	$categerys=mysqli_query($con,$query);  
     while ($row =mysqli_fetch_assoc($categerys)) { 
    echo "    
	<option  value=". $row['id'] ." >". $row['name'] ."</option>"  ;}
    echo "</select>
    </div>
    </div>
	</div>
	<div class='text-center border border-light col-md-5'>
	<div class='input-group'>
	<div class='input-group-prepend'>
	<div class='input-group-text'><i class='icon-pencil'></i>Select PlatForm :</div>
	</div>
	<select class='form-control'  name='plat'>

	";

	#platform
		$query1 = "SELECT * FROM platform";
		$paltform=mysqli_query($con,$query1);  
     while ($row =mysqli_fetch_assoc($paltform)) { 
    echo "    
	<option  value=". $row['plat']." >". $row['plat'] ."</option>"  ;}
	echo "
	</select>
    </div>
    </div>
	</div>
    <br/>
    <input type='submit' name='submit' class='btn btn-info' value='Add Exploit'>
	</div></div><br>
    </center>
	</form></body>";
?>
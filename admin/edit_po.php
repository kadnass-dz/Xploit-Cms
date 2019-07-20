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
include ("inc/fonc2.php") ;
	session_start();
	if(!isset($_SESSION['userlogin']) && !isset($_SESSION['passlogin']))
	{
		
		header("Location: index.php");
		exit;
	}

$id= (int)$_GET['id'];
$query = "SELECT * FROM post WHERE id = ".$id;
$result=mysqli_query($con,$query);
$post=mysqli_fetch_assoc($result);
$query1 = "SELECT * FROM categery";
$categerys=mysqli_query($con,$query1);
$sql = "SELECT * FROM platform";
$paltform=mysqli_query($con,$sql);
$msg="<div class='alert alert-danger'><i class='icon-exclamation-sign'></i><font id='shadow'>Update  Exploit</font></div>";
  if (isset($_POST['submit'])){
		$title = mysqli_real_escape_string($con,$_POST['title']);
		$body = mysqli_real_escape_string($con,$_POST['body']);
		$categery = mysqli_real_escape_string($con,$_POST['categery']);
		$platform = mysqli_real_escape_string($con,$_POST['plat']);
		$author = mysqli_real_escape_string($con,$_POST['author']);
		if ( !empty($_POST['title']) && !empty($_POST['body']) && !empty($_POST['categery']) && !empty($_POST['plat']) && !empty($_POST['author']) ){
		$query2 ="UPDATE post  SET
        title='$title',
        body='$body',
        cat='$categery',
        author='$author',
        platform='$platform'
        WHERE id=".$id ;
		$update=mysqli_query($con,$query2);
		if ($update) {
			$msg= "<div class='alert alert-success '>success upadte</div>";
		}
		else{
			$msg= "<div class='alert alert-danger '>error in upddating !!</div>";
		}
		}
		else {
			$msg= "<div class='alert alert-danger '>Please fill all the fields !!</div>";
			}
      }
	echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>Edit Exploit</title>
	<link rel='stylesheet' type='text/css' href='../ic/css/all.css'>
	<!-- Bootstrap -->
	<script src='../js/bootstrap.min.js'></script>
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
		echo "<form method='POST' >
	<div class='text-center border border-light col-md-3'>
	<div class='input-group'>
	<div class='input-group-prepend'>
	<div class='input-group-text'><i class='fa fa-user' aria-hidden='true'></i>
	</div>
	</div>
	<div class='input-prepend '><span class='add-on'><i class='icon-pencil'></i></span>
	<input  type='text'  class='form-control form-control-sm' id='autocomplete' placeholder='Author' name='author' required  value='". htmlspecialchars($post['author'])."'>
	</div>
	</div>
	</div>
	<br>
	<div class='text-center border border-light col-md-3'>
	<div class='input-group'>
	<div class='input-group-prepend'>
	<div class='input-group-text'><i class='fa fa-address-card' aria-hidden='true'></i></div>
	</div>
	<div class='input-prepend'><span class='add-on'><i class='icon-star'></i></span>
	<input type='text' id='inlineFormInputGroup' class='form-control form-control-sm' placeholder='Title Exploit' name='title'required
	value='". htmlspecialchars($post['title'])."'>
	</div>
	</div>
	</div>
	<br>
	<textarea name='body' class='form-control' required style='width:800px' >". htmlspecialchars($post['body'])."</textarea><br/>
	<div class='text-center border border-light col-md-5'>
	<div class='input-group'>
	<div class='input-group-prepend'>
	<div class='input-group-text'><i class='icon-pencil'></i>Select Category :</div>
	</div>
	<select class='form-control'  name='categery'>"; 
     while ($row=mysqli_fetch_assoc($categerys)) { 
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
	<select class='form-control'  name='plat'>";
     while ($row=mysqli_fetch_assoc($paltform)) { 
    echo "    
	<option  value=". $row['plat']." >". $row['plat'] ."</option>"  ;}
	echo "
	</select>
    </div>
    </div>
	</div>
    <br/>
    <input type='submit' name='submit' class='btn btn-info' value=' Update Exploit '>
	</div></div><br>
	</center>
	</form></body>";;
?>
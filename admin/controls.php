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

	 echo '<div class="sml">
	<div class="show">
	<center><table class="table table-sm ">
	  	<thead width="100">
    <tr >
    <th scope="col"><font color="white" face="Tahoma" size="2"># </th>
      <th scope="col"><font color="white" face="Tahoma" size="2">Descriptons </th>
      <th scope="col"><font color="white" face="Tahoma" size="2">Statics</th>

  	</tr>
  	</thead>
	<tbody>
	';
  $sql               = "SELECT * FROM post";
  $result            = mysqli_query($con,$sql);
  $total_post  = mysqli_num_rows($result);
    echo'<tr><td><i class="fa fa-paperclip" aria-hidden="true"></i></td><td> Total Exploit</td><td><font color="#2196F3"><a href="#">'.htmlspecialchars($total_post).'</a></font></td></tr>';

  $sql1               = "SELECT * FROM categery";
  $result1            =mysqli_query($con,$sql1);
  $total_category  = mysqli_num_rows($result1);
    echo '<tr><td><i class="fas fa-plus "></i></td><td> Total Category<td><font color="#2196F3"><a href="#">'.htmlspecialchars($total_category).'</a></font></td></tr>';
 
  $sql2               = "SELECT * FROM author";
  $result2            = mysqli_query($con,$sql2);
  $total_author  = mysqli_num_rows($result2);
    echo '<tr><td><i class="fa fa-user" aria-hidden="true"></i></td><td>Total Author</td><td><font color="#2196F3"><a href="#">'.htmlspecialchars($total_author).'</a></font></td></tr>';
  $sql3               = "SELECT * FROM platform";
  $result3            = mysqli_query($con,$sql3);
  $total_platform  = mysqli_num_rows($result3);
    echo '<tr><td><i class="fas fa-database "></i></td><td> Total Platform</td><td><font color="#2196F3"><a href="#">'.htmlspecialchars($total_platform).'</a></font></td></tr>';
  $sql4               = "SELECT hits FROM post";
  $result4            = mysqli_query($con,$sql4);
   while ($row=mysqli_fetch_assoc($result4)) { $total_hits += $row['hits'];}
    echo '<tr><td><i class="far fa-eye "></i></td><td> Total Hits</td><td><font color="#2196F3"><a href="#">'.htmlspecialchars($total_hits).'</a></font></td></tr>';
    echo "</table></tbody></div></div></center>";

	?>
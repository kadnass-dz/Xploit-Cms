<? 
	session_start();
	if(!isset($_SESSION['userlogin']) && !isset($_SESSION['passlogin']))
	{
		header("Location: index.php");
		exit;
	}
	include ("inc/fonc2.php");
 	
 	$searchTerm = $_GET['term'];
	$sql = "SELECT * FROM author WHERE name LIKE '%".$searchTerm."%'";
	$result=mysqli_query($con,$sql);
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row['name'];
}
//return json data

echo json_encode($data);

?>
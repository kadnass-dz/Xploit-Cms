<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = "123456789"; /* Password */
$dbname = "ex"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
mysqli_query($con,"SET NAMES utf8;");
mysqli_query($con,"SET CHARACTER_SET utf8;");
/**  format Date  **/
 function formatDate($date){
 	date_default_timezone_set('GMT');
	return date('Y/m/d', strtotime($date));

}

/**  chort Text  **/
 function chortxt($text,$chars = 50){
	$text=$text." ";
	$text =substr($text,0,$chars);
	$text =substr($text,0,strrpos($text,' '));
	$text=$text."  ";
	return $text ;
}
?>
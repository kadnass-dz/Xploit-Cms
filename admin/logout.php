<?php
// destroy session
session_start();
session_destroy();
header('location: index.php');

?>
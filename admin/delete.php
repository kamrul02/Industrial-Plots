<?php include_once "include/header.inc.php" ;
 
$id=$_GET['post'];
$req="DELETE FROM job WHERE id=$id";
$res=mysqli_query($link,$req);
if($res)
		header('Location:index.php');

?>
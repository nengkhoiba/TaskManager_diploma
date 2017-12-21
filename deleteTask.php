<?php
include 'config.php';
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="DELETE FROM `Task` WHERE ID=$id";
	$result=mysqli_query($link,$sql);
	if($result){
		$msg="Succesfully deleted!";
	}else{
		$msg="Something went wrong!";
	}
	
}else{
	$msg="Nothing to delete!";
}

session_start();
$_SESSION['msg']=$msg;
session_commit();
header("Location:Viewtask.php");
?>
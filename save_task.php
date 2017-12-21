<?php
include 'config.php';
$id=$_POST['txtID'];
$title=$_POST['txtTitle'];
$desc=$_POST['txtDesc'];
$summary=$_POST['txtSummary'];


if($id==0){
	$sql="INSERT INTO Task(title,details,summary) VALUES('$title','$desc','$summary')";
}else{
	$sql="UPDATE Task set title='$title',details='$desc',summary='$summary' WHERE ID=$id";
}

$result=mysqli_query($link, $sql);
if($result){
	$msg= "successfully save!";
}else{
	$msg= "something went wrong!";
}
session_start();
$_SESSION['msg']=$msg;
session_commit();
header("Location:Addtask.php");



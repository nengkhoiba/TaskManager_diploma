<?php
include 'config.php';

$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="SELECT ID,name FROM login WHERE email='$email' AND password='$pass' AND isActive=1";


$result= mysqli_query($link, $sql);

$id=0;
if($result){
	while($row= mysqli_fetch_assoc($result))
	{
			$id=$row['ID'];
			$name=$row['name'];
	}
		
}

if($id!=0){
	
	session_start();
	$_SESSION['Login']="true";
	$_SESSION['username']=$name;
	session_commit();
	header("Location:Addtask.php");
	
}else{
	
	session_start();
	$_SESSION['Login']="false";
	$_SESSION['msg']="Incorrect username or password!";
	session_commit();
	header("Location:index.php");
}






?>



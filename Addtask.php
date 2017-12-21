<?php
include 'config.php';
session_start();
	if($_SESSION['Login']!=null){
		if($_SESSION['Login']=="true"){
			
		}else{
			header("Location:index.php",TRUE);
		
		}
		
	}else{
		
		header("Location:index.php",TRUE);  
	}
	
	$id=0;
	$title="";
	$desc="";
	$summary="";
	
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql="SELECT ID,title,details,summary FROM Task WHERE ID='$id'";
		
		$result=mysqli_query($link,$sql);
		
		if($result){
			while ($row=mysqli_fetch_assoc($result)){
				$id=$row['ID'];
				$title=$row['title'];
				$desc=$row['details'];
				$summary=$row['summary'];
			}
		}
		
	}
	
	
?>
<html>
<head>
	<title>
	</title>
</head>
<body>
	<a href="index.php">Logout</a>
	<a href="viewtask.php">View Task</a>
	<form method="post" action="save_task.php">
		<input name="txtID" type="hidden" value="<?php echo $id;?>">
		<input name="txtTitle" required type="text" placeholder="Title" value="<?php echo $title?>" >
		<input name="txtDesc" required type="text" placeholder="Description" value="<?php echo $desc?>">
		<textarea rows="5" name="txtSummary" placeholder="summary" required><?php echo $summary?></textarea>
		<input type="submit" value="save">
	
	</form>
	<?php 
		session_start();
		
		if($_SESSION['msg']!=null){
			echo $_SESSION['msg'];	
		}
		$_SESSION['msg']=null;
		session_commit();
		
		?>
	
</body>
</html>
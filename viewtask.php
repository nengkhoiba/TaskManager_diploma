
<html>
	<head>
		<title>View Task</title>
	</head>
	<body>
	<a href="index.php">Logout</a>
	<a href="Addtask.php">Add Task</a>
			<table border="1">
				<tr><th>ID</th>
				<th>Title</th>
				<th>Details</th>
				<th>Summary</th>
				<th>Edit</th>
				<th>Delete</th>
				</tr>
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
	
	$sql="SELECT ID,title,details,summary FROM Task";
	
	$result=mysqli_query($link,$sql);
	
	if($result){
		while ($row=mysqli_fetch_assoc($result)){
			$ID=$row['ID'];
			$title=$row['title'];
			$desc=$row['details'];
			$summary=$row['summary'];
			?>
			<tr><td><?php echo $ID;?></td>
			<td><?php echo $title;?></td>
			<td><?php echo $desc;?></td>
			<td><?php echo $summary;?></td>
			<td><a href="Addtask.php?id=<?php echo $ID;?>">Edit</a></td>
			<td><a onclick="javascript:return confirm('Are you sure?')" href="deleteTask.php?id=<?php echo $ID;?>">Delete</a></td>
			</tr>
		
			<?php 
		}
	}
		
	
?>
				
			</table>
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
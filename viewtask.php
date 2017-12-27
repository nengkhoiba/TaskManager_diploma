<?php include 'global_header.php';?>

	<div>
			<table class="table table-bordered">
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
	$key="0";
		if(isset($_POST['keyword'])){
		$key=$_POST['keyword'];
		}
		
		if($key=="0"){
		$sql="SELECT ID,title,details,summary FROM Task";
		}else{
			$sql="SELECT ID,title,details,summary FROM Task where title like '%$key%'";
		}
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
			</div>
			<?php 
		session_start();
		
		if($_SESSION['msg']!=null){
			echo $_SESSION['msg'];	
		}
		$_SESSION['msg']=null;
		session_commit();
		
		?>
	</body>
	<?php include 'global_footer.php';?>
<?php include 'global_header.php';?>

	<div>
			<div class="row">
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
			<div class="col-sm-8 col-lg-offset-2">
			    <div class="thumbnail">
			      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZfvNwUXDM_h3N-IerkvpVAdnwe02aGErsQmqV2z-oVsjcsemTAw">
			      <div class="caption">
			        <h3><?php echo $title;?></h3>
			        <p><?php echo $desc;?></p>
			        <p><?php echo $desc;?></p>
			        <p><a href="Addtask.php?id=<?php echo $ID;?>" class="btn btn-primary" role="button">Edit</a> <a onclick="javascript:return confirm('Are you sure?')" href="deleteTask.php?id=<?php echo $ID;?>" class="btn btn-default" role="button">Delete</a></p>
			      </div>
			    </div>
			  </div>
			
				
		
		
			<?php 
		}
	}
		
	
?>
				
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
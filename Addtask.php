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
	
	include 'global_header.php';
?>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-4">
	    		
	    		<div class="panel panel-default">
					  <div class="panel-heading">Add Task</div>
					  <div class="panel-body ">
					  <form class="col-lg-12" method="post" action="save_task.php">
					
						    			<div class="row">
						    				<div class="form-group">
							<input name="txtID" type="hidden" value="<?php echo $id;?>">
							</div>
						    			</div>
						    			<div class="row">
						    				<div class="form-group">
							<input class="form-control" name="txtTitle" required type="text" placeholder="Title" value="<?php echo $title?>" >
							</div>
						    			</div>
						    			<div class="row">
						    				<div class="form-group">
							<input class="form-control" name="txtDesc" required type="text" placeholder="Description" value="<?php echo $desc?>">
							</div>
						    			</div>
						    			<div class="row">
						    				<div class="form-group">
							<textarea class="form-control" rows="5" name="txtSummary" placeholder="summary" required><?php echo $summary?></textarea>
								</div>
						    			</div>
						    			<div class="row">
						    				<div class="form-group">
							<input class="btn btn-primary"  type="submit" value="save">
							
							</div>
						    			</div>
						    			
												<?php 
								session_start();
								
								if($_SESSION['msg']!=null){
									
									?>
									<div class="alert alert-success alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<strong>Message! </strong><?php echo $_SESSION['msg'];?>
									</div>
									<?php
									
								}
								$_SESSION['msg']=null;
								session_commit();
								
								?>
						</form>
					  
					  
					 
					  </div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
</body>	
	<?php include 'global_footer.php';?>
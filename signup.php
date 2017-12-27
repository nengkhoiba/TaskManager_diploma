<?php 
session_start();
$_SESSION['Login']="false";
session_commit();
?>
<html>
	<head>
		<title>
			Task Manager | sign Up
		</title>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
	</head>
	<body>
	<nav class="navbar navbar-default">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Tasks Manager</a>
    </div>
    </nav>
    
    <div class="container">
	    <div class="row">
	    	<div class="col-lg-12">
	    		
	    	
	    	<div class="col-lg-4 col-lg-offset-4">
	    		
	    		<div class="panel panel-default">
					  <div class="panel-heading">Sign Up</div>
					  <div class="panel-body">
					    		<div class="form-group col-lg-12">
	    		
						    		<form method="post" action="signup_action.php" >
						    			
						    			<div class="row">
						    				<div class="form-group">
						    					<input class="form-control" required name="name" type="text" placeholder="Name">
						    				</div>
						    			</div>
						    			<div class="row">
						    				<div class="form-group">
						    					<input class="form-control" required name="email" type="email" placeholder="Email">
						    				</div>
						    			</div>
						    			<div class="row">
						    				<div class="form-group">
						    					<input class="form-control" required name="pass" type="password" placeholder="Password" >
						    				</div>
						    			</div>
						    			<div class="row">
						    				<div class="form-group">
						    					<input class="form-control" required name="conpass" type="password" placeholder="confirm Password" >
						    				</div>
						    			</div>
						    			<div class="row">
						    				<div class="form-group text-center">
						    					<input class="btn btn-default" type="submit" value="save">
						    					<a href="index.php">Login</a>
						    				</div>
						    			</div>
									
									</form>
									<?php 
										session_start();
										
										if($_SESSION['msg']!=null){
											?>
											
											<div class="alert alert-danger alert-dismissible" role="alert">
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											  <strong style="color: #000">Warning! </strong> <span style="color: #000"><?php echo $_SESSION['msg'];?></span>
											</div>
											<?php
										}
										$_SESSION['msg']=null;
										session_commit();
										
										?>
	    					</div>
					  </div>
					</div>
	    		</div>	
	    	</div>
	    </div>
    
    </div>
	</body>
	<?php include 'global_footer.php';?>
	
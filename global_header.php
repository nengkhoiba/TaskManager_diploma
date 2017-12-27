<html>
	<head>
		<title>
			Task Manager 
		</title>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
	</head>
		<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Task Manager</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="Addtask.php">Add task</a></li>
        <li><a href="viewtask.php">View task</a></li>
        <li><a href="notice.php">Notice Board</a></li>
        
      </ul>
      <form method="post" action="viewtask.php" class="navbar-form navbar-left">
        <div class="form-group">
        <?php 
        $key="";
        if(isset($_POST['keyword'])){
        	$key=$_POST['keyword'];
        }
        ?>
          <input type="text" name="keyword" class="form-control" value="<?php echo $key;?>" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php session_start(); echo $_SESSION['username'];?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
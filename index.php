<?php 
session_start();
$_SESSION['Login']="false";
session_commit();
?>
<html>
	<head>
		<title>
			Task Manager | Login
		</title>
	</head>
	<body>
		<form method="post" action="Login_action.php" >
			<input required name="email" type="email" placeholder="Email">
			<input required name="pass" type="password" placeholder="Password" >
			<input type="submit" value="Login">
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

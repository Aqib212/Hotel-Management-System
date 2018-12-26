<?php
    include('db.php');
	
	session_start();
	if($_POST){
		$uname = $_POST['username'];
		$password = $_POST['password'];
		$sql = "select * from Register where username = '$uname' and password='$password';";
		$select = mysqli_query($connection, $sql);
		$numrow = mysqli_num_rows($select);
		
		if($numrow >0){
			$_SESSION['uname'] = $uname;
				header("Location: userpage.php");
				exit();
		}
	}
?>



<!doctype html>
<html>
<head>
<title>Login Page</title>

<script>
function ValidateLoginForm(){
	var uname = ValidateForm.UserName;
	var pass = ValidateFrom.Password;
	
	if(uname.value == ""){
		window.alert("Please enter your user name");
		uname.focus();
		return false;
	}
	
	if(pass.value == ""){
		window.alert("please enter your password");
		pass.focus();
		return false;
	}
}
</script>
</head>

<body>
	<div>
	
	<h1>Login</h1>
	
	<form method="post" name="ContactForm" onSubmit="return ValidateLoginForm();">
	<p>
		<label for="username">User Name</label>
		<input type="text" name="username" />
	</p>
		
	<p>
		<label for="password">Password</label>
		<input type="password" name="password" />
	</p>
	
	<p>
		<input type="submit" name="login" value="Login"/>
	</p>
	</form>
	
	</div>
</body>
</html>
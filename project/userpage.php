<?php
	include('db.php');
	
	session_start();
		if(isset($_SESSION['uname']))
		{
			$user_name =$_SESSION['uname'];
		}
		$sql = "select * from register where username = '$user_name';";
		$select = mysqli_query($connection, $sql);
		$result = mysqli_fetch_assoc($select);
		$_SESSION['result'] = $result;

?>


<!doctype html>
<html>
	<head>
	<title>Home</title>
	</head>
	<body>
	<center>
	<h1>Welcome <?php echo($result['name']);?></h1>
	<a href = "#">Home</a> &nbsp
	<a href="profile.php">Profile</a> &nbsp
	<?php
	if($result['usertype']=="admin")
	{
		echo("<a href = 'registration.php'>Receptionist Register</a> &nbsp");
		echo("<a href = 'list.php'>User List</a> &nbsp");
		echo("<a href = 'room.php'>New Room Register</a> &nbsp");
		
	}
	if($result['usertype']=="receptionist")
	{
		echo("<a href ='check-in.php'>Check in</a> &nbsp");
		echo("<a href ='check-out.php'>Check out</a> &nbsp");
	}
	
	?>
	
	<ul>
         <li><a href="#">Search</a>
            <ul>
               <li><a href="customer_search.php">Customer</a></li>
               <li><a href="room_search.php">Room</a></li>
            </ul>
         </li>
		 </ul>
		 <a href = "logout.php">Logout</a>
	</center>
	</body>

</html>
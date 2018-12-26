<?php
    include('db.php');
		if($_POST){
        $fname = $_POST['fname'];
	
	$select = mysqli_query($connection, "SELECT * FROM guestTable where fname = '$fname'");

	?>

	<table>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Country</th>
		<th>Mobile</th>
	</tr>
	<?php while($userrow = mysqli_fetch_array($select)) {?>
 
	<tr>
		<td><?php echo $userrow['fname'] . " " . $userrow['lname']; ; ?></td>
		<td><?php echo $userrow['email']; ?></td>
		<td><?php echo $userrow['address']; ?></td>
		<td><?php echo $userrow['country']; ?></td>
		<td><?php echo $userrow['mobile']; ?></td>
	</tr>
	<?php } ?>
	</table>
<?php } ?>


<!doctype html>
<html>
<head>
<title>Search Form</title>
</head>

<body>
<form method="post">
<p>
<label for="fname">First Name:</label>
<input type="text" name="fname" />
</p>

<p>
<input type="submit" name="search" value="Go" />
<a href="userpage.php">Back</a> 
</p>
</form>
</body>
</html>
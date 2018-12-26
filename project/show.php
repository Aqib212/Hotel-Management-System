<?php
    include('db.php');
	
	session_start();
	$em = $_SESSION['temp1'];
	$rn = $_SESSION['temp2'];
	
	$select1 = mysqli_query($connection, "SELECT * FROM guestTable where email = '$em'");
	$num_row1 = mysqli_num_rows($select1);
	
	$select2 = mysqli_query($connection, "SELECT * FROM bookingTable where room_number = '$rn'");
	
	$userrow1 = mysqli_fetch_array($select1);
	$userrow2 = mysqli_fetch_array($select2);
	
    if( $num_row1 ) {
?>
	<table>
		<tr>
			<th>Name</th>
			<td> <?php echo $userrow1['fname'] . " " . $userrow1['lname']?></td>
		</tr>
		
		<tr>
			<th>Email</th>
			<td> <?php echo $userrow1['email']; ?></td>
		</tr>
		
		<tr>	
			<th>Address</th>
			<td> <?php echo $userrow1['address']; ?></td>
		</tr>
		
		<tr>
			<th>Country</th>
			<td>  <?php echo $userrow1['country']; ?></td>
		</tr>
		
		<tr>
			<th>Mobile</th>
			<td>  <?php echo $userrow1['mobile']; ?></td>
		</tr>
		
		<tr>
			<th>Room no.</th>
			<td>  <?php echo $userrow2['room_number']; ?></td>
		</tr>
		
		<tr>
			<th>Check-in Date</th>
			<td>  <?php echo $userrow2['check_in']; ?></td>
		</tr>
		
		<tr>
			<th>Check-out Date</th>
			<td>  <?php echo $userrow2['check_out']; ?></td>
		</tr>
		
		<tr>
			<th>Total Balance</th>
			<td>  <?php if($userrow2['room_type'] == 'single')
					{
						$balance = $userrow2['num_days'] * 5000;
						
					$update = mysqli_query($connection, "update bookingTable set balance = '$balance'  where room_number = '$rn'");
					echo $balance;
					}
					
					if($userrow2['room_type'] == 'double')
					{
						$balance = $userrow2['num_days'] * 10000;
						
						$update = mysqli_query($connection, "update bookingTable set balance = '$balance' where room_number = '$rn'");
					echo $balance;
					}
					
					
					 ?></td>
		</tr>
		
		</table>
		
		<br /> <br />
		
<?php  } ?>

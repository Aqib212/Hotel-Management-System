<?php
include('db.php');
		if($_POST)
		{
			$rnum= mysqli_real_escape_string($conn, $_POST['rnum']);
			$fnum = mysqli_real_escape_string($conn, $_POST['fnum']);
			$type = mysqli_real_escape_string($conn, $_POST['type']);
			$cost = mysqli_real_escape_string($conn, $_POST['cost']);
			$update = mysqli_query($conn, "insert into room(room_no, room_type, floor_no, cost) values
											  ('$rnum', '$type', '$fnum', '$cost');");
		}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Room register</title>	
	<script>
		function ValidateRoomForm()
		{
			var room = reg.rnum;
			var rtype = reg.type;
			var floor_num = reg.fnum;
			var cost1 = reg.cost;
			
			if(room.value == "")
			{
				window.alert("Please enter the room no.");
				room.focus();
				return false;
			}
			
			if(rtype.value == "")
			{
				window.alert("Please enter the room type");
				rtype.focus();
				return false;
			}
			
			
			if(floor_num.value == "")
			{
				window.alert("Please enter the floor no.");
				floor_num.focus();
				return false;
			}
			
			if(cost1.value == "")
			{
				window.alert("Please enter cost ");
				return false;
			}
			return true;
		}
	
	</script>
	</head>
    <body>

		<h1><center>Room Register</center></h1>
        <form method="post" name="reg" target="" onSubmit="return ValidateRoomForm();">
		
			<p>
			<label for="room_no">Room No.</label>
			<input type="text" name="rnum"/>
			</p>
			
			<p>
			<label for = "type">Room Type</label>
			<select name="type">
			<option value="single">Single</option>
			<option value="double">Double</option>
			</select>
			</p>
		
			<p>
			<label for="fnum">Floor No.</label>
			<input type="text" name="fnum"/>
			</p>
			
			<p>
			<label for="cost">Cost</label>
			<input type="text" name="cost"/>
			</p>
			
			
            <input type="submit" name="register" value="Register" />
			<a href="userpage.php">Home</a>
        </form>
    </body>
</html>
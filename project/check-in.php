<?php
	include('db.php');
	session_start();
	if($_POST){
		$select = mysqli_query($connection, "select * from room order by 'room_no'");
    	$num_row = mysqli_num_rows($select);
		$userrow = mysqli_fetch_array($select);
		
		
		if($_POST['email']){
		$fname = mysqli_real_escape_string($connection, $_POST['fname']);
		$lname = mysqli_real_escape_string($connection, $_POST['lname']);
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$address = mysqli_real_escape_string($connection, $_POST['address']);
		$country = mysqli_real_escape_string($connection, $_POST['country']);
		$mobile = mysqli_real_escape_string($connection, $_POST['mobile']);
		$type = mysqli_real_escape_string($connection, $_POST['type']);
		$id = mysqli_real_escape_string($connection, $_POST['id']);
	
		$update1 = mysqli_query($connection, "insert into guestTable(fname, lname, email, address, country, mobile, id_type, id)
									values ('$fname', '$lname', '$email', '$address', '$country', '$mobile', '$type', '$id')");
			}
									
		if($_POST['rnum']){
			$rnum = mysqli_real_escape_string($connection, $_POST['rnum']);
		$din = mysqli_real_escape_string($connection, $_POST['din']);
		$dout = mysqli_real_escape_string($connection, $_POST['dout']);
		$rtype = mysqli_real_escape_string($connection, $_POST['rtype']);
		$ndays = mysqli_real_escape_string($connection, $_POST['ndays']);
		$nadults = mysqli_real_escape_string($connection, $_POST['nadults']);
		$nchildrens = mysqli_real_escape_string($connection, $_POST['nchildrens']);
		
		$update2 = mysqli_query($connection, "insert into bookingTable(room_number, check_in, check_out, room_type, num_days, num_adult, num_children) 
						values ('$rnum', '$din', '$dout', '$rtype', '$ndays', '$nadults', '$nchildrens')");
		}
		
		$_SESSION['temp1'] = $email;
		$_SESSION['temp2'] = $rnum;
		
		header('Location:show.php');
	}

?>

<!DOCTYPE>
<html>
    <head>
        <title>Check-in</title>
		
		<script>
		
		function ValidateBookingForm()
		{
    		var name1 = booking.fname;
			var name2 = booking.lname;
    		var em = booking.email;
			var add = booking.address;
			var cn = booking.country;
			var mob = booking.mobile;
			var typ1 = booking.type;
			var id1 = booking.id;
			
		    if (name1.value == "")
    		{
        		window.alert("Please enter your first name.");
        		name1.focus();
        		return false;
    		}
			
			if (name2.value == "")
    		{
        		window.alert("Please enter your last name.");
        		name2.focus();
        		return false;
    		}
    
    		if (add.value == "")
    		{
        		window.alert("Please enter your address.");
        		add.focus();
        		return false;
    		}

    		if (cn.value == "null1")
    		{
        		window.alert("Please select your country name.");
        		cn.focus();
        		return false;
    		}
			
			if (mob.value == "")
    		{
        		window.alert("Please enter your mobile number.");
        		mob.focus();
        		return false;
    		}
			
			var name3 = booking.rnum;
			var day1 = booking.din;
			var day2 = booking.dout;
			var typ2 = booking.rtype;
			var nday = booking.ndays;
			var adult = booking.nadults;
			var child = booking.nchildrens;
			
			if (name3.value == "")
    		{
        		window.alert("Please enter the room number.");
        		name3.focus();
        		return false;
    		}
			
			if (day1.value == "")
    		{
        		window.alert("Please enter the check-in date.");
        		mob.focus();
        		return false;
    		}
			
			if (day2.value == "")
    		{
        		window.alert("Please enter the check-out date.");
        		mob.focus();
        		return false;
    		}
			
			if (typ2.value == "null3")
    		{
        		window.alert("Please enter the room type.");
        		mob.focus();
        		return false;
    		}
			
			if (nday.value == "")
    		{
        		window.alert("Please enter the no. of days.");
        		mob.focus();
        		return false;
    		}
			
			if (adult.value == "")
    		{
        		window.alert("Please enter the adult number.");
        		mob.focus();
        		return false;
    		}
			
			if (child.value == "")
    		{
        		window.alert("Please enter the children number.");
        		mob.focus();
        		return false;
    		}
			
			
   			return true;
		}

		</script>


	</head>

    <body>
		<h2>Check In</h2>
           <form method="post" name="booking" onSubmit="return ValidateBookingForm()";>
               
			 <div>
			   <p>Guest Information</p>
			   <p>
                 <label for="fname"> First Name </label>
                 <input type="text" name="fname"/> 
				</p>
				
				<p> 
                 <label for="lname"> Last Name </label>
				 <input type="text" name="lname"/>
			   </p>
			   
 	           <p>
                 <label  for="email"> Email </label>
                 <input type="email" name="email"/>
               </p>
			   
			   <p>
                 <label for="address"> Address </label>
                 <input type="text" name="address"/>
               </p>
	           
			   <p>
                 <label for="country"> Country </label>
				 <select name="country">
				 <option value="null1"> Select Country</option>
				 <option value="bd"> Bangladesh</option>
				 <option value="ind"> India</option>
				 <option value="pak"> Pakistan</option>
				 <option value="sri"> Srilanka</option>
				 <option value="nep"> Nepal</option>
				 <option value="aus"> Australia</option>
				 <option value="new"> Newzeland</option>
				 <option value="bhu"> Bhutan</option>
				 <option value="map"> Maldip</option>
				 <option value="afg"> Afganistan</option>
				 </select>
               </p>
			   
			   <p>
                 <label  for="mobile"> Mobile No </label>
                 <input type="text" name="mobile"/>
               </p>
				
				<p>
				 <label for="type"> ID Type: </label>
				 <select name="type">
				 <option value="null2"> Select ID Type</option>
				 <option value="nid"> NID</option>
				 <option value="driving"> Driving License</option>
				 <option value="school"> School/College</option>
				 <option value="ssid"> SSID</option>
				 </select> 
           	   </p>
			   
			   <p>
                 <label  for="id"> ID </label>
                 <input type="text" name="id"/>
               </p>
			   
			</div>
				
			<div>
			   <p>Rate Information</p>
			   <p>
                 <label for="rnum"> Room Number </label>
                 <input type="text" name="rnum"/> 
				</p>
				
				<p> 
                 <label for="din"> Date In </label>
				 <input type="date" name="din"/>
			   
			   	 <label for="dout"> Date Out </label>
				 <input type="date" name="dout"/>
			   </p>
	           
			   <p>
                 <label for="rtype"> Rate Type </label>
				 <select name="rtype">
				 <option value="null3"> Select Room Type</option>
				 <option value="single"> Single</option>
				 <option value="double"> Double</option>
				 </select>
               </p>
			   
			   <p>
                 <label  for="ndays"> No. of Days </label>
                 <input type="number" name="ndays"/>
               </p>
			   
			   <p>
                 <label  for="nadults"> No. of Adults </label>
                 <input type="number" name="nadults"/>
               </p>
				
				<p>
                 <label  for="nchildrens"> No. of Childrens </label>
                 <input type="number" name="nchildrens"/>
               	</p>
			</div>
			
			<div>
				<p>
                 <label  for="cost"> Rate </label>
                 <input type="number" name="cost"/>
               </p>
			   
			</div>
			
			<div>
               <p>
                 <input type="submit" name="update" value="Update"/> &nbsp
               	 <a href="userpage.php">Cancel</a> 
			   </p>
			</div>
			   
           
		   </form>

    </body>
</html>
<?php
    include('db.php');
?>

<!DOCTYPE>
<html>
    <head>
        <title>List of Users</title>
	</head>

    <body>
		<center>
		<?php
		    $select = mysqli_query($connection, "select * from Register order by 'username'");
			$userrow = mysqli_fetch_array($select);
			
			echo("<a href = 'userpage.php'>Home</a> &nbsp");
		?>
		</center>
		<h2>List of Users</h2>
    </body>
</html>

<?php
    $select = mysqli_query($connection, "select * from Register order by 'username'");
    $num_row = mysqli_num_rows($select);
	
    if( $num_row ) {
?>
      <table>
          <tr>
              <th>Name</th>
			  <th>Age</th>
              <th>Mobile</th>
			  <th>Address</th>
			  <th>Email</th>
			  <th>Gender</th>
			  <th>User Type</th>
          </tr>
          <?php while( $userrow = mysqli_fetch_array($select) ) { ?>
          <tr>
	  		<td><?php echo $userrow['name']; ?></td>	
    		<td><?php  echo $userrow['age']; ?></td>
            <td><?php  echo $userrow['mobile']; ?></td>
            <td><?php  echo $userrow['address']; ?></td>
            <td><?php  echo $userrow['email']; ?></td>
            <td><?php  echo $userrow['gender']; ?></td>
            <td><?php  echo $userrow['usertype']; ?></td>      
          </tr>	
          <?php } ?>
      </table>
<?php } ?>

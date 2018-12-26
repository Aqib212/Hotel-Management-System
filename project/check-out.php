<!DOCTYPE>
<html>
    <head>
        <title>Check-out</title>
	</head>

    <body>
		<h2>Check Out</h2>
           <form method="post" name="out" target="">
               
			 <div>
			   <p>
                 <label for="rnum"> Room Number </label>
                 <input type="text" name="rnum"/> 
			   </p>
			   
			   <p>
                 <label for="gname"> Guest Name </label>
                 <input type="text" name="gname"/> 
				</p>
				
 	           <p>
                 <label  for="email"> Email </label>
                 <input type="email" name="email"/>
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
				 <option value="bd"> Single</option>
				 <option value="ind"> Double</option>
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
                 <label  for="cost"> Rate/Period </label>
                 <input type="number" name="cost"/>
               </p>
			   
				<p>
                 <label  for="tcost"> Balance </label>
                 <input type="number" name="tcost"/>
               </p>
			</div>
			
			<div>
               <p>
                 <input type="submit" name="check" value="Check-Out"/>
			   </p>
			</div>
			   
		   </form>

    </body>
</html>
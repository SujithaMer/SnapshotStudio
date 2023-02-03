<html>
<head>
	
	<h2 style="text-align:center;font-size:50px;color:black";>BOOKING</h2>	
	<style>
	h2{
	margin-top:80px;
	}
	table{margin-top:100px;
	}
	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body style="background: url(https://images.pexels.com/photos/920147/pexels-photo-920147.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);background-size: 100%;">

		<div id="frm" align="center">
			<form action="" method="POST"  >
		
			<table>
             <tr>
			 
             	<td>
             		Username:
             	</td>
             	<td><input type="text" id="username" name="username"/></td>
				
             </tr>
			 
             <tr>
			 
             	<td>
             		E-mail:
             	</td>
             	<td><input type="email" id="email" name="email"/></td>
			
             </tr>
			 
			 <tr>
			 <td>
			      Contact1 (format:10-digits):
				 
  

		     </td>
			 <td><input type="text" id="contact1"  name="contact1" pattern="[789][0-9]{9}" required></td>
			 </tr>
			 <tr>
			 <td>
			      Contact2:(format:10-digits): 
		     </td>
			 <td><input type="text" id="contact2" name="contact2" pattern="[789][0-9]{9}" required></td>
			 </tr>
			 <tr>

<form>
<td>State: </td>
<td>
<select>
     <option>Telangana</option>
<option>ArunachalPradesh</option>
<option>AndhraPradesh</option>
<option>Assam</option>
<option>Bihar</option>
<option>Chattisgarh</option>
<option>Goa</option>
<option>Haryana</option>
<option>HimachalPradesh</option>
<option>Jammu&Kashmir</option>
<option>Jharkand</option>
<option>Karnataka</option>
<option>MadhyaPradesh</option>
<option>WestBengal</option>
<option>TamilNadu</option>
<option>Kerala</option>
<option>Odisha</option>
<option>Gujarat</option>
<option>Rajasthan</option>
<option>Delhi</option>
	
</select>
</td>
</form>
  </tr>
			 <tr>
			 <td>
			      Address:
		     </td>
			<td> <textarea rows="4" cols="30" id="address" name="address">
			 </textarea></td>
			 <tr>
<form>
<td>select your favorite photographer:</td>
<td>
<select>
     <option>BRANDON FLYNN</option>
	 <option>DEVIN DRUID</option>
	 <option>MILES HEIZER</option>
	 <option>ANNE WINTERS</option>
	 <option>SAMANTHA LOGAN</option>
	 <option>KATE WALSH</option>
	 <option>DEREK LUKE</option>
	 <option>NINA CHEEK</option>
	 <option>CHRISTIANO</option>
	 <option>ALISHA BOE</option>
	 <option>CHRISTIAN NAVARO</option>
	 <option>AMY HARGREAVES</option>
	 <option>DYLAN MINNETTE</option>
	 <option>ROSS BUTLER</option>
	 <option>JUSTIN PRENTIC</option>
	 <option>TOMMY DORFMAN</option>
</select>
</td>
</form>
  </tr>
  
  <tr>
             	<td>
             		DOB Start:
             	</td>
             	<td><input type="date" id="Dob" name="Dob"/></td>
             </tr>
			 <tr>
             	<td>
             		No of days:
             	</td>
             	<td><input type="number" id="Nod" name="Nod"/></td>
             </tr>
             <tr>
             	
             	<td><input type="submit" name="submit" value="Confirm Booking"/></td>
             </tr>
			 </table>
			</form>
		</div>
	
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['username'])&& !empty($_POST['email']) && !empty($_POST['contact1']) && !empty($_POST['contact2']) && !empty($_POST['address']) && !empty($_POST['Dob']) && !empty($_POST['Nod'])){  
    $user=$_POST['username'];    
	$email=$_POST['email'];
	$contact1=$_POST['contact1'];
	$contact2=$_POST['contact2'];
	$add=$_POST['address'];
	$dob=$_POST['Dob'];
	$nod=$_POST['Nod'];
  
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
	if($con)
	{
		echo "connected database";
	}
	else
	{
		echo "not connected database";
	}
	
    mysqli_select_db($con,'user_registration') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."'"); 
if($query)
{
echo "succesful query";
}
else
{
  echo "not succesful";
}  
    $numrows=mysqli_num_rows($query);  
	if($numrows)
	{
		echo "success";
	}
	else
	{
		echo "not success";
	}
   if($numrows!=0)  
    {  
    $sql="INSERT INTO booking(username,email,contact1,contact2,address,Dob,Nod) VALUES('$user','$email','$contact1','$contact2','$add','$dob','$nod')";  
  
    $result=mysqli_query($con,$sql);  
        if($result){  
    echo "Successfully Booked";  
	header("Location: project123.html");  
    } else {  
    echo "Failure!";  
    }  
  
    } else {  
    echo "That username already exists! Please try again with another.";  
    }  
  
} else {  
    echo '<div style="font-size:2.25em;color:#ff0000;font-weight:bold;">All fields are required!</div>';;  
}  
}  
?>  
</body>
</html>
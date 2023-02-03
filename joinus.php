<html>
<head>
<style>
body{
background-image:url("projectpics/regbac2.jpg");
style:frameset;
background-size: 100%;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}
table
{ 
 color:whitesmoke;
 font-size:30px;
}
</style>
</head>
<body>

<h1 style="color:skyblue;font-size:50px;text-align:center" >JOIN</h1>
<p style="color:white;font-size:30px">We here provide a great platform for you to showcase your photography skills.If you want to join us fill your deatils here.WE conduct an interview.Given below are our details:</br>contact us at:8919542329.</br>We work together to capture the best photos ever.Want to join our family??then post us your resume at:  <p style="color:skyblue;font-size:30px">snapshotstudiomarvels@gmail.com.</p></p>

<div id="frm" align="center">
			<form action="" method="POST"  >
		
			<table>
             <tr>
			 
             	<td>
             		Name:
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
			      Age:
				 
  

		     </td>
			 <td><input type="number" id="age"  name="age" /></td>
			 </tr>
			 
			<tr>
			 <td>
			      Address:
		     </td>
			<td> <textarea rows="4" cols="30" id="address" name="address">
			 </textarea></td>
			 </tr>
            <tr>
			 <td>
			      Experience:
		     </td>
			<td> <input type="number" id="experience" name="experience"/>
			</td>
			 </tr>
            <tr>
			 <td>
			      Qualification:
		     </td>
			<td> <input type="text" id="qualification" name="qualification"/>
			 </td>
			 </tr>
            <tr>
             	
             	<td><input type="submit" name="submit" value="join"/></td>
             </tr>
 
			 </table>
			</form>
		</div>
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['username'])&& !empty($_POST['email']) && !empty($_POST['age']) && !empty($_POST['address']) && !empty($_POST['experience']) && !empty($_POST['qualification'])){  
    $user=$_POST['username'];    
	$email=$_POST['email'];
	$age=$_POST['age'];
	$add=$_POST['address'];
	$experience=$_POST['experience'];
	$qualification=$_POST['qualification'];

  
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
    $sql="INSERT INTO joinus(username,email,age,address,experience,qualification) VALUES('$user','$email','$age','$add','$experience','$qualification')";  
  
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

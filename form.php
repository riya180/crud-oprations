
<?php include("conn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title> form </title>

</head>
<body>
	<div class="container">
		<form action ="#" method= "POST">
		<div class="title">
			Registration Form
			
		</div>
		<div class="form">
			<div class="input_field">
				<label>First Name</label>
				<input type="text" class="input" name ="f_name" required>
				
			</div>
			<div class="input_field">
				<label>Last Name</label>
				<input type="text" class="input" name="l_name">
				
			</div>
			<div class="input_field">
				<label>Password</label>
				<input type="Password" class="input" name="password" required>
				
			</div>
			<div class="input_field">
				<label>Confirm Password</label>
				<input type="Password" class="input" name="c_password" required>
				
			</div>
			<div class="input_field">
				<label>Gender</label>
				<div class="custom_selectbox">
				<select name="gender" required>
					<option value="">Select</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				
				</select>
				</div>
				
			</div>
			<div class="input_field">
				<label>Email</label>
				<input type="text" class="input" name="email" required>
				
			</div>
			<div class="input_field">
				<label>Phone </label>
				<input type="number" class="input" name="phone" required>
				
			</div>
			<div class="input_field">
				<label>Address</label>
		        <textarea class="textarea" name ="address" required></textarea>	
				
			</div>
			<div class="input_field terms">
				<label class="check">
					<input type="checkbox" required>
					<span class="checkmark"></span>
					</label>
					<p>Agree to terms and conditions</p>
		     	
			</div>
			<div class="input_field">
				<input type="submit" value="submit" class="btn" name ="submit">
				
			</div> 
				</div>
</form>
</div>
</body>
</html>

<?php

if($_POST["submit"])
{
	$fname =$_POST['f_name'];
	$lname =$_POST['l_name'];
	$pwd =$_POST['password'];
	$cpassword =$_POST['c_password'];
	$Gender =$_POST['gender'];
	$mail =$_POST['email'];
	$mobile =$_POST['phone'];
	$place =$_POST['address'];

	$query ="INSERT INTO form (f_name, l_name, password, c_password, gender, email, phone, address ) values('$fname', '$lname', '$pwd', '$cpassword', '$Gender','$mail', '$mobile', '$place')";
	$data = mysqli_query($conn, $query);
	if($data)
	{
		echo "data inserted";
	}
	else
	{
		echo "failed";
	}
}

?>

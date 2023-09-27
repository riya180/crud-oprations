
<?php include("conn.php");
$id = $_GET["id"];

$query = "SELECT * FROM FORM where id= '$id'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title> update</title>

</head>
<body>
	<div class="container">
		<form action ="#" method= "POST">
		<div class="title">
			Update Details
			
		</div>
		<div class="form">
			<div class="input_field">
				<label>First Name</label>
				<input type="text" value= "<?php echo $result['f_name'];?>" class="input" name ="f_name" required>
				
			</div>
			<div class="input_field">
				<label>Last Name</label>
				<input type="text"  value= "<?php echo $result['l_name'];?>" class="input" name="l_name">
				
			</div>
			<div class="input_field">
				<label>Password</label>
				<input type="Password" value= "<?php echo $result['password'];?>" class="input" name="password" required>
				
			</div>
			<div class="input_field">
				<label>Confirm Password</label>
				<input type="Password"  value= "<?php echo $result['c_password'];?>" class="input" name="c_password" required>
				
			</div>
			<div class="input_field">
				<label>Gender</label>
				<div class="custom_selectbox">
				<select name="gender" required>
					<option value ="">Select</option>
					<option value ="male"
					<?php
					    if($result['gender'] == 'male')
						{
							echo "selected";
						}
					?>
					>
					Male</option>
					<option value="female"
					<?php
					    if($result['gender'] == 'female')
						{
							echo "selected";
						}
					?>
					>
					Female</option>
				</select>
				</div>
				
			</div>
			<div class="input_field">
				<label>Email</label>
				<input type="text" value= "<?php echo $result['email'];?>"class="input" name="email" required>
				
			</div>
			<div class="input_field">
				<label>Phone </label>
				<input type="number" value= "<?php echo $result['phone'];?>" class="input" name="phone" required>
				
			</div>
			<div class="input_field">
				<label>Address</label>
		        <textarea class="textarea" name ="address" required><?php
				 echo $result['address']; ?></textarea>	
				
			</div>
			<div class="input_field terms">
				<label class="check">
					<input type="checkbox" required>
					<span class="checkmark"></span>
					</label>
					<p>Agree to terms and conditions</p>
		     	
			</div>
			<div class="input_field">
				<input type="submit" value="update" class="btn" name ="update">
				
			</div> 
				</div>
</form>
</div>
</body>
</html>

<?php

if($_POST["update"])
{
	$fname =$_POST['f_name'];
	$lname =$_POST['l_name'];
	$pwd =$_POST['password'];
	$cpassword =$_POST['c_password'];
	$Gender =$_POST['gender'];
	$mail =$_POST['email'];
	$mobile =$_POST['phone'];
	$place =$_POST['address'];

	$query= " UPDATE form set f_name= '$fname',l_name='$lname', password='$pwd', 
	c_password='$cpassword', gender='$Gender', email='$mail', phone='$mobile',
	address='$place' WHERE id='$id'";

	$data = mysqli_query($conn, $query);

	if($data)
	{
		echo "<script>alert('Record Updated')</script>";
		?>
        <meta http-equiv = "refresh" content = "1; url = http://localhost/curd/crud-oprations/display.php" />

		
<?php
	}
	else
	{
		echo "failed";
	}
}

?>

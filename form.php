<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title> PHP CURD opration</title>

</head>
<body>
	<div class="container">
		<div class="title">
			Registration Form
			
		</div>
		<div class="form">
			<div class="input_field">
				<label>First Name</label>
				<input type="text" class="input">
				
			</div>
			<div class="input_field">
				<label>Last Name</label>
				<input type="text" class="input">
				
			</div>
			<div class="input_field">
				<label>Password</label>
				<input type="Password" class="input">
				
			</div>
			<div class="input_field">
				<label>Confirm Password</label>
				<input type="Password" class="input">
				
			</div>
			<div class="input_field">
				<label>Gender</label>
				<div class="custom_selectbox">
				<select>
					<option>Select</option>
					<option>Male</option>
					<option>Female</option>
					<option>Other</option>
				</select>
				</div>
				
			</div>
			<div class="input_field">
				<label>Email</label>
				<input type="text" class="input">
				
			</div>
			<div class="input_field">
				<label>Phone </label>
				<input type="number" class="input">
				
			</div>
			<div class="input_field">
				<label>Address</label>
		        <textarea class="textarea"></textarea>	
				
			</div>
			<div class="input_field terms">
				<label class="check">
					<input type="checkbox">
					<span class="checkmark"></span>
					</label>
					<p>Agree to terms and conditions</p>
		     
				
			</div>
			<div class="input_field">
				<input type="submit" value="register" class="btn">
				
			</div>
			
		</div>
		

	</div>

</body>
</html>

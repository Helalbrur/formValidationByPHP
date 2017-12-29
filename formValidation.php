
<!DOCTYPE html>
<html>
<head>
	<title>FormValidation by PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php
	$name=$email=$password=$gender=$website=$nameError=$emailError=$passwordError=$genderError=$websiteerror="";
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$name=valiDation($_REQUEST['name']);
		$email=valiDation($_REQUEST['email']);
		$password=valiDation($_REQUEST['password']);
		$gender=valiDation($_REQUEST['gender']);
		$website=valiDation($_REQUEST['website']);
		if(empty($name))
		{
			$nameError="Name can't be empty";
		}
		if(empty($email))
		{
			$emailError="Email can't be empty";
		}
		if(empty($password))
		{
			$passwordError="Password can't be empty";
		}
		if(empty($gender))
		{
			$genderError="Gender can't be empty";
		}
		if(empty($website))
		{
			$websiteerror="Website can't be empty";
		}
	
	}

	function valiDation($data){

		$validData=htmlspecialchars(stripslashes(trim($data)));
		return $validData;
	}
	//trim(str) function remove the space 
	// stripcslashes(str) 
	//stripslashes(str)
	// htmlspecialchars(string)
	//filter_var()


	//home work: how many php error and their work 
?>

<form class="f1" action="" name="formValidation" method="post">
	<table>
		<tr>
			<td>* Field is required </td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name">*</td>
			<td><?php 
				if(empty($name))
				echo $nameError;
			?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email"></td>
			<td><?php 
				if(empty($email))
				echo $emailError;
			?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password">*</td>
			<td><?php 
				if(empty($password))
				echo $passwordError;
			?></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="gender" value="Male" checked="true">Male
				<input type="radio" name="gender" value="Female">Female
				<input type="radio" name="gender" value="Others">Others
			 </td>
			 <td><?php 
					if(empty($gender))
						echo $genderError;
				?>
			</td>
		</tr>
		<tr>
			<td>Website</td>
			<td>
				<input type="text" name="website" >
				<td>
					<?php

					
					if(empty($website))
					{
						echo $websiteerror;
					}
					

					?>
				</td>
			</td>
		</tr>
		<tr>
			<td>Message</td>
			<td>
				<textarea name= "message" style="width:200px;height: 100px">
					
				</textarea>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>

</form>



</body>
</html>

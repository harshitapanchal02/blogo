<?php

if (isset($_POST['submit']))
{
	include_once 'dbh.inc.php';
	
	$firstname=mysqli_real_escape_string($conn, $_POST['fname']); //fname is the name from the sign.php file
	$lastname=mysqli_real_escape_string($conn, $_POST['lname']);
	$email_id=mysqli_real_escape_string($conn, $_POST['email']);
	$username=mysqli_real_escape_string($conn, $_POST['username']);
	$password=mysqli_real_escape_string($conn, $_POST['psw']);

	//error handlers
	//check for empty fields
	if (empty($firstname) || empty($lastname) || empty($email_id) || empty($username) || empty($password)) 
	{
			header("Location: ../sign.php?empty=".urlencode($empty)); //Now we will pass the message in url
			exit(); /*It will stop yhe script  from running*/
	}
	
	else{
		//check if input characters are valid
		//Now preg_match() is parameter which allows which string we can enter in input
			//First parameter is patter i-e String which are allowed and Second Parameter is input field 
			//But its better to check error first therefore first we will check NOT ( ! )
			if(!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname))
			{
				header("Location: ../sign.php?invalid=".urlencode($invalid)); //Now we will pass the message in url
				exit(); /*It will stop yhe script  from running*/
			}
			else
			{
				// if first and last fields are correct then we will continue further
				//Now we will check  for email
				// filter_var function is used 1st param is inpu field name and second is METHOD 
				// But first we will check for error
				if(!filter_var($email_id,FILTER_VALIDATE_EMAIL))
				{
					header("Location: ../sign.php?email=".urlencode($emailprob)); //Now we will pass the message in url
					exit(); /*It will stop yhe script  from running*/
				}
				else
				{
					// Now we will continue if email is correct
					// Now we will check for username that whether username already exist in database

					//username is name of column in Database AND username is what we will be taking from user
					$sql = "SELECT * FROM signup where username = '$username';";
					$result = mysqli_query($conn,$sql);
					// Now we will check how many no of rows are returned as result
					$resultCheck = mysqli_num_rows($result);

					// Now if $resultCheck has value > 0 it means that there is a user with same name
					if ($resultCheck > 0)
					{
						header("Location: ../sign.php?users=".urlencode($alreadyUser)); //Now we will pass the message in url
						exit(); /*It will stop yhe script  from running*/
					}
					else
					{
						// Now we will be hashing the password so that it is not redable to us also
						$hashedPwd = password_hash($password , PASSWORD_DEFAULT);

						// echo $hashedPwd;

						//Now after Hashing the password we will insert the user into database
						$sql = "INSERT INTO signup (firstname,lastname,email_id,username,password) values ('$firstname','$lastname','$email_id','$username','$hashedPwd');";
						//Now we will connec these query to database
						mysqli_query($conn,$sql);
						header("Location: ../login.php?success=insert".urlencode($succ)); //Now we will pass the message in url
						exit(); /*It will stop yhe script  from running*/
					}
				} 
			}
		}
}
else{
		// Now if signup button is not clicked then we will redirect user to signup.php file
		header("Location: ../sign.php?success=failed");
		exit(); /*It will stop yhe script  from running*/
	}	
?>
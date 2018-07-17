<?php
session_start();

	if (isset($_POST['submit'])) 
	{

		include_once 'dbh.inc.php';
	

		// Now we will extract from url  and put it into variable
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);

		//error handlers
		//check if fields empty

		if(empty($username) || empty($password))
		{
			header("Location: ../login.php?login=empty123");
				exit();
		}
		else
		{
			// Now here we will check that whether user exist inside the database
			$sql = "SELECT * FROM signup WHERE username='$username' or email_id='$username'";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);

			//First we will check error message
			if ($resultCheck < 1)
			{
				header("Location: ../login.php?problem=".urlencode($prob));
				exit();
			}
			else
			{
				if($row = mysqli_fetch_assoc($result))
				{
					//Now in row array we have user with its all columns i-e user_uid,user_first,user_last,user_email,user_uid,user_pwd

					//So now we will check for user which has been obtained with its pwd 
					//But pwd is HASHED
					//Now we will apply DE-HASHING
					// For De-hashing password_verfiy() method is used
					//1st param is actual pass that user entered and 2nd param is pass from database
					$hashedPasswordCheck = password_verify($password, $row['password']);
					if ($hashedPasswordCheck == false) 
					{
						header("Location: ../login.php?login=problem".urlencode($prob));
						exit();
					}
					elseif ($hashedPasswordCheck == true) 
					{
						//Log in the user
						//Now we will be using Super Global variable called SESSION
						//Now when we create a session variable we can access that session variable in all pages 
						$_SESSION['firstname'] = $row['firstname'];
						$_SESSION['lastname'] = $row['lastname'];
						$_SESSION['email_id'] = $row['email_id'];
						$_SESSION['username'] = $row['username'];
						$_SESSION['password'] = $row['password'];
						//$_SESSION['LAST_ACTIVITY'] = time();

						header("Location: ../write.php?login=success".urlencode($success));
						exit();
					}
				}	
			}
		}
	}
	
	else
	{
		header("Location: ../login.php?login=error123");
	}
?>
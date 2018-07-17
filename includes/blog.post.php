<?php
session_start();
include_once 'dbh.inc.php';
if(isset($_POST["upload"]))
{
    $check = getimagesize($_FILES["image1"]["tmp_name"]);
    $author = mysqli_real_escape_string($conn,$_POST['author']);
    $category=mysqli_real_escape_string($conn,$_POST['category']);
	$title = mysqli_real_escape_string($conn,$_POST['title']);
	$content = mysqli_real_escape_string($conn,$_POST['content']);

		
    if($check !== false)
    {
        $target_dir = "../images/";
        $target_dir_for_retrival = "images/";
        $target_file = $target_dir . basename($_FILES["image1"]["name"]);
        $retrival_file = $target_dir_for_retrival . basename($_FILES["image1"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["upload"])) 
        {
            $check = getimagesize($_FILES["image1"]["tmp_name"]);
            if($check !== false) 
            {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } 
            else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) 
        {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["image1"]["size"] > 10000000) 
        {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
        {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) 
        {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } 
        else 
        {
            if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file)) 
            {
                echo "The file ". basename( $_FILES["image1"]["name"]). " has been uploaded.";
            } 
            else 
            {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        //Insert data content into database
    	$sql = "INSERT INTO blog (author,category,title,content,img_src) values ('$author','$category','$title','$content','$retrival_file');";
        mysqli_query($conn,$sql);
        header("Location: ../editor.php?success=insert"); //Now we will pass the message in url
        exit(); //It will stop yhe script  from running
    }
}
else
{
		// Now if signup button is not clicked then we will redirect user to signup.php file
		header("Location: ../editor.php?success=failed");
		exit(); //It will stop yhe script  from running
}
?>
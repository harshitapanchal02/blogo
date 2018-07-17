<?php


if(isset($_GET['id'])){
	include_once 'includes/dbh.inc.php';
	$id = $_GET['comment_id'];
mysqli_query($con,"DELETE FROM comment WHERE comment_id='$id'");
header("location: comment_box/comment_box/index.php");
}
mysqli_close($con);
?>